<?php
function iconv ($in_charset, $out_charset, $str) {}
function ob_iconv_handler ($contents, $status) {}
function iconv_get_encoding ($type = "all") {}
function iconv_set_encoding ($type, $charset) {}
function iconv_strlen ($str, $charset = 'ini_get("iconv.internal_encoding")') {}
function iconv_substr ($str, $offset, $length = 'iconv_strlen($str, $charset)', $charset = 'ini_get("iconv.internal_encoding")') {}
function iconv_strpos ($haystack, $needle, $offset = 0, $charset = 'ini_get("iconv.internal_encoding")') {}
function iconv_strrpos ($haystack, $needle, $charset = 'ini_get("iconv.internal_encoding")') {}
function iconv_mime_encode ($field_name, $field_value, array $preferences = null) {}
function iconv_mime_decode ($encoded_header, $mode = 0, $charset = 'ini_get("iconv.internal_encoding")') {}
function iconv_mime_decode_headers ($encoded_headers, $mode = 0, $charset = 'ini_get("iconv.internal_encoding")') {}
define ('ICONV_IMPL', "glibc");
define ('ICONV_VERSION', 2.17);
define ('ICONV_MIME_DECODE_STRICT', 1);
define ('ICONV_MIME_DECODE_CONTINUE_ON_ERROR', 2);
?>
