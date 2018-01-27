package util

import (
	"io"
	"os"
	"path"
)

func WriteFile(filename string, data []byte, perm os.FileMode) error {
	f, err := os.OpenFile(filename, os.O_RDWR|os.O_CREATE, perm)
	if err != nil {
		return err
	}
	n, err := f.Write(data)
	if err == nil && n < len(data) {
		err = io.ErrShortWrite
	}
	if err1 := f.Close(); err == nil {
		err = err1
	}
	return err
}

//获取输出目录
func GetOutPutPath() string {
	curDir := os.Args[0]
	outputPath := path.Dir(path.Dir(curDir)) + "/" + OUTPUT_PATH
	MkDir(outputPath)
	return outputPath
}

func GetFormatFile() string {
	curDir := os.Args[0]
	outputPath := path.Dir(path.Dir(curDir)) + "/" + FORMAT_FILE
	return outputPath
}


func GetFormatOutPutFile() string {
	curDir := os.Args[0]
	outputPath := path.Dir(path.Dir(curDir)) + "/" + FORMAT_OUTPUT_FILE
	return outputPath
}