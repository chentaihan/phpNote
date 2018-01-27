<?php
function msg_get_queue ($key, $perms = 0666) {}
function msg_send ($queue, $msgtype, $message, $serialize = true, $blocking = true, &$errorcode = null) {}
function msg_receive ($queue, $desiredmsgtype, &$msgtype, $maxsize, &$message, $unserialize = true, $flags = 0, &$errorcode = null) {}
function msg_remove_queue ($queue) {}
function msg_stat_queue ($queue) {}
function msg_set_queue ($queue, array $data) {}
function msg_queue_exists ($key) {}
define ('MSG_IPC_NOWAIT', 1);
define ('MSG_EAGAIN', 11);
define ('MSG_ENOMSG', 42);
define ('MSG_NOERROR', 2);
define ('MSG_EXCEPT', 4);
?>
