<?php
function sybase_connect ($servername = null, $username = null, $password = null, $charset = null, $appname = null) {}
function sybase_pconnect ($servername = null, $username = null, $password = null, $charset = null, $appname = null) {}
function sybase_close ($link_identifier = null) {}
function sybase_select_db ($database_name, $link_identifier = null) {}
function sybase_query ($query, $link_identifier = null) {}
function sybase_unbuffered_query ($query, $link_identifier, $store_result = null) {}
function sybase_free_result ($result) {}
function sybase_get_last_message () {}
function sybase_num_rows ($result) {}
function sybase_num_fields ($result) {}
function sybase_fetch_row ($result) {}
function sybase_fetch_array ($result) {}
function sybase_fetch_assoc ($result) {}
function sybase_fetch_object ($result, $object = null) {}
function sybase_data_seek ($result_identifier, $row_number) {}
function sybase_fetch_field ($result, $field_offset = null) {}
function sybase_field_seek ($result, $field_offset) {}
function sybase_result ($result, $row, $field) {}
function sybase_affected_rows ($link_identifier = null) {}
function sybase_min_client_severity ($severity) {}
function sybase_min_server_severity ($severity) {}
function sybase_set_message_handler ($handler, $connection = null) {}
function sybase_deadlock_retry_count ($retry_count) {}
