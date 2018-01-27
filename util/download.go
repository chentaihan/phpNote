package util

/**
http下载文件
1个协程更新所有数据状态，即不用考虑多协程同步问题，同时这个协程也是消息循环的主循环，负责接收处理所有消息
N个协程（只）负责下载文件，下载完成发后消息给主循环，主循环做相关处理
*/

import (
	"fmt"
	"runtime"
)

//下载相关命令
const (
	DOWNLOAD_CMD_BEFORE  = 0
	DOWNLOAD_CMD_SUCCESS = 1
	DOWNLOAD_CMD_FAILED  = 2
	DOWNLOAD_CMD_STOP    = 3
)

//协程状态
const (
	GOROUTINE_STATUS_BEFORE  = 0
	GOROUTINE_STATUS_RUNNING = 1
	GOROUTINE_STATUS_STOP    = 2
)

type DownloadCallBack func(url string, data interface{})
type FinishCallBack func()

type SignalInfo struct {
	url    string
	status int8
	data   interface{}
}

type Download struct {
	BeforeList      []string
	IngList         []string
	SuccessList     map[string][]byte
	FailedList      []string
	chanSignal      chan SignalInfo
	status          int8
	successCallBack DownloadCallBack
	failedCallBack  DownloadCallBack
	finishCallBack  FinishCallBack
}

func NewDownload() *Download {
	return &Download{
		status:      GOROUTINE_STATUS_BEFORE,
		SuccessList: make(map[string][]byte, 64),
		chanSignal:  make(chan SignalInfo, runtime.NumCPU()),
	}
}

//注册成功/失败/所有下载完成回调
func (download *Download) RegisterCallBack(sucBack, failBack DownloadCallBack, finishBack FinishCallBack) {
	download.successCallBack = sucBack
	download.failedCallBack = failBack
	download.finishCallBack = finishBack
}

//添加下载文件
func (download *Download) Add(fileList []string) {
	var signal SignalInfo
	signal.status = DOWNLOAD_CMD_BEFORE
	signal.data = fileList
	download.chanSignal <- signal
}

//开始下载
func (download *Download) Start() {
	if download.status != GOROUTINE_STATUS_RUNNING {
		download.status = GOROUTINE_STATUS_RUNNING
		go download.doLoop() //所有数据都在这个协程处理
	}
}

//停止下载，正在下载的不会停
func (download *Download) Stop() {
	if download.status == GOROUTINE_STATUS_RUNNING {
		var signal SignalInfo
		signal.status = DOWNLOAD_CMD_STOP
		download.chanSignal <- signal
	}
}

//获取主协程状态
func (download *Download) GetStatus() int8 {
	return download.status
}

//主协程消息循环
func (download *Download) doLoop() {
	for signal := range download.chanSignal {
		switch signal.status {
		case DOWNLOAD_CMD_BEFORE:
			download.BeforeList = append(download.BeforeList, signal.data.([]string)...)
		case DOWNLOAD_CMD_SUCCESS:
			download.IngList = RemoveSlice(download.IngList, signal.url)
			if data, isOk := signal.data.([]byte); isOk {
				download.SuccessList[signal.url] = data
				if download.successCallBack != nil {
					download.successCallBack(signal.url, data)
				}
			}
			fmt.Println(signal.url, " success left: ", len(download.BeforeList))
		case DOWNLOAD_CMD_FAILED:
			download.IngList = RemoveSlice(download.IngList, signal.url)
			download.FailedList = append(download.FailedList, signal.url)
			if download.failedCallBack != nil {
				download.failedCallBack(signal.url, nil)
			}
			fmt.Println(signal.url, " failed left: ", len(download.BeforeList))
		case DOWNLOAD_CMD_STOP:
			download.status = GOROUTINE_STATUS_STOP
			break
		}

		//下载文件 **同时下载的协程太多IP会被php.net拉黑，真的不能怪我的代码速度慢啊**
		for runtime.NumCPU()*2 > len(download.IngList) && len(download.BeforeList) > 0 {
			url := download.BeforeList[0]
			download.BeforeList = RemoveSlice(download.BeforeList, url)
			download.IngList = append(download.IngList, url)
			go download.downLoad(url) //同时有runtime.NumCPU()个协程在下载文件
		}
		//所有文件下载完成
		if len(download.BeforeList) == 0 && len(download.IngList) == 0 {
			if download.finishCallBack != nil {
				download.finishCallBack()
			}
		}
	}
}

//执行下载
func (download *Download) downLoad(url string) []byte {
	ret := HttpGet(url)

	var signal SignalInfo
	signal.url = url
	if ret != nil {
		signal.status = DOWNLOAD_CMD_SUCCESS
	} else {
		signal.status = DOWNLOAD_CMD_FAILED
	}
	signal.data = ret
	download.chanSignal <- signal
	return ret
}
