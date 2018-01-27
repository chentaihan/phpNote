<?php
function session_name ($name = null) {}
function session_module_name ($module = null) {}
function session_save_path ($path = null) {}
function session_id ($id = null) {}
function session_regenerate_id ($delete_old_session = false) {}
function session_register_shutdown  () {}
function session_decode ($data) {}
function session_register ($name, $_ = null) {}
function session_unregister ($name) {}
function session_is_registered ($name) {}
function session_encode () {}
function session_start ($options = []) {}
function session_create_id($prefix) {}
function session_gc() {}
function session_destroy () {}
function session_unset () {}
function session_set_save_handler ($open, $close, $read, $write, $destroy, $gc, $create_sid) {}
function session_set_save_handler (SessionHandlerInterface $session_handler, $register_shutdown = true) {}
function session_cache_limiter ($cache_limiter = null) {}
function session_cache_expire ($new_cache_expire = null) {}
function session_set_cookie_params ($lifetime, $path = null, $domain = null, $secure = false, $httponly = false) {}
function session_get_cookie_params () {}
function session_write_close () {}
function session_commit () {}
function session_status () {}
function session_abort() {}
function session_reset() {}
?>
