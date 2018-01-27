<?php
function ldap_connect ($hostname = null, $port = 389) {}
function ldap_close ($link_identifier) {}
function ldap_bind ($link_identifier, $bind_rdn = null, $bind_password = null) {}
function ldap_sasl_bind ($link, $binddn = null, $password = null, $sasl_mech = null, $sasl_realm = null, $sasl_authc_id = null, $sasl_authz_id = null, $props = null) {}
function ldap_unbind ($link_identifier) {}
function ldap_read ($link_identifier, $base_dn, $filter, array $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null) {}
function ldap_list ($link_identifier, $base_dn, $filter, array $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null) {}
function ldap_search ($link_identifier, $base_dn, $filter, array $attributes = null, $attrsonly = null, $sizelimit = null, $timelimit = null, $deref = null) {}
function ldap_free_result ($result_identifier) {}
function ldap_count_entries ($link_identifier, $result_identifier) {}
function ldap_first_entry ($link_identifier, $result_identifier) {}
function ldap_next_entry ($link_identifier, $result_entry_identifier) {}
function ldap_get_entries ($link_identifier, $result_identifier) {}
function ldap_first_attribute ($link_identifier, $result_entry_identifier) {}
function ldap_next_attribute ($link_identifier, $result_entry_identifier) {}
function ldap_get_attributes ($link_identifier, $result_entry_identifier) {}
function ldap_get_values ($link_identifier, $result_entry_identifier, $attribute) {}
function ldap_get_values_len ($link_identifier, $result_entry_identifier, $attribute) {}
function ldap_get_dn ($link_identifier, $result_entry_identifier) {}
function ldap_explode_dn ($dn, $with_attrib) {}
function ldap_dn2ufn ($dn) {}
function ldap_add ($link_identifier, $dn, array $entry) {}
function ldap_delete ($link_identifier, $dn) {}
function ldap_modify ($link_identifier, $dn, array $entry) {}
function ldap_mod_add ($link_identifier, $dn, array $entry) {}
function ldap_mod_replace ($link_identifier, $dn, array $entry) {}
function ldap_mod_del ($link_identifier, $dn, array $entry) {}
function ldap_errno ($link_identifier) {}
function ldap_err2str ($errno) {}
function ldap_error ($link_identifier) {}
function ldap_compare ($link_identifier, $dn, $attribute, $value) {}
function ldap_sort ($link, $result, $sortfilter) {}
function ldap_rename ($link_identifier, $dn, $newrdn, $newparent, $deleteoldrdn) {}
function ldap_get_option ($link_identifier, $option, &$retval) {}
function ldap_set_option ($link_identifier, $option, $newval) {}
function ldap_first_reference ($link, $result) {}
function ldap_next_reference ($link, $entry) {}
function ldap_parse_reference ($link, $entry, array &$referrals) {}
function ldap_parse_result ($link, $result, &$errcode, &$matcheddn = null, &$errmsg = null, array &$referrals = null) {}
function ldap_start_tls ($link) {}
function ldap_set_rebind_proc ($link, callable $callback) {}
function ldap_control_paged_result ($link, $pagesize, $iscritical = false, $cookie = "") {}
function ldap_control_paged_result_response ($link, $result, &$cookie = null, &$estimated = null) {}
function ldap_escape($subject, $ignore = null, $escape = null) {}
function ldap_modify_batch ( $link_identifier , $dn , $entry) {}
define('LDAP_ESCAPE_FILTER', 1);
define ('LDAP_ESCAPE_DN', 2);
define ('LDAP_DEREF_NEVER', 0);
define ('LDAP_DEREF_SEARCHING', 1);
define ('LDAP_DEREF_FINDING', 2);
define ('LDAP_DEREF_ALWAYS', 3);
define ('LDAP_MODIFY_BATCH_REMOVE',2);
define('LDAP_MODIFY_BATCH_ADD', 1);
define('LDAP_MODIFY_BATCH_REMOVE_ALL', 18);
define('LDAP_MODIFY_BATCH_REPLACE', 3);
define('LDAP_OPT_X_TLS_REQUIRE_CERT', 24582);
define('LDAP_OPT_X_TLS_NEVER', 0);
define('LDAP_OPT_X_TLS_HARD', 1);
define('LDAP_OPT_X_TLS_DEMAND', 2);
define('LDAP_OPT_X_TLS_ALLOW', 3);
define('LDAP_OPT_X_TLS_TRY', 4);
define('LDAP_OPT_X_TLS_CERTFILE', 24580);
define('LDAP_OPT_X_TLS_CIPHER_SUITE', 24584);
define('LDAP_OPT_X_TLS_KEYFILE', 24581);
define('LDAP_OPT_X_TLS_DHFILE', 24590);
define('LDAP_OPT_X_TLS_CRLFILE', 24592);
define('LDAP_OPT_X_TLS_RANDOM_FILE', 24585);
define('LDAP_OPT_X_TLS_CRLCHECK', 24587);
define('LDAP_OPT_X_TLS_CRL_NONE', 0);
define('LDAP_OPT_X_TLS_CRL_PEER', 1);
define('LDAP_OPT_X_TLS_CRL_ALL', 2);
define('LDAP_OPT_X_TLS_PROTOCOL_MIN', 24583);
define('LDAP_OPT_X_TLS_PROTOCOL_SSL2', 512);
define('LDAP_OPT_X_TLS_PROTOCOL_SSL3', 768);
define('LDAP_OPT_X_TLS_PROTOCOL_TLS1_0', 769);
define('LDAP_OPT_X_TLS_PROTOCOL_TLS1_1', 770);
define('LDAP_OPT_X_TLS_PROTOCOL_TLS1_2', 771);
define('LDAP_OPT_X_TLS_PACKAGE', 24593);
define('LDAP_OPT_X_KEEPALIVE_IDLE', 25344);
define('LDAP_OPT_X_KEEPALIVE_PROBES', 25345);
define('LDAP_OPT_X_KEEPALIVE_INTERVAL', 25346);
define('LDAP_OPT_X_SASL_USERNAME', 24844);
define('LDAP_OPT_X_SASL_NOCANON', 24843);
define ('LDAP_OPT_DEREF', 2);
define ('LDAP_OPT_SIZELIMIT', 3);
define ('LDAP_OPT_TIMELIMIT', 4);
define ('LDAP_OPT_NETWORK_TIMEOUT', 20485);
define ('LDAP_OPT_PROTOCOL_VERSION', 17);
define ('LDAP_OPT_ERROR_NUMBER', 49);
define ('LDAP_OPT_REFERRALS', 8);
define ('LDAP_OPT_RESTART', 9);
define ('LDAP_OPT_HOST_NAME', 48);
define ('LDAP_OPT_ERROR_STRING', 50);
define ('LDAP_OPT_MATCHED_DN', 51);
define ('LDAP_OPT_SERVER_CONTROLS', 18);
define ('LDAP_OPT_CLIENT_CONTROLS', 19);
define ('LDAP_OPT_DEBUG_LEVEL', 20481);
define ('LDAP_OPT_X_SASL_MECH', 24832);
define ('LDAP_OPT_X_SASL_REALM', 24833);
define ('LDAP_OPT_X_SASL_AUTHCID', 24834);
define ('LDAP_OPT_X_SASL_AUTHZID', 24835);
define('LDAP_OPT_X_TLS_CACERTDIR', 24579);
define('LDAP_OPT_X_TLS_CACERTFILE', 24578);
?>
