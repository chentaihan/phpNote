<?php
function ftp_connect ($host, $port = 21, $timeout = 90) {}
function ftp_ssl_connect ($host, $port = 21, $timeout = 90) {}
function ftp_login ($ftp_stream, $username, $password) {}
function ftp_pwd ($ftp_stream) {}
function ftp_cdup ($ftp_stream) {}
function ftp_chdir ($ftp_stream, $directory) {}
function ftp_exec ($ftp_stream, $command) {}
function ftp_raw ($ftp_stream, $command) {}
function ftp_mkdir ($ftp_stream, $directory) {}
function ftp_rmdir ($ftp_stream, $directory) {}
function ftp_chmod ($ftp_stream, $mode, $filename) {}
function ftp_alloc ($ftp_stream, $filesize, &$result = null) {}
function ftp_nlist ($ftp_stream, $directory) {}
function ftp_rawlist ($ftp_stream, $directory, $recursive = false) {}
function ftp_systype ($ftp_stream) {}
function ftp_pasv ($ftp_stream, $pasv) {}
function ftp_get ($ftp_stream, $local_file, $remote_file, $mode, $resumepos = 0) {}
function ftp_fget ($ftp_stream, $handle, $remote_file, $mode, $resumepos = 0) {}
function ftp_put ($ftp_stream, $remote_file, $local_file, $mode, $startpos = 0) {}
function ftp_fput ($ftp_stream, $remote_file, $handle, $mode, $startpos = 0) {}
function ftp_size ($ftp_stream, $remote_file) {}
function ftp_mdtm ($ftp_stream, $remote_file) {}
function ftp_rename ($ftp_stream, $oldname, $newname) {}
function ftp_delete ($ftp_stream, $path) {}
function ftp_site ($ftp_stream, $command) {}
function ftp_close ($ftp_stream) {}
function ftp_set_option ($ftp_stream, $option, $value) {}
function ftp_get_option ($ftp_stream, $option) {}
function ftp_nb_fget ($ftp_stream, $handle, $remote_file, $mode, $resumepos = 0) {}
function ftp_nb_get ($ftp_stream, $local_file, $remote_file, $mode, $resumepos = 0) {}
function ftp_nb_continue ($ftp_stream) {}
function ftp_nb_put ($ftp_stream, $remote_file, $local_file, $mode, $startpos = 0) {}
function ftp_nb_fput ($ftp_stream, $remote_file, $handle, $mode, $startpos = 0) {}
function ftp_quit ($ftp) {}
define ('FTP_ASCII', 1);
define ('FTP_TEXT', 1);
define ('FTP_BINARY', 2);
define ('FTP_IMAGE', 2);
define ('FTP_AUTORESUME', -1);
define ('FTP_TIMEOUT_SEC', 0);
define ('FTP_AUTOSEEK', 1);
define ('FTP_FAILED', 0);
define ('FTP_FINISHED', 1);
define ('FTP_MOREDATA', 2);
?>
