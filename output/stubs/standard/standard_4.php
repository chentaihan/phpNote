<?php
function error_get_last () {}
function call_user_func ($function, $parameter = null, $_ = null) {}
function call_user_func_array ($function, array $param_arr) {}
function call_user_method ($method_name, &$obj, $parameter = null, $_ = null) {}
function call_user_method_array ($method_name, &$obj, array $params) {}
function forward_static_call ($function, $parameter = null, $_ = null) {}
function forward_static_call_array ($function, array $parameters = null) {}
function serialize ($value) {}
function unserialize ($str, array $options = null) {}
function var_dump ($expression, $_ = null) {}
function var_export ($expression, $return = null) {}
function debug_zval_dump ($variable) {}
function print_r ($expression, $return = null) {}
function memory_get_usage ($real_usage = null) {}
function memory_get_peak_usage ($real_usage = null) {}
function register_shutdown_function ($function, $parameter = null, $_ = null) {}
function register_tick_function ($function, $arg = null, $_ = null) {}
function unregister_tick_function ($function_name) {}
function highlight_file ($filename, $return = null) {}
function show_source ($file_name, $return) {}
function highlight_string ($str, $return = null) {}
function php_strip_whitespace ($filename) {}
function ini_get ($varname) {}
function ini_get_all ($extension = null, $details = null) {}
function ini_set ($varname, $newvalue) {}
function ini_alter ($varname, $newvalue) {}
function ini_restore ($varname) {}
function get_include_path () {}
function set_include_path ($new_include_path) {}
function restore_include_path () {}
function setcookie ($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false) {}
function setrawcookie ($name, $value = null, $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false) {}
function header ($string, $replace = true, $http_response_code = null) {}
function header_remove ($name = null) {}
function headers_sent (&$file = null, &$line = null) {}
function headers_list () {}
function connection_aborted () {}
function connection_status () {}
function ignore_user_abort ($value = null) {}
function parse_ini_file ($filename, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) {}
function parse_ini_string ($ini, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) {}
function is_uploaded_file ($filename) {}
function move_uploaded_file ($filename, $destination) {}
function gethostbyaddr ($ip_address) {}
function gethostbyname ($hostname) {}
function gethostbynamel ($hostname) {}
function gethostname () {}
function dns_check_record ($host, $type) {}
function checkdnsrr ($host, $type = null) {}
function dns_get_mx ($hostname, &$mxhosts, &$weight) {}
function getmxrr ($hostname, array &$mxhosts, array &$weight = null) {}
