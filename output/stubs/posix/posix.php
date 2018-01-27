<?php
function posix_kill ($pid, $sig) {}
function posix_getpid () {}
function posix_getppid () {}
function posix_getuid () {}
function posix_setuid ($uid) {}
function posix_geteuid () {}
function posix_seteuid ($uid) {}
function posix_setrlimit ($resource, $softlimit, $hardlimit ) {}
function posix_getgid () {}
function posix_setgid ($gid) {}
function posix_getegid () {}
function posix_setegid ($gid) {}
function posix_getgroups () {}
function posix_getlogin () {}
function posix_getpgrp () {}
function posix_setsid () {}
function posix_setpgid ($pid, $pgid) {}
function posix_getpgid ($pid) {}
function posix_getsid ($pid) {}
function posix_uname () {}
function posix_times () {}
function posix_ctermid () {}
function posix_ttyname ($fd) {}
function posix_isatty ($fd) {}
function posix_getcwd () {}
function posix_mkfifo ($pathname, $mode) {}
function posix_mknod ($pathname, $mode, $major = 0, $minor = 0) {}
function posix_access ($file, $mode = POSIX_F_OK) {}
function posix_getgrnam ($name) {}
function posix_getgrgid ($gid) {}
function posix_getpwnam ($username) {}
function posix_getpwuid ($uid) {}
function posix_getrlimit () {}
function posix_get_last_error () {}
function posix_errno () {}
function posix_strerror ($errno) {}
function posix_initgroups ($name, $base_group_id) {}
define ('POSIX_F_OK', 0);
define ('POSIX_X_OK', 1);
define ('POSIX_W_OK', 2);
define ('POSIX_R_OK', 4);
define ('POSIX_S_IFREG', 32768);
define ('POSIX_S_IFCHR', 8192);
define ('POSIX_S_IFBLK', 24576);
define ('POSIX_S_IFIFO', 4096);
define ('POSIX_S_IFSOCK', 49152);
?>
