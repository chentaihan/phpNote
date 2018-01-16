package main

import (
	"os"
)

func main() {
	filePath := ""
	if len(os.Args) >= 2 {
		filePath = os.Args[1]
	}
	if filePath == "" {
		filePath = "/Users/didi/work/php-class-function/"
	}

	filterNoteByDir(filePath, false)
}
