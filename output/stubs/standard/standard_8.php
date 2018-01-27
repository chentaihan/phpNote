<?php
function syslog ($priority, $message) {}
function closelog () {}
function header_register_callback ( callable $callback ) {}
function getimagesizefromstring ($imagedata , array &$imageinfo = null) {}
function stream_set_chunk_size ($fp , $chunk_size) {}
function socket_import_stream ($stream) {}
function define_syslog_variables () {}
function lcg_value () {}
function metaphone ($str, $phonemes = 0) {}
function ob_start ($output_callback = null, $chunk_size = null, $erase = null) {}
function ob_flush () {}
function ob_clean () {}
function ob_end_flush () {}
function ob_end_clean () {}
function ob_get_flush () {}
function ob_get_clean () {}
function ob_get_length () {}
function ob_get_level () {}
function ob_get_status ($full_status = null) {}
function ob_get_contents () {}
function ob_implicit_flush ($flag = null) {}
function ob_list_handlers () {}
function ksort (array &$array, $sort_flags = null) {}
function krsort (array &$array, $sort_flags = null) {}
function natsort (array &$array) {}
function natcasesort (array &$array) {}
function asort (array &$array, $sort_flags = null) {}
function arsort (array &$array, $sort_flags = null) {}
function sort (array &$array, $sort_flags = null) {}
function rsort (array &$array, $sort_flags = null) {}
function usort (array &$array, $cmp_function) {}
function uasort (array &$array, $cmp_function) {}
function uksort (array &$array, $cmp_function) {}
function shuffle (array &$array) {}
function array_walk (array &$array, $funcname, $userdata = null) {}
function array_walk_recursive (array &$input, $funcname, $userdata = null) {}
function count ($var, $mode = COUNT_NORMAL) {}
function end (array &$array) {}
function prev (array &$array) {}
function next (array &$array) {}
function reset (array &$array) {}
function current (array &$array) {}
function key (array &$array) {}
function min (array $value1, $value2 = null, ...$values) {}
function max (array $value1, $value2 = null, ...$values) {}
function in_array ($needle, array $haystack, $strict = false) {}
function array_search ($needle, array $haystack, $strict = null) {}
function extract (array $var_array, $extract_type = null, $prefix = null) {}
function compact ($varname, $_ = null) {}
function array_fill ($start_index, $num, $value) {}
function array_fill_keys (array $keys, $value) {}
function range ($low, $high, $step = null) {}
function array_multisort (array &$arr, $arg = null, $arg = null, $_ = null) {}
function array_push (array &$array, $var, $_ = null) {}
function array_pop (array &$array) {}
function array_shift (array &$array) {}
function array_unshift (array &$array, $var, $_ = null) {}
function array_splice (array &$input, $offset, $length = null, $replacement = null) {}
function array_slice (array $array, $offset, $length = null, $preserve_keys = false) {}
function array_merge (array $array1, array $array2 = null, array $_ = null) {}
?>
