package util

import (
	"fmt"
	"io"
	"net/http"
	"os"
	"io/ioutil"
	"strings"

	"../util/logger"
)

func IsExist(fileName string) bool {
	_, err := os.Stat(fileName)
	if err != nil {
		if os.IsNotExist(err) {
			return false
		}
	}
	return true
}

func CreateFile(fileName string) bool{
	file, err := os.Create(fileName);
	if err != nil {
		return false
	}
	file.Close()
	return true
}

func WriteBytesCover(fileName string, content []byte) bool {
	fout, err := os.OpenFile(fileName, os.O_CREATE, 0666)
	fout.Truncate(int64(len(content)))
	defer fout.Close()
	if err != nil {
		return false
	}
	_, err = fout.Write(content)
	return err == nil
}

func WriteString(fileName, content string) int {
	fout, err := os.OpenFile(fileName, os.O_APPEND|os.O_CREATE, 0666)
	defer fout.Close()
	if err != nil {
		return 0
	}
	count, _ := fout.WriteString(content)
	return count
}

func WriteBytes(fileName string, content []byte) bool {
	fout, err := os.OpenFile(fileName, os.O_APPEND|os.O_CREATE, 0666)
	defer fout.Close()
	if err != nil {
		return false
	}
	count, _ := fout.Write(content)
	return count == len(content)
}

func ReadString(fileName string) (string, error) {
	bytes, err := ReadFile(fileName)
	return string(bytes), err
}

func ReadFile(fileName string) ([]byte, error) {
	return ioutil.ReadFile(fileName)
}

func WriteFileOffset(fileName string, offset int64, content []byte) bool{
	fout, err := os.OpenFile(fileName, os.O_APPEND|os.O_CREATE, 0666)
	defer fout.Close()
	if err != nil {
		return false
	}
	fout.Seek(offset, 0)
	count, _ := fout.Write(content)
	return count == len(content)
}

func ReadFileOffset(fileName string, offset int64, length int64) ([]byte, error){
	f, err := os.Open(fileName)
	if err != nil {
		return nil, err
	}
	defer f.Close()
	var n int64 = 0
	if fi, err := f.Stat(); err == nil {
		if size := fi.Size(); size < 1e9 {
			n = size
		}
	}
	if n <= offset {
		return nil,nil
	}
	f.Seek(offset, 0)
	buf := make([]byte, length)
	var size int64 = 0
	for {
		n, _ := f.Read(buf[size:])
		size += int64(n)
		if n == 0 || size >= length{
			break
		}
	}
	return buf, nil
}

func FileSize(fileName string) int64 {
	fileInfo, err := os.Stat(fileName)
	if err != nil {
		return 0
	}
	return fileInfo.Size()
}

func IsDir(fileName string) bool {
	fileInfo, err := os.Stat(fileName)
	if err != nil {
		return false
	}
	return fileInfo.IsDir()
}

func Rename(oldpath, newpath string) bool {
	err := os.Rename(oldpath, newpath)
	return err == nil
}

func Remove(fileName string) bool {
	err := os.Remove(fileName)
	return err == nil
}

func CopyFile(src, dest string) bool {
	var err error
	var srcFile, destFile *os.File
	srcFile, err = os.Open(src)
	if err != nil {
		return false
	}
	defer srcFile.Close()
	destFile, err = os.Create(dest)
	if err != nil {
		return false
	}
	defer destFile.Close()
	_, err = io.Copy(destFile, srcFile)
	return err == nil
}

func MkDir(path string) bool {
	err := os.MkdirAll(path, 0777)
	return err == nil
}

func GetFileInfo(fileName string) (os.FileInfo, error) {
	return os.Stat(fileName)
}

func Truncate(fileName string, newSize int64) bool {
	err := os.Truncate(fileName, newSize)
	return err == nil
}

func DownloadFile(url, fileName string) bool {
	newFile, err := os.Create(fileName)
	if err != nil {
		return false
	}
	defer newFile.Close()
	response, err1 := http.Get(url)
	if err1 != nil {
		return false
	}
	defer response.Body.Close()
	_, err2 := io.Copy(newFile, response.Body)
	return err2 != nil
}

func FileTest1() {
	fileName := "test.txt"
	WriteString(fileName, "1234567890");
	WriteString(fileName, "qwertyuiopasdfghjklzxcvbnm");
	bytes,_ := ReadFile(fileName)
	fmt.Println(string(bytes))
	bytes1,_ := ReadFileOffset(fileName, 10, 26)
	fmt.Println(bytes1)

	WriteBytesCover(fileName,[]byte("chentaihan"))
	bytes,_ = ReadFile(fileName)
	fmt.Println(string(bytes))
}

//递归打印目录
func RecursionDir(dir string){
	dirList, _ := ioutil.ReadDir(dir)
	if !strings.HasSuffix(dir, "\\"){
		dir += "\\"
	}
	for _, item := range dirList{
		if item.IsDir() {
			RecursionDir(dir + item.Name())
		}else{
			fmt.Println(dir + item.Name())
		}
	}
}

func FileTest() {
	fileName := "test.txt"
	WriteString(fileName, "write string 12345667890\r\n")
	WriteBytes(fileName, []byte("write byte 12345667890\r\n"))
	content, _ := ReadString(fileName)
	fmt.Println(content)
	bytes, _ := ReadFile(fileName)
	fmt.Println(string(bytes))

	fmt.Println(FileSize(fileName))
	GetFileInfo(fileName)

	// DownloadFile("http://files.cnblogs.com/files/hlxs/LifeRecord.apk", "LifeRecord.apk")
	// fmt.Println(IsExist("LifeRecord.apk"))
	// DownloadFile("http://www.baidu.com", "baidu.txt")

}

