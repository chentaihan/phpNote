package main

import (
	"strings"
	"os"
	"bufio"
	"io"
	"io/ioutil"
	"fmt"

	"github.com/chentaihan/Tools/util"
)

func filterNoteByDir(filePath string, isNeedNote bool) {
	fileMap := getFileList(filePath)
	for sourceFile, destFile := range fileMap {
		outPutBytes := filterNote(sourceFile, isNeedNote)
		ioutil.WriteFile(destFile, outPutBytes, 0x700)
		fmt.Println(string(outPutBytes))
	}
}

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
	for i := len(line) - 1; i >= 0; i++ {
		if line[i] != ' ' {
			return false
		}
	}
	return true
}

func isNoteStart(line string) bool {
	line = strings.TrimRight(line, "\n")
	line = strings.Trim(line, " ")
	return strings.HasPrefix(line, "/**")
}

func isNoteEnd(line string) bool {
	line = strings.TrimRight(line, "\n")
	line = strings.Trim(line, " ")
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

func getFileList(filePath string) map[string]string {
	fileMap := make(map[string]string, 0)
	dirList, _ := ioutil.ReadDir(filePath)
	outPutPath := filePath + "output/"
	for _, item := range dirList {
		name := item.Name()
		if !item.IsDir() {
			sourceFile := filePath + name
			destFile := outPutPath + name
			fileMap[sourceFile] = destFile
		}
	}
	return fileMap
}
