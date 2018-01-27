<?php
function newrelic_add_custom_parameter($key, $value) {}
function newrelic_add_custom_tracer($functionName) {}
function newrelic_background_job($flag = true) {}
function newrelic_capture_params($enable = true) {}
function newrelic_custom_metric($metricName, $value) {}
function newrelic_disable_autorum() {}
function newrelic_enable_params() {}
function newrelic_end_of_transaction() {}
function newrelic_end_transaction($ignore = false) {}
function newrelic_get_browser_timing_footer ($includeTags = true) {}
function newrelic_get_browser_timing_header($includeTags = true) {}
function newrelic_ignore_apdex() {}
function newrelic_ignore_transaction() {}
function newrelic_name_transaction($name) {}
function newrelic_notice_error($messageOrUnused = null, $exceptionOrMessage = null, $unused2 = null, $unused3 = null, $unused4 = null) {}
function newrelic_record_custom_event($name, array $attributes) {}
function newrelic_set_appname($name, $license = null, $xmit = false) {}
function newrelic_set_user_attributes($user, $account, $product) {}
function newrelic_start_transaction($appName, $license = null) {}
