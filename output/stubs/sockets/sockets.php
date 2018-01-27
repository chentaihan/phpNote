<?php
function socket_select (array &$read, array &$write, array &$except, $tv_sec, $tv_usec = 0) {}
function socket_create ($domain, $type, $protocol) {}
function socket_create_listen ($port, $backlog = 128) {}
function socket_create_pair ($domain, $type, $protocol, array &$fd) {}
function socket_accept ($socket) {}
function socket_set_nonblock ($socket) {}
function socket_set_block ($socket) {}
function socket_listen ($socket, $backlog = 0) {}
function socket_close ($socket) {}
function socket_write ($socket, $buffer, $length = 0) {}
function socket_read ($socket, $length, $type = PHP_BINARY_READ) {}
function socket_getsockname ($socket, &$addr, &$port = null) {}
function socket_getpeername ($socket, &$address, &$port = null) {}
function socket_connect ($socket, $address, $port = 0) {}
function socket_strerror ($errno) {}
function socket_bind ($socket, $address, $port = 0) {}
function socket_recv ($socket, &$buf, $len, $flags) {}
function socket_send ($socket, $buf, $len, $flags) {}
function socket_sendmsg ($socket, array $message, $flags ) {}
function socket_recvfrom ($socket, &$buf, $len, $flags, &$name, &$port = null) {}
function socket_recvmsg ($socket , $message, $flags) {}
function socket_sendto ($socket, $buf, $len, $flags, $addr, $port = 0) {}
function socket_get_option ($socket, $level, $optname) {}
function socket_set_option ($socket, $level, $optname, $optval) {}
function socket_shutdown ($socket, $how = 2) {}
function socket_last_error ($socket = null) {}
function socket_clear_error ($socket = null) {}
function socket_import_stream ($stream) {}
function socket_cmsg_space ($level, $type) {}
function socket_getopt ($socket, $level, $optname) {}
function socket_setopt ($socket, $level, $optname, $optval) {}
define ('AF_UNIX', 1);
define ('AF_INET', 2);
define ('AF_INET6', 10);
define ('SOCK_STREAM', 1);
define ('SOCK_DGRAM', 2);
define ('SOCK_RAW', 3);
define ('SOCK_SEQPACKET', 5);
define ('SOCK_RDM', 4);
define ('MSG_OOB', 1);
define ('MSG_WAITALL', 256);
define ('MSG_CTRUNC', 8);
define ('MSG_TRUNC', 32);
define ('MSG_PEEK', 2);
define ('MSG_DONTROUTE', 4);
define ('MSG_EOR', 128);
define ('MSG_EOF', 512);
define ('MSG_CONFIRM', 2048);
define ('MSG_ERRQUEUE', 8192);
define ('MSG_NOSIGNAL', 16384);
define ('MSG_DONTWAIT', 64);
define ('MSG_MORE', 32768);
define ('MSG_WAITFORONE', 65536);
define ('MSG_CMSG_CLOEXEC', 1073741824);
define ('SO_DEBUG', 1);
define ('SO_REUSEADDR', 2);
define ('SO_REUSEPORT', 15);
define ('SO_KEEPALIVE', 9);
define ('SO_DONTROUTE', 5);
define ('SO_LINGER', 13);
define ('SO_BROADCAST', 6);
define ('SO_OOBINLINE', 10);
define ('SO_SNDBUF', 7);
define ('SO_RCVBUF', 8);
define ('SO_SNDLOWAT', 19);
define ('SO_RCVLOWAT', 18);
define ('SO_SNDTIMEO', 21);
define ('SO_RCVTIMEO', 20);
define ('SO_TYPE', 3);
define ('SO_ERROR', 4);
define ('SO_BINDTODEVICE', 25);
define ('SOL_SOCKET', 1);
define ('SOMAXCONN', 128);
define ('TCP_NODELAY', 1);
define ('PHP_NORMAL_READ', 1);
define ('PHP_BINARY_READ', 2);
define ('MCAST_JOIN_GROUP', 42);
define ('MCAST_LEAVE_GROUP', 45);
define ('MCAST_BLOCK_SOURCE', 43);
define ('MCAST_UNBLOCK_SOURCE', 44);
define ('MCAST_JOIN_SOURCE_GROUP', 46);
define ('MCAST_LEAVE_SOURCE_GROUP', 47);
define ('IP_MULTICAST_IF', 32);
define ('IP_MULTICAST_TTL', 33);
define ('IP_MULTICAST_LOOP', 34);
define ('IPV6_MULTICAST_IF', 17);
define ('IPV6_MULTICAST_HOPS', 18);
define ('IPV6_MULTICAST_LOOP', 19);
define ('SOCKET_EPERM', 1);
define ('SOCKET_ENOENT', 2);
define ('SOCKET_EINTR', 4);
define ('SOCKET_EIO', 5);
define ('SOCKET_ENXIO', 6);
define ('SOCKET_E2BIG', 7);
define ('SOCKET_EBADF', 9);
define ('SOCKET_EAGAIN', 11);
define ('SOCKET_ENOMEM', 12);
define ('SOCKET_EACCES', 13);
define ('SOCKET_EFAULT', 14);
define ('SOCKET_ENOTBLK', 15);
define ('SOCKET_EBUSY', 16);
define ('SOCKET_EEXIST', 17);
define ('SOCKET_EXDEV', 18);
define ('SOCKET_ENODEV', 19);
define ('SOCKET_ENOTDIR', 20);
define ('SOCKET_EISDIR', 21);
define ('SOCKET_EINVAL', 22);
define ('SOCKET_ENFILE', 23);
define ('SOCKET_EMFILE', 24);
define ('SOCKET_ENOTTY', 25);
define ('SOCKET_ENOSPC', 28);
define ('SOCKET_ESPIPE', 29);
define ('SOCKET_EROFS', 30);
define ('SOCKET_EMLINK', 31);
define ('SOCKET_EPIPE', 32);
define ('SOCKET_ENAMETOOLONG', 36);
define ('SOCKET_ENOLCK', 37);
define ('SOCKET_ENOSYS', 38);
define ('SOCKET_ENOTEMPTY', 39);
define ('SOCKET_ELOOP', 40);
define ('SOCKET_EWOULDBLOCK', 11);
define ('SOCKET_ENOMSG', 42);
define ('SOCKET_EIDRM', 43);
define ('SOCKET_ECHRNG', 44);
define ('SOCKET_EL2NSYNC', 45);
define ('SOCKET_EL3HLT', 46);
define ('SOCKET_EL3RST', 47);
define ('SOCKET_ELNRNG', 48);
define ('SOCKET_EUNATCH', 49);
define ('SOCKET_ENOCSI', 50);
define ('SOCKET_EL2HLT', 51);
define ('SOCKET_EBADE', 52);
define ('SOCKET_EBADR', 53);
define ('SOCKET_EXFULL', 54);
define ('SOCKET_ENOANO', 55);
define ('SOCKET_EBADRQC', 56);
define ('SOCKET_EBADSLT', 57);
define ('SOCKET_ENOSTR', 60);
define ('SOCKET_ENODATA', 61);
define ('SOCKET_ETIME', 62);
define ('SOCKET_ENOSR', 63);
define ('SOCKET_ENONET', 64);
define ('SOCKET_EREMOTE', 66);
define ('SOCKET_ENOLINK', 67);
define ('SOCKET_EADV', 68);
define ('SOCKET_ESRMNT', 69);
define ('SOCKET_ECOMM', 70);
define ('SOCKET_EPROTO', 71);
define ('SOCKET_EMULTIHOP', 72);
define ('SOCKET_EBADMSG', 74);
define ('SOCKET_ENOTUNIQ', 76);
define ('SOCKET_EBADFD', 77);
define ('SOCKET_EREMCHG', 78);
define ('SOCKET_ERESTART', 85);
define ('SOCKET_ESTRPIPE', 86);
define ('SOCKET_EUSERS', 87);
define ('SOCKET_ENOTSOCK', 88);
define ('SOCKET_EDESTADDRREQ', 89);
define ('SOCKET_EMSGSIZE', 90);
define ('SOCKET_EPROTOTYPE', 91);
define ('SOCKET_ENOPROTOOPT', 92);
define ('SOCKET_EPROTONOSUPPORT', 93);
define ('SOCKET_ESOCKTNOSUPPORT', 94);
define ('SOCKET_EOPNOTSUPP', 95);
define ('SOCKET_EPFNOSUPPORT', 96);
define ('SOCKET_EAFNOSUPPORT', 97);
define ('SOCKET_EADDRINUSE', 98);
define ('SOCKET_EADDRNOTAVAIL', 99);
define ('SOCKET_ENETDOWN', 100);
define ('SOCKET_ENETUNREACH', 101);
define ('SOCKET_ENETRESET', 102);
define ('SOCKET_ECONNABORTED', 103);
define ('SOCKET_ECONNRESET', 104);
define ('SOCKET_ENOBUFS', 105);
define ('SOCKET_EISCONN', 106);
define ('SOCKET_ENOTCONN', 107);
define ('SOCKET_ESHUTDOWN', 108);
define ('SOCKET_ETOOMANYREFS', 109);
define ('SOCKET_ETIMEDOUT', 110);
define ('SOCKET_ECONNREFUSED', 111);
define ('SOCKET_EHOSTDOWN', 112);
define ('SOCKET_EHOSTUNREACH', 113);
define ('SOCKET_EALREADY', 114);
define ('SOCKET_EINPROGRESS', 115);
define ('SOCKET_EISNAM', 120);
define ('SOCKET_EREMOTEIO', 121);
define ('SOCKET_EDQUOT', 122);
define ('SOCKET_ENOMEDIUM', 123);
define ('SOCKET_EMEDIUMTYPE', 124);
define ('IPPROTO_IP', 0);
define ('IPPROTO_IPV6', 41);
define ('SOL_TCP', 6);
define ('SOL_UDP', 17);
define ('IPV6_UNICAST_HOPS', 16);
define ('IPV6_RECVPKTINFO', 49);
define ('IPV6_PKTINFO', 50);
define ('IPV6_RECVHOPLIMIT', 51);
define ('IPV6_HOPLIMIT', 52);
define ('IPV6_RECVTCLASS', 66);
define ('IPV6_TCLASS', 67);
define ('SCM_RIGHTS', 1);
define ('SCM_CREDENTIALS', 2);
define ('SO_PASSCRED', 16);
?>
