<?php
function pg_connect ($connection_string, $connect_type = null) {}
function pg_pconnect ($connection_string, $connect_type = null) {}
function pg_close ($connection = null) {}
function pg_connection_status ($connection) {}
function pg_connection_busy ($connection) {}
function pg_connection_reset ($connection) {}
function pg_host ($connection = null) {}
function pg_dbname ($connection = null) {}
function pg_port ($connection = null) {}
function pg_tty ($connection = null) {}
function pg_options ($connection = null) {}
function pg_version ($connection = null) {}
function pg_ping ($connection = null) {}
function pg_parameter_status ($connection = null, $param_name) {}
function pg_transaction_status ($connection) {}
function pg_query ($connection = null, $query) {}
function pg_query_params ($connection = null, $query, array $params) {}
function pg_prepare ($connection = null, $stmtname, $query) {}
function pg_execute ($connection = null, $stmtname, array $params) {}
function pg_send_query ($connection, $query) {}
function pg_send_query_params ($connection, $query, array $params) {}
function pg_send_prepare ($connection, $stmtname, $query) {}
function pg_send_execute ($connection, $stmtname, array $params) {}
function pg_cancel_query ($connection) {}
function pg_fetch_result ($result, $row = null, $field) {}
function pg_fetch_row ($result, $row = null, $result_type = null) {}
function pg_fetch_assoc ($result, $row = null) {}
function pg_fetch_array ($result, $row = null, $result_type = PGSQL_BOTH) {}
function pg_fetch_object ($result, $row = null, $result_type = PGSQL_ASSOC) {}
function pg_fetch_all ($result, $result_type) {}
function pg_fetch_all_columns ($result, $column = 0) {}
function pg_affected_rows ($result) {}
function pg_get_result ($connection = null) {}
function pg_result_seek ($result, $offset) {}
function pg_result_status ($result, $type = PGSQL_STATUS_LONG) {}
function pg_free_result ($result) {}
function pg_last_oid ($result) {}
function pg_num_rows ($result) {}
function pg_num_fields ($result) {}
function pg_field_name ($result, $field_number) {}
function pg_field_num ($result, $field_name) {}
function pg_field_size ($result, $field_number) {}
function pg_field_type ($result, $field_number) {}
function pg_field_type_oid ($result, $field_number) {}
function pg_field_prtlen ($result, $row_number, $field_name_or_number) {}
function pg_field_is_null ($result, $row, $field) {}
function pg_field_table ($result, $field_number, $oid_only = false) {}
function pg_get_notify ($connection, $result_type = null) {}
function pg_get_pid ($connection) {}
function pg_result_error ($result) {}
function pg_result_error_field ($result, $fieldcode) {}
function pg_last_error ($connection = null) {}
function pg_last_notice ($connection, $operation) {}
function pg_put_line ($connection = null, $data) {}
function pg_end_copy ($connection = null) {}
function pg_copy_to ($connection, $table_name, $delimiter = null, $null_as = null) {}
function pg_copy_from ($connection, $table_name, array $rows, $delimiter = null, $null_as = null) {}
function pg_trace ($pathname, $mode = "w", $connection = null) {}
function pg_untrace ($connection = null) {}
function pg_lo_create ($connection = null, $object_id = null) {}
function pg_lo_unlink ($connection, $oid) {}
function pg_lo_open ($connection, $oid, $mode) {}
function pg_lo_close ($large_object) {}
function pg_lo_read ($large_object, $len = 8192) {}
function pg_lo_write ($large_object, $data, $len = null) {}
function pg_lo_read_all ($large_object) {}
function pg_lo_import ($connection = null, $pathname, $object_id = null) {}
function pg_lo_export ($connection = null, $oid, $pathname) {}
function pg_lo_seek ($large_object, $offset, $whence = PGSQL_SEEK_CUR) {}
function pg_lo_tell ($large_object) {}
function pg_escape_string ($connection = null, $data) {}
function pg_escape_bytea ($connection = null, $data) {}
function pg_escape_identifier ($connection = null, $data) {}
function pg_escape_literal ($connection = null, $data) {}
function pg_unescape_bytea ($data) {}
function pg_set_error_verbosity ($connection = null, $verbosity) {}
function pg_client_encoding ($connection = null) {}
function pg_set_client_encoding ($connection = null, $encoding) {}
function pg_meta_data ($connection, $table_name) {}
function pg_convert ($connection, $table_name, array $assoc_array, $options = 0) {}
function pg_insert ($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC) {}
function pg_update ($connection, $table_name, array $data, array $condition, $options = PGSQL_DML_EXEC) {}
function pg_delete ($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC) {}
function pg_select ($connection, $table_name, array $assoc_array, $options = PGSQL_DML_EXEC, $result_type) {}
function pg_exec ($connection, $query) {}
function pg_getlastoid ($result) {}
function pg_cmdtuples ($result) {} // TODO remove
function pg_errormessage ($connection) {}
function pg_numrows ($result) {}
function pg_numfields ($result) {}
function pg_fieldname ($result, $field_number) {}
function pg_fieldsize ($result, $field_number) {}
function pg_fieldtype ($result, $field_number) {}
function pg_fieldnum ($result, $field_name) {}
function pg_fieldprtlen ($result, $row, $field_name_or_number) {}
function pg_fieldisnull ($result, $row, $field_name_or_number) {}
function pg_freeresult ($result) {}
function pg_result ($connection) {} // TODO remove
function pg_loreadall ($large_object) {} // TODO remove
function pg_locreate ($connection, $large_object_id) {}
function pg_lounlink ($connection, $large_object_oid) {}
function pg_loopen ($connection, $large_object_oid, $mode) {}
function pg_loclose ($large_object) {}
function pg_loread ($large_object, $len) {}
function pg_lowrite ($large_object, $buf, $len) {}
function pg_loimport ($connection, $filename, $large_object_oid) {}
function pg_loexport ($connection, $objoid, $filename) {}
function pg_clientencoding ($connection) {}
function pg_setclientencoding ($connection, $encoding) {}
define ('PGSQL_LIBPQ_VERSION', "9.1.10");
define ('PGSQL_LIBPQ_VERSION_STR', "PostgreSQL 9.1.10 on x86_64-unknown-linux-gnu, compiled by gcc (Ubuntu/Linaro 4.8.1-10ubuntu7) 4.8.1, 64-bit");
define ('PGSQL_CONNECT_FORCE_NEW', 2);
define ('PGSQL_ASSOC', 1);
define ('PGSQL_NUM', 2);
define ('PGSQL_BOTH', 3);
define ('PGSQL_CONNECTION_BAD', 1);
define ('PGSQL_CONNECTION_OK', 0);
define ('PGSQL_TRANSACTION_IDLE', 0);
define ('PGSQL_TRANSACTION_ACTIVE', 1);
define ('PGSQL_TRANSACTION_INTRANS', 2);
define ('PGSQL_TRANSACTION_INERROR', 3);
define ('PGSQL_TRANSACTION_UNKNOWN', 4);
define ('PGSQL_ERRORS_TERSE', 0);
define ('PGSQL_ERRORS_DEFAULT', 1);
define ('PGSQL_ERRORS_VERBOSE', 2);
define ('PGSQL_SEEK_SET', 0);
define ('PGSQL_SEEK_CUR', 1);
define ('PGSQL_SEEK_END', 2);
define ('PGSQL_STATUS_LONG', 1);
define ('PGSQL_STATUS_STRING', 2);
define ('PGSQL_EMPTY_QUERY', 0);
define ('PGSQL_COMMAND_OK', 1);
define ('PGSQL_TUPLES_OK', 2);
define ('PGSQL_COPY_OUT', 3);
define ('PGSQL_COPY_IN', 4);
define ('PGSQL_BAD_RESPONSE', 5);
define ('PGSQL_NONFATAL_ERROR', 6);
define ('PGSQL_FATAL_ERROR', 7);
define ('PGSQL_DIAG_SEVERITY', 83);
define ('PGSQL_DIAG_SQLSTATE', 67);
define ('PGSQL_DIAG_MESSAGE_PRIMARY', 77);
define ('PGSQL_DIAG_MESSAGE_DETAIL', 68);
define ('PGSQL_DIAG_MESSAGE_HINT', 72);
define ('PGSQL_DIAG_STATEMENT_POSITION', 80);
define ('PGSQL_DIAG_INTERNAL_POSITION', 112);
define ('PGSQL_DIAG_INTERNAL_QUERY', 113);
define ('PGSQL_DIAG_CONTEXT', 87);
define ('PGSQL_DIAG_SOURCE_FILE', 70);
define ('PGSQL_DIAG_SOURCE_LINE', 76);
define ('PGSQL_DIAG_SOURCE_FUNCTION', 82);
define ('PGSQL_CONV_IGNORE_DEFAULT', 2);
define ('PGSQL_CONV_FORCE_NULL', 4);
define ('PGSQL_CONV_IGNORE_NOT_NULL', 8);
define ('PGSQL_DML_NO_CONV', 256);
define ('PGSQL_DML_EXEC', 512);
define ('PGSQL_DML_ASYNC', 1024);
define ('PGSQL_DML_STRING', 2048);
define ('PGSQL_NOTICE_LAST', 1);
define('PGSQL_NOTICE_ALL', 2);
define('PGSQL_NOTICE_CLEAR', 3);
const PGSQL_CONNECT_ASYNC = 4;
const PGSQL_CONNECTION_AUTH_OK = 5;
const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;
const PGSQL_CONNECTION_MADE = 3;
const PGSQL_CONNECTION_SETENV = 6;
const PGSQL_CONNECTION_STARTED = 2;
const PGSQL_DML_ESCAPE = 4096;
const PGSQL_POLLING_ACTIVE = 4;
const PGSQL_POLLING_FAILED = 0;
const PGSQL_POLLING_OK = 3;
const PGSQL_POLLING_READING = 1;
const PGSQL_POLLING_WRITING = 2;
