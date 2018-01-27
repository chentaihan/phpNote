package main

import (
	"fmt"
	"regexp"
	"strings"

	"github.com/chentaihan/tools/util"
)

const (
	DOWNLOAD_URL = "http://php.net/manual/zh/%s.%s.php"
	URL_PREFIX   = "http://php.net/manual/zh/"
	LINK_TAG     = "<a href=\""
)

type Note struct {
	funName string
	funUrl  string
	funNote string
}

func NewNote(funName string) *Note {
	note := &Note{
		funName: strings.ToLower(funName),
	}
	note.GetFunUrl(note.funName)
	return note
}

func (note *Note) GetNote(content string) string {
	reg := regexp.MustCompile("dc-title\">[\\s\\S]+")
	ret := reg.FindAllString(content, -1)
	noteContent := ""
	if len(ret) > 0 {
		noteContent = note.parseNote(ret[0])
		if noteContent != "" {
			return note.updateLink(noteContent)
		}
	}
	return noteContent
}

func (note *Note) parseNote(content string) string {
	index := strings.Index(content, ">")
	if index < 0 {
		return ""
	}

	preEnd := 0
	end := 0
	for {
		end = IndexEx(content, "</span", end)
		if end > 0 {
			tmpIndex := IndexEx(content, "<span", preEnd)
			if tmpIndex > end || tmpIndex < 0 {
				return content[index+1 : end]
			}
			end += 6
			preEnd = end
		} else {
			break
		}
	}
	if end > index {
		return content[index+1 : end]
	}
	return ""
}

func (note *Note) updateLink(content string) string {
	var buffer *util.BufferWriter = nil
	offset := 0
	index := 0
	for {
		tmpIndex := IndexEx(content, LINK_TAG, offset)
		if tmpIndex >= 0 {
			if buffer == nil {
				buffer = util.NewBufferWriter(len(content) + len(URL_PREFIX))
			}
			tmpIndex += len(LINK_TAG)
			buffer.WriteString(content[offset:tmpIndex])
			buffer.WriteString(URL_PREFIX)
			offset = tmpIndex
			index = tmpIndex
		} else {
			break
		}
	}
	if buffer == nil {
		return content
	}
	return buffer.ToString() + content[index:]
}

func IndexEx(s, substr string, offset int) int {
	if len(s) < offset+len(substr) || offset < 0 {
		return -1
	}
	index := strings.Index(s[offset:], substr)
	if index < 0 {
		return index
	}
	return index + offset
}

func (note *Note) GetFunUrl(funName string) string {
	arr := strings.SplitN(funName, "::", 2)
	if len(arr) != 2 {
		funName = strings.Replace(funName, "_", "-", -1)
		note.funUrl = fmt.Sprintf(DOWNLOAD_URL, "function", funName)
	} else {
		arr[1] = strings.Replace(arr[1], "_", "-", -1)
		note.funUrl = fmt.Sprintf(DOWNLOAD_URL, arr[0], arr[1])
	}
	note.funUrl = strings.ToLower(note.funUrl)
	return note.funUrl
}

type NoteSort []*Note

func (s NoteSort) Len() int {
	return len(s)
}
func (s NoteSort) Swap(i, j int) {
	s[i], s[j] = s[j], s[i]
}
func (s NoteSort) Less(i, j int) bool {
	return s[i].funName < s[j].funName
}

type NoteList struct {
	NoteMap map[string]*Note
}

var noteList *NoteList = nil

func NewNoteList() *NoteList {
	noteList = &NoteList{
		NoteMap: make(map[string]*Note, 4096),
	}
	return noteList
}

func GetNoteList() *NoteList {
	return noteList
}

func (noteList *NoteList) AddNote(note *Note) {
	noteList.NoteMap[note.funUrl] = note
}

func (noteList *NoteList) SetFunNote(url string, data interface{}) {
	if funNote, isOK := data.([]byte); isOK {
		if _, isOK1 := noteList.NoteMap[url]; isOK1 {
			note := noteList.NoteMap[url]
			note.funNote = note.GetNote(string(funNote))
		}
	}
}

func (noteList *NoteList) getUrlList() []string {
	list := make([]string, 0, len(noteList.NoteMap))
	for _, note := range noteList.NoteMap {
		list = append(list, note.funUrl)
	}
	return list
}
