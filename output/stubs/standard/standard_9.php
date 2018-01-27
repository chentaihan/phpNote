<?php
define ("ARRAY_FILTER_USE_BOTH", 1);
define ("ARRAY_FILTER_USE_KEY", 2);
function array_merge_recursive(array $array1, array $_ = null) { }
function array_replace(array $array, array $array1, array $array2 = null, array $_ = null) { }
function array_replace_recursive(array $array, array $array1, array $array2 = null, array $_ = null) { }
function array_keys(array $input, $search_value = null, $strict = null) { }
function array_values(array $input) { }
function array_count_values(array $input) { }
function array_column(array $array, $column, $index_key = null) { }
function array_reverse(array $array, $preserve_keys = null) { }
function array_reduce(array $input, $function, $initial = null) { }
function array_pad(array $input, $pad_size, $pad_value) { }
function array_flip(array $trans) { }
function array_change_key_case(array $input, $case = null) { }
function array_rand(array $input, $num_req = null) { }
function array_unique(array $array, $sort_flags = null) { }
function array_intersect(array $array1, array $array2, array $_ = null) { }
function array_intersect_key(array $array1, array $array2, array $_ = null) { }
function array_intersect_ukey(array $array1, array $array2, array $_ = null, $key_compare_func) { }
function array_uintersect(array $array1, array $array2, array $_ = null, $data_compare_func) { }
function array_intersect_assoc(array $array1, array $array2, array $_ = null) { }
function array_uintersect_assoc(array $array1, array $array2, array $_ = null, $data_compare_func) { }
function array_intersect_uassoc(array $array1, array $array2, array $_ = null, $key_compare_func) { }
function array_uintersect_uassoc(array $array1, array $array2, array $_ = null, $data_compare_func, $key_compare_func) { }
function array_diff(array $array1, array $array2, array $_ = null) { }
function array_diff_key(array $array1, array $array2, array $_ = null) { }
function array_diff_ukey(array $array1, array $array2, array $_ = null, $key_compare_func) { }
function array_udiff(array $array1, array $array2, array $_ = null, $data_compare_func) { }
function array_diff_assoc(array $array1, array $array2, array $_ = null) { }
function array_udiff_assoc(array $array1, array $array2, array $_ = null, $data_compare_func) { }
function array_diff_uassoc(array $array1, array $array2, array $_ = null, $key_compare_func) { }
function array_udiff_uassoc(array $array1, array $array2, array $_ = null, $data_compare_func, $key_compare_func) { }
function array_sum(array $array) { }
function array_product(array $array) { }
function array_filter(array $input, $callback = null, $flag = 0) { }
function array_map($callback, array $arr1, array $_ = null) { }
function array_chunk(array $input, $size, $preserve_keys = null) { }
function array_combine(array $keys, array $values) { }
function array_key_exists($key, array $search) { }
function pos(&$arg) { }
function sizeof($var, $mode) { }
function key_exists($key, $search) { }
function assert($assertion, $description) { }
function cli_get_process_title() { }
function cli_set_process_title($title) { }
function assert_options($what, $value = null) { }
function version_compare($version1, $version2, $operator = null) { }
function ftok($pathname, $proj) { }
function str_rot13($str) { }
function stream_get_filters() { }
function stream_filter_register($filtername, $classname) { }
function stream_bucket_make_writeable($brigade) { }
function stream_bucket_prepend($brigade, $bucket) { }
function stream_bucket_append($brigade, $bucket) { }
function stream_bucket_new($stream, $buffer) { }
function output_add_rewrite_var($name, $value) { }
function output_reset_rewrite_vars() { }
function sys_get_temp_dir() { }
function realpath_cache_get() { }
function realpath_cache_size() { }
?>
