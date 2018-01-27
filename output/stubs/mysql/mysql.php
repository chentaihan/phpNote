<?php
function mysql_connect ($server = 'ini_get("mysql.default_host")', $username = 'ini_get("mysql.default_user")', $password = 'ini_get("mysql.default_password")', $new_link = false, $client_flags = 0) {}
function mysql_pconnect ($server = 'ini_get("mysql.default_host")', $username = 'ini_get("mysql.default_user")', $password = 'ini_get("mysql.default_password")', $client_flags = null) {}
function mysql_close ($link_identifier = null) {}
function mysql_select_db ($database_name, $link_identifier = null) {}
function mysql_query ($query, $link_identifier = null) {}
function mysql_unbuffered_query ($query, $link_identifier = null) {}
function mysql_db_query ($database, $query, $link_identifier = null) {}
function mysql_list_dbs ($link_identifier = null) {}
function mysql_list_tables ($database, $link_identifier = null) {}
function mysql_list_fields ($database_name, $table_name, $link_identifier = null) {}
function mysql_list_processes ($link_identifier = null) {}
function mysql_error ($link_identifier = null) {}
function mysql_errno ($link_identifier = null) {}
function mysql_affected_rows ($link_identifier = null) {}
function mysql_insert_id ($link_identifier = null) {}
function mysql_result ($result, $row, $field = 0) {}
function mysql_num_rows ($result) {}
function mysql_num_fields ($result) {}
function mysql_fetch_row ($result) {}
function mysql_fetch_array ($result, $result_type = MYSQL_BOTH) {}
function mysql_fetch_assoc ($result) {}
function mysql_fetch_object ($result, $class_name = 'stdClass', array $params = null ) {}
function mysql_data_seek ($result, $row_number) {}
function mysql_fetch_lengths ($result) {}
function mysql_fetch_field ($result, $field_offset = 0) {}
function mysql_field_seek ($result, $field_offset) {}
function mysql_free_result ($result) {}
function mysql_field_name ($result, $field_offset) {}
function mysql_field_table ($result, $field_offset) {}
function mysql_field_len ($result, $field_offset) {}
function mysql_field_type ($result, $field_offset) {}
function mysql_field_flags ($result, $field_offset) {}
function mysql_escape_string ($unescaped_string) {}
function mysql_real_escape_string ($unescaped_string, $link_identifier = null) {}
function mysql_stat ($link_identifier = null) {}
function mysql_thread_id ($link_identifier = null) {}
function mysql_client_encoding ($link_identifier = null) {}
function mysql_ping ($link_identifier = null) {}
function mysql_get_client_info () {}
function mysql_get_host_info ($link_identifier = null) {}
function mysql_get_proto_info ($link_identifier = null) {}
function mysql_get_server_info ($link_identifier = null) {}
function mysql_info ($link_identifier = null) {}
function mysql_set_charset ($charset, $link_identifier = null) {}
function mysql ($database_name, $query, $link_identifier) {}
function mysql_fieldname ($result, $field_index) {}
function mysql_fieldtable ($result, $field_offset) {}
function mysql_fieldlen ($result, $field_offset) {}
function mysql_fieldtype ($result, $field_offset) {}
function mysql_fieldflags ($result, $field_offset) {}
function mysql_selectdb ($database_name, $link_identifier) {}
function mysql_freeresult ($result) {}
function mysql_numfields ($result) {}
function mysql_numrows ($result) {}
function mysql_listdbs ($link_identifier) {}
function mysql_listtables ($database_name, $link_identifier) {}
function mysql_listfields ($database_name, $table_name, $link_identifier) {}
function mysql_db_name ($result, $row, $field = null) {}
function mysql_dbname ($result, $row, $field) {}
function mysql_tablename ($result, $i) {}
function mysql_table_name ($result, $row, $field) {}
define ('MYSQL_ASSOC', 1);
define ('MYSQL_NUM', 2);
define ('MYSQL_BOTH', 3);
define ('MYSQL_CLIENT_COMPRESS', 32);
define ('MYSQL_CLIENT_SSL', 2048);
define ('MYSQL_CLIENT_INTERACTIVE', 1024);
define ('MYSQL_CLIENT_IGNORE_SPACE', 256);
?>
