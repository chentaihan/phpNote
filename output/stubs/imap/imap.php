<?php
function imap_open ($mailbox, $username, $password, $options = 0, $n_retries = 0, array $params = null) {}
function imap_reopen ($imap_stream, $mailbox, $options = 0, $n_retries = 0) {}
function imap_close ($imap_stream, $flag = 0) {}
function imap_num_msg ($imap_stream) {}
function imap_num_recent ($imap_stream) {}
function imap_headers ($imap_stream) {}
function imap_headerinfo ($stream_id, $msg_no, $from_length = 0, $subject_length = 0, $default_host = null) {}
function imap_rfc822_parse_headers ($headers, $defaulthost = "UNKNOWN") {}
function imap_rfc822_write_address ($mailbox, $host, $personal) {}
function imap_rfc822_parse_adrlist ($address, $default_host) {}
function imap_body ($imap_stream, $msg_number, $options = 0) {}
function imap_bodystruct ($imap_stream, $msg_number, $section) {}
function imap_fetchbody ($imap_stream, $msg_number, $section, $options = 0) {}
function imap_fetchmime ($imap_stream, $msg_number, $section, $options = 0) {}
function imap_savebody ($imap_stream, $file, $msg_number, $part_number = "", $options = 0) {}
function imap_fetchheader ($imap_stream, $msg_number, $options = 0) {}
function imap_fetchstructure ($imap_stream, $msg_number, $options = 0) {}
function imap_gc ($imap_stream, $caches) {}
function imap_expunge ($imap_stream) {}
function imap_delete ($imap_stream, $msg_number, $options = 0) {}
function imap_undelete ($imap_stream, $msg_number, $flags = 0) {}
function imap_check ($imap_stream) {}
function imap_listscan ($imap_stream, $ref, $pattern, $content) {}
function imap_mail_copy ($imap_stream, $msglist, $mailbox, $options = 0) {}
function imap_mail_move ($imap_stream, $msglist, $mailbox, $options = 0) {}
function imap_mail_compose (array $envelope, array $body) {}
function imap_createmailbox ($imap_stream, $mailbox) {}
function imap_renamemailbox ($imap_stream, $old_mbox, $new_mbox) {}
function imap_deletemailbox ($imap_stream, $mailbox) {}
function imap_subscribe ($imap_stream, $mailbox) {}
function imap_unsubscribe ($imap_stream, $mailbox) {}
function imap_append ($imap_stream, $mailbox, $message, $options = null, $internal_date = null) {}
function imap_ping ($imap_stream) {}
function imap_base64 ($text) {}
function imap_qprint ($string) {}
function imap_8bit ($string) {}
function imap_binary ($string) {}
function imap_utf8 ($mime_encoded_text) {}
function imap_status ($imap_stream, $mailbox, $options) {}
function imap_status_current ($stream_id, $options) {}
function imap_mailboxmsginfo ($imap_stream) {}
function imap_setflag_full ($imap_stream, $sequence, $flag, $options = NIL) {}
function imap_clearflag_full ($imap_stream, $sequence, $flag, $options = 0) {}
function imap_sort ($imap_stream, $criteria, $reverse, $options = 0, $search_criteria = null, $charset = 'NIL') {}
function imap_uid ($imap_stream, $msg_number) {}
function imap_msgno ($imap_stream, $uid) {}
function imap_list ($imap_stream, $ref, $pattern) {}
function imap_lsub ($imap_stream, $ref, $pattern) {}
function imap_fetch_overview ($imap_stream, $sequence, $options = 0) {}
function imap_alerts () {}
function imap_errors () {}
function imap_last_error () {}
function imap_search ($imap_stream, $criteria, $options = SE_FREE, $charset = NIL) {}
function imap_utf7_decode ($text) {}
function imap_utf7_encode ($data) {}
function imap_mime_header_decode ($text) {}
function imap_thread ($imap_stream, $options = SE_FREE) {}
function imap_timeout ($timeout_type, $timeout = -1) {}
function imap_get_quota ($imap_stream, $quota_root) {}
function imap_get_quotaroot ($imap_stream, $quota_root) {}
function imap_set_quota ($imap_stream, $quota_root, $quota_limit) {}
function imap_setacl ($imap_stream, $mailbox, $id, $rights) {}
function imap_getacl ($imap_stream, $mailbox) {}
function imap_myrights ($stream_id, $mailbox) {}
function imap_setannotation ($stream_id, $mailbox, $entry, $attr, $value) {}
function imap_getannotation ($stream_id, $mailbox, $entry, $attr) {}
function imap_mail ($to, $subject, $message, $additional_headers = null, $cc = null, $bcc = null, $rpath = null) {}
function imap_header ($stream_id, $msg_no, $from_length = 0, $subject_length = 0, $default_host = null) {}
function imap_listmailbox ($stream_id, $ref, $pattern) {}
function imap_getmailboxes ($imap_stream, $ref, $pattern) {}
function imap_scanmailbox ($stream_id, $ref, $pattern, $content) {}
function imap_listsubscribed ($stream_id, $ref, $pattern) {}
function imap_getsubscribed ($imap_stream, $ref, $pattern) {}
function imap_fetchtext ($stream, $msg_no, $options = 0) {}
function imap_scan ($stream_id, $ref, $pattern, $content) {}
function imap_create ($stream_id, $mailbox) {}
function imap_rename ($stream_id, $old_name, $new_name) {}
define ('NIL', 0);
define ('IMAP_OPENTIMEOUT', 1);
define ('IMAP_READTIMEOUT', 2);
define ('IMAP_WRITETIMEOUT', 3);
define ('IMAP_CLOSETIMEOUT', 4);
define ('OP_DEBUG', 1);
define ('OP_READONLY', 2);
define ('OP_ANONYMOUS', 4);
define ('OP_SHORTCACHE', 8);
define ('OP_SILENT', 16);
define ('OP_PROTOTYPE', 32);
define ('OP_HALFOPEN', 64);
define ('OP_EXPUNGE', 128);
define ('OP_SECURE', 256);
define ('CL_EXPUNGE', 32768);
define ('FT_UID', 1);
define ('FT_PEEK', 2);
define ('FT_NOT', 4);
define ('FT_INTERNAL', 8);
define ('FT_PREFETCHTEXT', 32);
define ('ST_UID', 1);
define ('ST_SILENT', 2);
define ('ST_SET', 4);
define ('CP_UID', 1);
define ('CP_MOVE', 2);
define ('SE_UID', 1);
define ('SE_FREE', 2);
define ('SE_NOPREFETCH', 4);
define ('SO_FREE', 8);
define ('SO_NOSERVER', 16);
define ('SA_MESSAGES', 1);
define ('SA_RECENT', 2);
define ('SA_UNSEEN', 4);
define ('SA_UIDNEXT', 8);
define ('SA_UIDVALIDITY', 16);
define ('SA_ALL', 31);
define ('LATT_NOINFERIORS', 1);
define ('LATT_NOSELECT', 2);
define ('LATT_MARKED', 4);
define ('LATT_UNMARKED', 8);
define ('LATT_REFERRAL', 16);
define ('LATT_HASCHILDREN', 32);
define ('LATT_HASNOCHILDREN', 64);
define ('SORTDATE', 0);
define ('SORTARRIVAL', 1);
define ('SORTFROM', 2);
define ('SORTSUBJECT', 3);
define ('SORTTO', 4);
define ('SORTCC', 5);
define ('SORTSIZE', 6);
define ('TYPETEXT', 0);
define ('TYPEMULTIPART', 1);
define ('TYPEMESSAGE', 2);
define ('TYPEAPPLICATION', 3);
define ('TYPEAUDIO', 4);
define ('TYPEIMAGE', 5);
define ('TYPEVIDEO', 6);
define ('TYPEMODEL', 7);
define ('TYPEOTHER', 8);
define ('ENC7BIT', 0);
define ('ENC8BIT', 1);
define ('ENCBINARY', 2);
define ('ENCBASE64', 3);
define ('ENCQUOTEDPRINTABLE', 4);
define ('ENCOTHER', 5);
define ('IMAP_GC_ELT', 1);
define ('IMAP_GC_ENV', 2);
define ('IMAP_GC_TEXTS', 4);
