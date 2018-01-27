<?php
function readline ($prompt = null) {}
function readline_info ($varname = null, $newvalue = null) {}
function readline_add_history ($line) {}
function readline_clear_history () {}
function readline_list_history () {}
function readline_read_history ($filename = null) {}
function readline_write_history ($filename = null) {}
function readline_completion_function (callable $function) {}
function readline_callback_handler_install ($prompt, callable $callback) {}
function readline_callback_read_char () {}
function readline_callback_handler_remove () {}
function readline_redisplay () {}
function readline_on_new_line () {}
define ('READLINE_LIB', "libedit");
?>
