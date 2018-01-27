<?php
function mssql_connect ($servername = null, $username = null, $password = null, $new_link = false) {}
function mssql_pconnect ($servername = null, $username = null, $password = null, $new_link = false) {}
function mssql_close ($link_identifier = null) {}
function mssql_select_db ($database_name, $link_identifier = null) {}
function mssql_query ($query, $link_identifier = null, $batch_size = 0) {}
function mssql_fetch_batch ($result) {}
function mssql_rows_affected ($link_identifier) {}
function mssql_free_result ($result) {}
function mssql_get_last_message () {}
function mssql_num_rows ($result) {}
function mssql_num_fields ($result) {}
function mssql_fetch_field ($result, $field_offset = -1) {}
function mssql_fetch_row ($result) {}
function mssql_fetch_array ($result, $result_type = MSSQL_BOTH) {}
function mssql_fetch_assoc ($result_id) {}
function mssql_fetch_object ($result) {}
function mssql_field_length ($result, $offset = null) {}
function mssql_field_name ($result, $offset = -1) {}
function mssql_field_type ($result, $offset = -1) {}
function mssql_data_seek ($result_identifier, $row_number) {}
function mssql_field_seek ($result, $field_offset) {}
function mssql_result ($result, $row, $field) {}
function mssql_next_result ($result_id) {}
function mssql_min_error_severity ($severity) {}
function mssql_min_message_severity ($severity) {}
function mssql_init ($sp_name, $link_identifier = null) {}
function mssql_bind ($stmt, $param_name, &$var, $type, $is_output = false, $is_null = false, $maxlen = -1) {}
function mssql_execute ($stmt, $skip_results = false) {}
function mssql_free_statement ($stmt) {}
function mssql_guid_string ($binary, $short_format = null) {}
define ('MSSQL_ASSOC', 1);
define ('MSSQL_NUM', 2);
define ('MSSQL_BOTH', 3);
define ('SQLTEXT', 35);
define ('SQLVARCHAR', 39);
define ('SQLCHAR', 47);
define ('SQLINT1', 48);
define ('SQLINT2', 52);
define ('SQLINT4', 56);
define ('SQLBIT', 50);
define ('SQLFLT4', 59);
define ('SQLFLT8', 62);
define ('SQLFLTN', 109);
?>
