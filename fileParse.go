package main

import (
	"bufio"
	"io"
	"os"
	"strings"

	"github.com/chentaihan/tools/util"
)

type OneFile struct {
	FilePath   string
	FunList    []string
	MethodList []string
}

func NewOneFile(filePath string) *OneFile {
	return &OneFile{
		FilePath: filePath,
	}
}

func (oneFile *OneFile) Parse() {
	f, err := os.Open(oneFile.FilePath)
	if err != nil {
		panic(err)
	}
	defer f.Close()

	rd := bufio.NewReader(f)
	inClass := false
	className := ""
	depth := 0
	for {
		line, err := rd.ReadString('\n') //以'\n'为结束符读入一行
		if err != nil || io.EOF == err {
			break
		}

		line = strings.Trim(line, "\n")
		if isEmptyLine(line) {
			continue
		}

		if !inClass {
			inClass, className = oneFile.isClassHeader(line)
		}
		depth += util.GetDepth(line)
		if inClass && depth == 0 {
			inClass = false
		}

		if inClass {
			methodName := oneFile.parseMethod(line)
			if methodName != "" {
				methodName = className + "::" + methodName
				oneFile.MethodList = append(oneFile.MethodList, methodName)
			}
		} else {
			funName := oneFile.parseFunction(line)
			if funName != "" {
				oneFile.FunList = append(oneFile.FunList, funName)
			}
		}
	}
}

//函数
func (oneFile *OneFile) parseFunction(line string) string {
	line = strings.Trim(line, " ")
	if strings.Index(line, "function") == 0 {
		arr := strings.SplitN(line, " ", 2)
		arr = strings.SplitN(arr[1], "(", 2)
		return strings.Trim(arr[0], " ")
	}
	return ""
}

//成员方法
func (oneFile *OneFile) parseMethod(line string) string {
	line = strings.Trim(line, " ")
	line = util.MergeSpace(line)
	arr := strings.SplitN(line, " ", 3)
	if len(arr) >= 3 {
		if arr[0] == "public" && arr[1] == "function" {
			return util.GetLegalString(arr[2])
		}
	}

	return ""
}

//class定义
func (oneFile *OneFile) isClassHeader(line string) (bool, string) {
	line = strings.Trim(line, " ")
	line = util.MergeSpace(line)
	arr := strings.SplitN(line, " ", 3)
	if len(arr) >= 3 {
		if arr[0] == "class" && arr[2] == "{" && util.IsLegalString(arr[1]) {
			arr[1] = strings.Trim(arr[1], " ")
			if arr[1] != "" {
				return true, arr[1]
			}
			return false, ""
		}
	}
	return false, ""
}
