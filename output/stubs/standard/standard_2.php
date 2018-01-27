<?php
function nl_langinfo ($item) {}
function soundex ($str) {}
function levenshtein ($str1, $str2, $cost_ins = null, $cost_rep = null, $cost_del = null) {}
function chr ($ascii) {}
function ord ($string) {}
function parse_str ($str, array &$arr = null) {}
function str_getcsv ($input, $delimiter = ",", $enclosure = '"', $escape = "\\") {}
function str_pad ($input, $pad_length, $pad_string = null, $pad_type = null) {}
function chop ($str, $character_mask) {}
function strchr ($haystack, $needle, $part) {}
function sprintf ($format, $args = null, $_ = null) {}
function printf ($format, $args = null, $_ = null) {}
function vprintf ($format, array $args) {}
function vsprintf ($format, array $args) {}
function fprintf ($handle, $format, $args = null, $_ = null) {}
function vfprintf ($handle, $format, array $args) {}
function sscanf ($str, $format, &$_ = null) {}
function fscanf ($handle, $format, &$_ = null) {}
function parse_url ($url, $component = -1) {}
function urlencode ($str) {}
function urldecode ($str) {}
function rawurlencode ($str) {}
function rawurldecode ($str) {}
function http_build_query ($query_data, $numeric_prefix = null, $arg_separator = null, $enc_type = PHP_QUERY_RFC1738){}
function readlink ($path) {}
function linkinfo ($path) {}
function symlink ($target, $link) {}
function link (string $target , string $link):bool {}
function unlink ($filename, $context = null) {}
function exec ($command, array &$output = null, &$return_var = null) {}
function system ($command, &$return_var = null) {}
function escapeshellcmd ($command) {}
function escapeshellarg ($arg) {}
function passthru ($command, &$return_var = null) {}
function shell_exec ($cmd) {}
function proc_open ($cmd, array $descriptorspec, array &$pipes, $cwd = null, array $env = null, array $other_options = null) {}
function proc_close ($process) {}
function proc_terminate ($process, $signal = null) {}
function proc_get_status ($process) {}
function proc_nice ($increment) {}
function rand ($min, $max) {}
function srand ($seed = null) {}
function getrandmax () {}
function mt_rand ($min, $max) {}
function mt_srand ($seed = null) {}
function mt_getrandmax () {}
function getservbyname ($service, $protocol) {}
function getservbyport ($port, $protocol) {}
function getprotobyname ($name) {}
function getprotobynumber ($number) {}
function getmyuid () {}
function getmygid () {}
function getmypid () {}
