<?php
function stream_select (array &$read, array &$write, array &$except, $tv_sec, $tv_usec = null) {}
function stream_context_create (array $options = null, array $params = null) {}
function stream_context_set_params ($stream_or_context, array $params) {}
function stream_context_get_params ($stream_or_context) {}
function stream_context_set_option ($stream_or_context, $wrapper, $option, $value) {}
function stream_context_set_option ($stream_or_context, array $options) {}
function stream_context_get_options ($stream_or_context) {}
function stream_context_get_default (array $options = null) {}
function stream_context_set_default (array $options) {}
function stream_filter_prepend ($stream, $filtername, $read_write = null, $params = null) {}
function stream_filter_append ($stream, $filtername, $read_write = null, $params = null) {}
function stream_filter_remove ($stream_filter) {}
function stream_socket_client ($remote_socket, &$errno = null, &$errstr = null, $timeout = null, $flags = null, $context = null) {}
function stream_socket_server ($local_socket, &$errno = null, &$errstr = null, $flags = null, $context = null) {}
function stream_socket_accept ($server_socket, $timeout = null, &$peername = null) {}
function stream_socket_get_name ($handle, $want_peer) {}
function stream_socket_recvfrom ($socket, $length, $flags = null, &$address = null) {}
function stream_socket_sendto ($socket, $data, $flags = null, $address = null) {}
function stream_socket_enable_crypto ($stream, $enable, $crypto_type = null, $session_stream = null) {}
function stream_socket_shutdown ($stream, $how) {}
function stream_socket_pair ($domain, $type, $protocol) {}
function stream_copy_to_stream ($source, $dest, $maxlength = null, $offset = null) {}
function stream_get_contents ($handle, $maxlength = null, $offset = null) {}
function stream_supports_lock ($stream) {}
function fgetcsv ($handle, $length = null, $delimiter = null, $enclosure = null, $escape = null) {}
function fputcsv ($handle, array $fields, $delimiter = ",", $enclosure = '"', $escape_char = "\\") {}
function flock ($handle, $operation, &$wouldblock = null) {}
function get_meta_tags ($filename, $use_include_path = null) {}
function stream_set_write_buffer ($stream, $buffer) {}
function stream_set_read_buffer ($stream, $buffer) {}
function set_file_buffer ($fp, $buffer) {}
function set_socket_blocking ($socket, $mode) {}
function stream_set_blocking ($stream, $mode) {}
function socket_set_blocking ($socket, $mode) {}
function stream_get_meta_data ($stream) {}
function stream_get_line ($handle, $length, $ending = null) {}
function stream_wrapper_register ($protocol, $classname, $flags = null) {}
function stream_register_wrapper ($protocol, $classname, $flags) {}
function stream_resolve_include_path ($filename) {}
function stream_wrapper_unregister ($protocol) {}
function stream_wrapper_restore ($protocol) {}
function stream_get_wrappers () {}
function stream_get_transports () {}
function stream_is_local ($stream_or_url) {}
function get_headers ($url, $format = null, resource $context) {}
function stream_set_timeout ($stream, $seconds, $microseconds = null) {}
function socket_set_timeout ($stream, $seconds, $microseconds = 0) {}
function socket_get_status (resource $stream) {}
function realpath ($path) {}
function fnmatch ($pattern, $string, $flags = null) {}
?>
