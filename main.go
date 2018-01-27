package main

import (
	"fmt"
	"sort"

	"github.com/chentaihan/phpNote/util"
)

var finishChan chan int

func downLoadFinish() {
	noteList := GetNoteList()
	noteArray := make([]*Note, 0, len(noteList.NoteMap))
	for _, note := range noteList.NoteMap {
		if note.funNote != "" && note.funName != "" {
			noteArray = append(noteArray, note)
		}
	}
	sort.Sort(NoteSort(noteArray))
	FormatOutPut(noteArray)
	finishChan <- 1
}

func main() {
	finishChan = make(chan int, 1)

	download := util.NewDownload()
	download.Start()
	noteList := NewNoteList()
	download.RegisterCallBack(noteList.SetFunNote, nil, downLoadFinish)
	outPutFileList := getFileList(util.GetOutPutPath())
	for _, filePath := range outPutFileList {
		oneFile := NewOneFile(filePath)
		oneFile.Parse()
		for _, funName := range oneFile.FunList {
			note := NewNote(funName)
			noteList.AddNote(note)
		}
		for _, funName := range oneFile.MethodList {
			note := NewNote(funName)
			noteList.AddNote(note)
		}
	}
	urlList := noteList.getUrlList()
	download.Add(urlList)

	finishCode := <-finishChan
	for _, item := range noteList.NoteMap {
		if item.funNote != "" {
			fmt.Println(item.funName, item.funNote)
		}
	}

	fmt.Println("finishCode=", finishCode)
}
