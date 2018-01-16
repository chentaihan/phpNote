package util

import "unsafe"

const (
	BUFFER_SIZE = 1024
	CUT_CHAR    = '\n'
)

type LineInfo struct {
	Start int
	End   int
}

type BufferWriter struct {
	buffer []byte
	Size   int
	line   LineInfo
}

func NewBufferWriter(bufSize int) *BufferWriter {
	writer := &BufferWriter{}
	if bufSize <= 0 {
		bufSize = BUFFER_SIZE
	}
	writer.buffer = make([]byte, 0, bufSize)
	return writer
}

func (writer *BufferWriter) Write(p []byte) (n int, err error) {
	writer.buffer = append(writer.buffer, p...)
	n = len(p)
	writer.Size += n
	err = nil
	return n, err
}

func (writer *BufferWriter) WriteChar(p byte) (n int, err error) {
	writer.buffer = append(writer.buffer, p)
	writer.Size += 1
	err = nil
	return 1, err
}

func (writer *BufferWriter) WriteString(str string) (n int, err error) {
	p := []byte(str)
	writer.buffer = append(writer.buffer, p...)
	n = len(p)
	writer.Size += n
	err = nil
	return n, err
}

func (writer *BufferWriter) Clear() {
	writer.buffer = writer.buffer[0:0]
	writer.Size = 0
	writer.Reset()
}

func (writer *BufferWriter) GetBuffer() []byte {
	return writer.buffer[0:writer.Size]
}

func (writer *BufferWriter) ToString() string {
	buf := writer.GetBuffer()
	p := (*string)(unsafe.Pointer(&buf))
	return *p
}

func (writer *BufferWriter) MoveNext() bool {
	if writer.line.End >= writer.Size {
		return false
	}
	writer.line.Start = writer.line.End
	i := writer.line.Start
	for ; i < writer.Size; i++ {
		if writer.buffer[i] == CUT_CHAR {
			writer.line.End = i + 1
			break
		}
	}
	if i >= writer.Size {
		writer.line.End = i
	}
	return true
}

func (writer *BufferWriter) IsEnd() bool {
	if writer.line.End >= writer.Size {
		return true
	}
	return false
}

func (writer *BufferWriter) Current() string {
	return string(writer.buffer[writer.line.Start:writer.line.End])
}

func (writer *BufferWriter) Reset() {
	writer.line.Start = 0
	writer.line.End = 0
}

//删除分割字符
func (writer *BufferWriter) RemoveCutChar() {
	decrCount := 0
	for i := writer.Size - 1; i >= 0; i-- {
		if writer.buffer[i] == CUT_CHAR {
			decrCount++
			for j := i + 1; j < writer.Size; j++ {
				writer.buffer[j-1] = writer.buffer[j]
			}
		}
	}
	writer.Size -= decrCount
}
