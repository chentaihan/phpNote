<?php
function fsockopen ($hostname, $port = null, &$errno = null, &$errstr = null, $timeout = null) {}
function pfsockopen ($hostname, $port = null, &$errno = null, &$errstr = null, $timeout = null) {}
function pack ($format, $args = null, $_ = null) {}
function unpack ($format, $data, $offset) {}
function get_browser ($user_agent = null, $return_array = null) {}
function crypt ($str, $salt = null) {}
function opendir ($path, $context = null) {}
function closedir ($dir_handle = null) {}
function chdir ($directory) {}
function chroot ($directory) {}
function getcwd () {}
function rewinddir ($dir_handle = null) {}
function readdir ($dir_handle = null) {}
function dir ($directory, $context) {}
function scandir ($directory, $sorting_order = null, $context = null) {}
function glob ($pattern, $flags = null) {}
function fileatime ($filename) {}
function filectime ($filename) {}
function filegroup ($filename) {}
function fileinode ($filename) {}
function filemtime ($filename) {}
function fileowner ($filename) {}
function fileperms ($filename) {}
function filesize ($filename) {}
function filetype ($filename) {}
function file_exists ($filename) {}
function is_writable ($filename) {}
function is_writeable ($filename) {}
function is_readable ($filename) {}
function is_executable ($filename) {}
function is_file ($filename) {}
function is_dir ($filename) {}
function is_link ($filename) {}
function stat ($filename) {}
function lstat ($filename) {}
function chown ($filename, $user) {}
function chgrp ($filename, $group) {}
function lchown ($filename, $user) {}
function lchgrp ($filename, $group) {}
function chmod ($filename, $mode) {}
function touch ($filename, $time = null, $atime = null) {}
function clearstatcache ($clear_realpath_cache = null, $filename = null) {}
function disk_total_space ($directory) {}
function disk_free_space ($directory) {}
function diskfreespace ($path) {}
function mail ($to, $subject, $message, $additional_headers = null, $additional_parameters = null) {}
function ezmlm_hash ($addr) {}
function openlog ($ident, $option, $facility) {}
?>
