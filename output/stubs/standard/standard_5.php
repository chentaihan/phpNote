<?php
function boolval($var) {}
function intval ($var, $base = null) {}
function floatval ($var) {}
function doubleval ($var) {}
function strval ($var) {}
function gettype ($var) {}
function settype (&$var, $type) {}
function is_null ($var) {}
function is_resource ($var) {}
function is_bool ($var) {}
function is_long ($var) {}
function is_float ($var) {}
function is_int ($var) {}
function is_integer ($var) {}
function is_double ($var) {}
function is_real ($var) {}
function is_numeric ($var) {}
function is_string ($var) {}
function is_array ($var) {}
function is_object ($var) {}
function is_scalar ($var) {}
function is_callable ($var, $syntax_only = null, &$callable_name = null) {}
function pclose ($handle) {}
function popen ($command, $mode) {}
function readfile ($filename, $use_include_path = null, $context = null) {}
function rewind ($handle) {}
function rmdir ($dirname, $context = null) {}
function umask ($mask = null) {}
function fclose ($handle) {}
function feof ($handle) {}
function fgetc ($handle) {}
function fgets ($handle, $length = null) {}
function fgetss ($handle, $length = null, $allowable_tags = null) {}
function fread ($handle, $length) {}
function fopen ($filename, $mode, $use_include_path = null, $context = null) {}
function fpassthru ($handle) {}
function ftruncate ($handle, $size) {}
function fstat ($handle) {}
function fseek ($handle, $offset, $whence = SEEK_SET) {}
function ftell ($handle) {}
function fflush ($handle) {}
function fwrite ($handle, $string, $length = null) {}
function fputs ($handle, $string, $length) {}
function mkdir ($pathname, $mode = 0777, $recursive = false, $context = null) {}
function rename ($oldname, $newname, $context = null) {}
function copy ($source, $dest, $context = null) {}
function tempnam ($dir, $prefix) {}
function tmpfile () {}
function file ($filename, $flags = null, $context = null) {}
function file_get_contents ($filename, $use_include_path = false, $context = null, $offset = 0, $maxlen = null) {}
function file_put_contents ($filename, $data, $flags = 0, $context = null) {}
