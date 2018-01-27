package main

import (
	"bufio"
	"io"
	"io/ioutil"
	"os"
	"strings"

	"github.com/chentaihan/phpNote/util"
	"path"
)

func filterNote(filePath string, isNeedNote bool) []byte {
	f, err := os.Open(filePath)
	if err != nil {
		panic(err)
	}
	defer f.Close()

	rd := bufio.NewReader(f)
	isInNote := false

	var outBuffer util.BufferWriter
	var tmpBuffer util.BufferWriter
	for {
		line, err := rd.ReadString('\n') //以'\n'为结束符读入一行
		if err != nil || io.EOF == err {
			break
		}

		if isEmptyLine(line) {
			continue
		}

		if isOneLineNote(line) {
			continue
		}

		if !isInNote {
			if isNoteStart(line) {
				isInNote = true
			}
		}
		if isInNote {
			if isNeedNote {
				tmpBuffer.WriteString(line)
			}

			if isNoteEnd(line) {
				isInNote = false
				if isNeedNote {
					note := getNoteStart(&tmpBuffer)
					outBuffer.WriteString("\t//" + note)
					tmpBuffer.Clear()
				}
			}
		} else {
			outBuffer.WriteString(line)
		}

	}
	return outBuffer.GetBuffer()
}

func isEmptyLine(line string) bool {
	line = strings.Trim(line, "\n")
	for i := len(line) - 1; i >= 0; i-- {
		if line[i] != ' ' {
			return false
		}
	}
	return true
}

func isOneLineNote(line string) bool {
	line = strings.Trim(line, "\n")
	line = strings.Trim(line, " ")
	line = strings.Trim(line, "\t")
	line = strings.Trim(line, " ")
	if strings.Index(line, "//") == 0 {
		return true
	}
	return strings.HasPrefix(line, "/*") && strings.HasSuffix(line, "*/")
}

func isNoteStart(line string) bool {
	line = strings.Trim(line, " ")
	line = strings.TrimLeft(line, "\t")
	line = strings.TrimLeft(line, " ")
	return strings.HasPrefix(line, "/**")
}

func isNoteEnd(line string) bool {
	line = strings.TrimRight(line, "\n")
	line = strings.TrimRight(line, " ")
	line = strings.TrimRight(line, "\t")
	line = strings.TrimRight(line, " ")
	return strings.HasSuffix(line, "*/")
}

func getNoteStart(buffer *util.BufferWriter) string {
	buffer.Reset()
	count := 2
	for count >= 0 && buffer.MoveNext() {
		count--
		if count == 0 {
			note := buffer.Current()
			note = strings.TrimLeft(note, " ")
			note = strings.TrimLeft(note, "*")
			return note
		}
	}
	return ""
}

func getFileMap(dir string) map[string]string {
	var queue util.Queue
	queue.Enqueue(dir)
	list := make(map[string]string, 100)
	outPutPath := util.GetOutPutPath()
	rootPath := dir
	for queue.Size() > 0 {
		dir = queue.Dequeue().(string)
		dirList, _ := ioutil.ReadDir(dir)
		if !strings.HasSuffix(dir, "/") {
			dir += "/"
		}

		for _, item := range dirList {
			name := item.Name()
			if item.IsDir() {
				if name != "." && name != ".." {
					queue.Enqueue(dir + item.Name())
				}
			} else {
				ext := strings.ToLower(path.Ext(name))
				if ext == ".php" {
					key := dir + name
					outPutSubPath := outPutPath + strings.Replace(dir, rootPath, "", 1)
					util.MkDir(outPutSubPath)
					list[key] = outPutSubPath + name
				}
			}
		}
	}

	return list
}

func getFileList(filePath string) []string {
	var queue util.Queue
	queue.Enqueue(filePath)
	list := make([]string, 0, 100)
	for queue.Size() > 0 {
		dir := queue.Dequeue().(string)
		dirList, _ := ioutil.ReadDir(dir)
		if !strings.HasSuffix(dir, "/") {
			dir += "/"
		}

		for _, item := range dirList {
			name := item.Name()
			if item.IsDir() {
				if name != "." && name != ".." {
					queue.Enqueue(dir + item.Name())
				}
			} else {
				ext := strings.ToLower(path.Ext(name))
				if ext == ".php" {
					list = append(list, dir+name)
				}
			}
		}
	}

	return list
}
