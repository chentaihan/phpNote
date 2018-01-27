package main

import (
	"github.com/chentaihan/tools/util"
	"testing"
)

func Test_getNote(t *testing.T) {
	content := util.HttpGet("http://php.net/manual/zh/function.dns-get-mx.php")
	note := &Note{}
	str := note.GetNote(string(content))
	t.Log(str)
}


func Test_updateLink(t *testing.T) {
	note := &Note{}
	content := " 别名 <span class=\"methodname\"><a href=\"datetimezone.getlocation.php\" class=\"methodname\">DateTimeZone::getLocation()</a></span>"
	str := note.updateLink(content)
	t.Log(str)

	content = "别名 <span class=\"methodname\"><a href=\"datetimezone.getlocation.php\" class=\"methodname\">DateTimeZone::getLocation()</a></span> 别名 <span class=\"methodname\"><a href=\"datetimezone.getlocation.php\" class=\"methodname\">DateTimeZone::getLocation()</a></span>"
	str = note.updateLink(content)
	t.Log(str)

	content = "别名 <span class=\"methodname\"><a datetimezone.getlocation.php\" class=\"methodname\">DateTimeZone::getLocation()</a></span> 别名 <span class=\"methodname\"><a he ref=\"datetimezone.getlocation.php\" class=\"methodname\">DateTimeZone::getLocation()</a></span>"
	str = note.updateLink(content)
	t.Log(str)
}