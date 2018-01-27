<?php
function ibase_connect ($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}
function ibase_pconnect ($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}
function ibase_close ($connection_id = null) {}
function ibase_drop_db ($connection = null) {}
function ibase_query ($link_identifier = null, $query, $bind_args = null) {}
function ibase_fetch_row ($result_identifier, $fetch_flag = null) {}
function ibase_fetch_assoc ($result, $fetch_flag = null) {}
function ibase_fetch_object ($result_id, $fetch_flag = null) {}
function ibase_free_result ($result_identifier) {}
function ibase_name_result ($result, $name) {}
function ibase_prepare ($query) {}
function ibase_execute ($query, $bind_arg = null, $_ = null) {}
function ibase_free_query ($query) {}
function ibase_gen_id ($generator, $increment = null, $link_identifier = null) {}
function ibase_num_fields ($result_id) {}
function ibase_num_params ($query) {}
function ibase_affected_rows ($link_identifier = null) {}
function ibase_field_info ($result, $field_number) {}
function ibase_param_info ($query, $param_number) {}
function ibase_trans ($trans_args = null, $link_identifier = null) {}
function ibase_commit ($link_or_trans_identifier = null) {}
function ibase_rollback ($link_or_trans_identifier = null) {}
function ibase_commit_ret ($link_or_trans_identifier = null) {}
function ibase_rollback_ret ($link_or_trans_identifier = null) {}
function ibase_blob_info ($link_identifier, $blob_id) {}
function ibase_blob_create ($link_identifier = null) {}
function ibase_blob_add ($blob_handle, $data) {}
function ibase_blob_cancel ($blob_handle) {}
function ibase_blob_close ($blob_handle) {}
function ibase_blob_open ($link_identifier, $blob_id) {}
function ibase_blob_get ($blob_handle, $len) {}
function ibase_blob_echo ($blob_id) {}
function ibase_blob_import ($link_identifier, $file_handle) {}
function ibase_errmsg () {}
function ibase_errcode () {}
function ibase_add_user ($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}
function ibase_modify_user ($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}
function ibase_delete_user ($service_handle, $user_name) {}
function ibase_service_attach ($host, $dba_username, $dba_password) {}
function ibase_service_detach ($service_handle) {}
function ibase_backup ($service_handle, $source_db, $dest_file, $options = null, $verbose = null) {}
function ibase_restore ($service_handle, $source_file, $dest_db, $options = null, $verbose = null) {}
function ibase_maintain_db ($service_handle, $db, $action, $argument = null) {}
function ibase_db_info ($service_handle, $db, $action, $argument = null) {}
function ibase_server_info ($service_handle, $action) {}
function ibase_wait_event ($event_name1, $event_name2 = null, $_ = null) {}
function ibase_set_event_handler ($event_handler, $event_name1, $event_name2 = null, $_ = null) {}
function ibase_free_event_handler ($event) {}
function fbird_connect () {}
function fbird_pconnect () {}
function fbird_close () {}
function fbird_drop_db () {}
function fbird_query () {}
function fbird_fetch_row () {}
function fbird_fetch_assoc () {}
function fbird_fetch_object () {}
function fbird_free_result () {}
function fbird_name_result () {}
function fbird_prepare () {}
function fbird_execute () {}
function fbird_free_query () {}
function fbird_gen_id () {}
function fbird_num_fields () {}
function fbird_num_params () {}
function fbird_affected_rows () {}
function fbird_field_info () {}
function fbird_param_info () {}
function fbird_trans () {}
function fbird_commit () {}
function fbird_rollback () {}
function fbird_commit_ret () {}
function fbird_rollback_ret () {}
function fbird_blob_info () {}
function fbird_blob_create () {}
function fbird_blob_add () {}
function fbird_blob_cancel () {}
function fbird_blob_close () {}
function fbird_blob_open () {}
function fbird_blob_get () {}
function fbird_blob_echo () {}
function fbird_blob_import () {}
function fbird_errmsg () {}
function fbird_errcode () {}
function fbird_add_user () {}
function fbird_modify_user () {}
function fbird_delete_user () {}
function fbird_service_attach () {}
function fbird_service_detach () {}
function fbird_backup () {}
function fbird_restore () {}
function fbird_maintain_db () {}
function fbird_db_info () {}
function fbird_server_info () {}
function fbird_wait_event () {}
function fbird_set_event_handler () {}
function fbird_free_event_handler () {}
define ('IBASE_DEFAULT', 0);
define ('IBASE_CREATE', 0);
define ('IBASE_TEXT', 1);
define ('IBASE_FETCH_BLOBS', 1);
define ('IBASE_FETCH_ARRAYS', 2);
define ('IBASE_UNIXTIME', 4);
define ('IBASE_WRITE', 1);
define ('IBASE_READ', 2);
define ('IBASE_COMMITTED', 8);
define ('IBASE_CONSISTENCY', 16);
define ('IBASE_CONCURRENCY', 4);
define ('IBASE_REC_VERSION', 64);
define ('IBASE_REC_NO_VERSION', 32);
define ('IBASE_NOWAIT', 256);
define ('IBASE_WAIT', 128);
define ('IBASE_BKP_IGNORE_CHECKSUMS', 1);
define ('IBASE_BKP_IGNORE_LIMBO', 2);
define ('IBASE_BKP_METADATA_ONLY', 4);
define ('IBASE_BKP_NO_GARBAGE_COLLECT', 8);
define ('IBASE_BKP_OLD_DESCRIPTIONS', 16);
define ('IBASE_BKP_NON_TRANSPORTABLE', 32);
define ('IBASE_BKP_CONVERT', 64);
define ('IBASE_RES_DEACTIVATE_IDX', 256);
define ('IBASE_RES_NO_SHADOW', 512);
define ('IBASE_RES_NO_VALIDITY', 1024);
define ('IBASE_RES_ONE_AT_A_TIME', 2048);
define ('IBASE_RES_REPLACE', 4096);
define ('IBASE_RES_CREATE', 8192);
define ('IBASE_RES_USE_ALL_SPACE', 16384);
define ('IBASE_PRP_PAGE_BUFFERS', 5);
define ('IBASE_PRP_SWEEP_INTERVAL', 6);
define ('IBASE_PRP_SHUTDOWN_DB', 7);
define ('IBASE_PRP_DENY_NEW_TRANSACTIONS', 10);
define ('IBASE_PRP_DENY_NEW_ATTACHMENTS', 9);
define ('IBASE_PRP_RESERVE_SPACE', 11);
define ('IBASE_PRP_RES_USE_FULL', 35);
define ('IBASE_PRP_RES', 36);
define ('IBASE_PRP_WRITE_MODE', 12);
define ('IBASE_PRP_WM_ASYNC', 37);
define ('IBASE_PRP_WM_SYNC', 38);
define ('IBASE_PRP_ACCESS_MODE', 13);
define ('IBASE_PRP_AM_READONLY', 39);
define ('IBASE_PRP_AM_READWRITE', 40);
define ('IBASE_PRP_SET_SQL_DIALECT', 14);
define ('IBASE_PRP_ACTIVATE', 256);
define ('IBASE_PRP_DB_ONLINE', 512);
define ('IBASE_RPR_CHECK_DB', 16);
define ('IBASE_RPR_IGNORE_CHECKSUM', 32);
define ('IBASE_RPR_KILL_SHADOWS', 64);
define ('IBASE_RPR_MEND_DB', 4);
define ('IBASE_RPR_VALIDATE_DB', 1);
define ('IBASE_RPR_FULL', 128);
define ('IBASE_RPR_SWEEP_DB', 2);
define ('IBASE_STS_DATA_PAGES', 1);
define ('IBASE_STS_DB_LOG', 2);
define ('IBASE_STS_HDR_PAGES', 4);
define ('IBASE_STS_IDX_PAGES', 8);
define ('IBASE_STS_SYS_RELATIONS', 16);
define ('IBASE_SVC_SERVER_VERSION', 55);
define ('IBASE_SVC_IMPLEMENTATION', 56);
define ('IBASE_SVC_GET_ENV', 59);
define ('IBASE_SVC_GET_ENV_LOCK', 60);
define ('IBASE_SVC_GET_ENV_MSG', 61);
define ('IBASE_SVC_USER_DBPATH', 58);
define ('IBASE_SVC_SVR_DB_INFO', 50);
define ('IBASE_SVC_GET_USERS', 68);
?>
