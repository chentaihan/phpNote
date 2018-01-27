package util


import (
	"testing"
)

func Test_RemoveSlice(t *testing.T) {

	for index := 0; index < 10; index++{
		list := []string{
			"0",
			"1",
			"2",
			"3",
			"4",
			"5",
			"6",
			"7",
			"8",
			"9",
		}
		val := list[index]
		tmpList := RemoveSlice(list, val)
		t.Log("remove ", val, " : ")
		for _,val1 := range tmpList{
			t.Log(val1, ", ")
		}

	}
}