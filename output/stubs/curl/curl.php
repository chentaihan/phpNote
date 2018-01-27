<?php
class CURLFile {
    public $name;
    public $mime;
    public $postname;
    function __construct($filename, $mimetype, $postname) {
    }
    public function getFilename() {
    }
    public function getMimeType() {
    }
    public function getPostFilename() {
    }
    public function setMimeType($mime) {
    }
    public function setPostFilename($postname) {
    }
    public function __wakeup() {
    }
}
function curl_init ($url = null) {}
function curl_copy_handle ($ch) {}
function curl_version ($age = null) {}
function curl_setopt ($ch, $option, $value) {}
function curl_setopt_array ($ch, array $options) {}
function curl_share_close ($sh) {}
function curl_share_init () {}
function curl_share_setopt ($sh, $option, $value ) {}
function curl_strerror ($errornum ) {}
function  curl_unescape ($ch, $str)  {}
function curl_exec ($ch) {}
function curl_getinfo ($ch, $opt = null) {}
function curl_error ($ch) {}
function curl_errno ($ch) {}
function curl_escape($ch, $str) {}
function curl_file_create($filename, $mimetype, $postname) {}
function curl_close ($ch) {}
function curl_multi_init () {}
function curl_multi_add_handle ($mh, $ch) {}
function curl_multi_remove_handle ($mh, $ch) {}
function curl_multi_select ($mh, $timeout = null) {}
function curl_multi_setopt ($mh, $option, $value) {}
function curl_multi_strerror ($errornum) {}
function curl_pause ($ch, $bitmask ) {}
function curl_reset ($ch) {}
function curl_multi_exec ($mh, &$still_running) {}
function curl_multi_getcontent ($ch) {}
function curl_multi_info_read ($mh, &$msgs_in_queue = null) {}
function curl_multi_close ($mh) {}
function curl_multi_errno($mh) {}
function curl_share_errno(resource $rh) {}
function curl_share_strerror($errno){}
