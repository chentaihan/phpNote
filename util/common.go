package util

import "strings"

func RemoveSlice(list []string, item string) []string {
	for index, urlItem := range list {
		if item == urlItem {
			if index == len(list) - 1 {
				list = list[0:index]
			} else {
				list = append(list[0:index], list[index+1:]...)
			}
			return list
		}
	}
	return list
}

//是否是合法字符
func IsLegalChar(c rune) bool {
	if (c >= '0' && c <= '9') || c == '_' || (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') {
		return true
	}
	return false
}

//是否是合法变量名
func IsLegalString(line string) bool{
	if line == "" {
		return false
	}
	for _,c := range line{
		if !IsLegalChar(c) {
			return false
		}
	}
	return true
}

func GetLegalString(line string) string {
	isStart := false
	newLine := make([]rune, 0, len(line))
	for _, c := range line {
		if IsLegalChar(c) {
			if !isStart {
				isStart = true
			}
			newLine = append(newLine, c)
			continue
		}
		if isStart {
			break
		}
	}
	return string(newLine)
}


//合并重复空格
func MergeSpace(line string) string {
	if line == "" {
		return line
	}
	inBuf := []byte(line)
	outBuf := NewBufferWriter(len(inBuf))
	for index, val := range inBuf {
		if val == ' ' && index < len(inBuf)-1 && inBuf[index+1] == ' ' {
			continue
		}
		outBuf.WriteChar(val)
	}
	return outBuf.ToString()
}

func GetDepth(line string) int {
	count := 0

	keys := map[int]string{
		1:  "{",	//存在一个{，加1
		-1: "}",	//存在一个}，减1
	}
	for cnt, key := range keys {
		tmpLine := line
		for {
			index := strings.Index(tmpLine, key)
			if index >= 0 {
				count += cnt
				if index == len(tmpLine) -1 {
					break
				}
				tmpLine = tmpLine[index+1:]
			} else {
				break
			}
		}
	}

	return count
}