<?php
function zend_version () {}
function func_num_args () {}
function func_get_arg ($arg_num) {}
function func_get_args () {}
function strlen ($string) {}
function strcmp ($str1, $str2) {}
function strncmp ($str1, $str2, $len) {}
function strcasecmp ($str1, $str2) {}
function strncasecmp ($str1, $str2, $len) {}
function each (array &$array) {}
function error_reporting ($level = null) {}
function define ($name, $value, $case_insensitive = false) {}
function defined ($name) {}
function get_class ($object = null) {}
function get_called_class () {}
function get_parent_class ($object = null) {}
function method_exists ($object, $method_name) {}
function property_exists ($class, $property) {}
function trait_exists($traitname, $autoload ) {}
function class_exists ($class_name, $autoload = true) {}
function interface_exists ($interface_name, $autoload = true) {}
function function_exists ($function_name) {}
function class_alias ($original, $alias, $autoload = TRUE) {}
function get_included_files () {}
function get_required_files () {}
function is_subclass_of ($object, $class_name, $allow_string = TRUE) {}
function is_a ($object, $class_name, $allow_string = FALSE) {}
function get_class_vars ($class_name) {}
function get_object_vars ($object) {}
function get_class_methods ($class_name) {}
function trigger_error ($error_msg, $error_type = E_USER_NOTICE) {}
function user_error ($message, $error_type) {}
function set_error_handler ($error_handler, $error_types = E_ALL | E_STRICT) {}
function restore_error_handler () {}
function set_exception_handler ($exception_handler) {}
function restore_exception_handler () {}
function get_declared_classes () {}
function get_declared_interfaces () {}
function get_declared_traits() {}
function get_defined_functions () {}
function get_defined_vars () {}
function create_function ($args, $code) {}
function get_resource_type ($handle) {}
function get_loaded_extensions ($zend_extensions = false) {}
function extension_loaded ($name) {}
function get_extension_funcs ($module_name) {}
function get_defined_constants ($categorize = false) {}
function debug_backtrace ($options = DEBUG_BACKTRACE_PROVIDE_OBJECT, $limit = 0) {}
function error_clear_last () {}
const DEBUG_BACKTRACE_PROVIDE_OBJECT = 0;
const DEBUG_BACKTRACE_IGNORE_ARGS = 0;
function debug_print_backtrace ($options = 0, $limit = 0) {}
function gc_collect_cycles () {}
function gc_enabled () {}
function gc_enable () {}
function gc_disable () {}
function sapi_windows_cp_get($kind) {
}
function sapi_windows_cp_set($cp) {
}
function sapi_windows_cp_conv($in_codepage, $out_codepage, $subject) {}
function sapi_windows_cp_is_utf8() {
}
function is_iterable($value) {}
