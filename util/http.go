package util

import (
	"bytes"
	"log"
	"net/http"
)

func HttpGet(url string) []byte {
	resp, err := http.Get(url)
	if err != nil {
		log.Println(err)
		return nil
	}

	defer resp.Body.Close()

	if resp.StatusCode >= 200 && resp.StatusCode < 300 {
		buf := bytes.NewBuffer(make([]byte, 0, 512))

		buf.ReadFrom(resp.Body)

		return buf.Bytes()
	}

	return nil
}
