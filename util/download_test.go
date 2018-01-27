package util

import (
	"testing"
	"time"
)

func Test_download(t *testing.T) {
	download := NewDownload()
	download.Start()
	fileList := []string{
		"http://php.net/manual/zh/function.array-key-exists.php",
		"http://php.net/manual/zh/function.array-chunk.php",
		"http://php.net/manual/zh/function.array-count-values.php",
		"http://php.net/manual/zh/function.array-diff-key.php",
		"http://php.net/manual/zh/function.array-filter.php",
		"http://php.net/manual/zh/function.array-merge.php",
	}
	download.Add(fileList)
	time.Sleep(time.Second * 40)
	for _,url := range download.SuccessList{
		t.Log(url)
	}
}