package main

import (
	"fmt"
	"io/ioutil"

	"github.com/chentaihan/tools/util"
)

const (
	TR_HEADER_FORMAT  = "<tr><th colspan=\"3\">%s</th></tr>"
	TR_CONTENT_FORMAT = "<tr><td>%d</td><td>%s</td><td>%s</td></tr>"
	FUNNAME_LINK      = "<a href=\"%s\">%s</a>"
)

var trIndex int = 0

type NoteClassify struct {
	curChar byte
	notes   []*Note
}

//格式化输出到HTML文件
func FormatOutPut(noteList []*Note) {
	var curChar byte = ' '
	var noteClassify *NoteClassify
	buffer := util.NewBufferWriter(len(noteList) * 4096)
	for _, note := range noteList {
		if note.funName[0] != curChar {
			curChar = note.funName[0]
			if noteClassify != nil {
				data := noteClassify.GetBytes()
				if data != nil {
					buffer.Write(data)
				}
			}
			noteClassify = &NoteClassify{
				curChar: note.funName[0],
			}
		} else {
			noteClassify.notes = append(noteClassify.notes, note)
		}
	}
	if noteClassify != nil {
		data := noteClassify.GetBytes()
		if data != nil {
			buffer.Write(data)
		}
	}
	outputFile(buffer.GetBuffer())
}

func outputFile(data []byte) {
	configFormat := util.GetFormatFile()
	content, err := ioutil.ReadFile(configFormat)
	if err != nil {
		return
	}
	var index int = -1
	for i := 0; i < len(content); i++ {
		if content[i] == '$' && content[i+1] == '$' {
			index = i
		}
	}

	outputFile := util.GetFormatOutPutFile()
	ioutil.WriteFile(outputFile, content[:index], 0777)
	util.WriteFileAppend(outputFile, data, 0666)
	util.WriteFileAppend(outputFile, content[index+2:], 0666)
}

func getTrHeader(curChar byte) string {
	return fmt.Sprintf(TR_HEADER_FORMAT, string(curChar))
}

func getTrContent(noteList []*Note) []byte {
	buffer := util.NewBufferWriter(4096)
	for _, note := range noteList {
		aLink := fmt.Sprintf(FUNNAME_LINK, note.funUrl, note.funName)
		buffer.WriteString(fmt.Sprintf(TR_CONTENT_FORMAT, trIndex, aLink, note.funNote))
		trIndex++
	}
	return buffer.GetBuffer()
}

func (noteClassify *NoteClassify) GetBytes() []byte {
	if len(noteClassify.notes) > 0 {
		buffer := util.NewBufferWriter(4096)
		buffer.WriteString("<table>")
		buffer.WriteString(getTrHeader(noteClassify.curChar))
		buffer.Write(getTrContent(noteClassify.notes))
		buffer.WriteString("</table><br/><br/>")
		return buffer.GetBuffer()
	}
	return nil
}
