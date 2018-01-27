<?php
function strtotime ($time, $now = 'time()') {}
function date ($format, $timestamp = null) {}
function idate ($format, $timestamp = null) {}
function gmdate ($format, $timestamp = null) {}
function mktime ($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = null) {}
function gmmktime ($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = null) {}
function checkdate ($month, $day, $year) {}
function strftime ($format, $timestamp) {}
function gmstrftime ($format, $timestamp = null) {}
function time () {}
function localtime ($timestamp = null, $is_associative = null) {}
function getdate ($timestamp = null) {}
function date_create ($time = null, DateTimeZone $timezone = null ) {}
function date_create_immutable ($time = null, DateTimeZone $timezone = null ) {}
function date_create_from_format ($format, $time, $timezone = null) {}
function date_parse ($date) {}
function date_parse_from_format ($format, $date) {}
function date_get_last_errors () {}
function date_format ($object, $format) {}
function date_modify ($object, $modify) {}
function date_add ($object, $interval) {}
function date_sub ($object, $interval) {}
function date_timezone_get ($object) {}
function date_timezone_set ($object, $timezone) {}
function date_offset_get ($object) {}
function date_diff ($object, $object2, $absolute) {}
function date_time_set ($object, $hour, $minute, $second) {}
function date_date_set ($object, $year, $month, $day) {}
function date_isodate_set ($object, $year, $week, $day = 1) {}
function date_timestamp_set ($object, $unixtimestamp) {}
function date_timestamp_get ($object) {}
function timezone_open ($timezone) {}
function timezone_name_get ($object) {}
function timezone_name_from_abbr ($abbr, $gmtOffset = null, $isdst = null) {}
function timezone_offset_get ($object, $datetime) {}
function timezone_transitions_get ($object, $timestamp_begin, $timestamp_end) {}
function timezone_location_get ($object) {}
function timezone_identifiers_list ($what = DateTimeZone::ALL, $country = null) {}
function timezone_abbreviations_list () {}
function timezone_version_get () {}
function date_interval_create_from_date_string ($time) {}
function date_interval_format ($object, $format) {}
function date_default_timezone_set ($timezone_identifier) {}
function date_default_timezone_get () {}
function date_sunrise ($timestamp, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null) {}
function date_sunset ($timestamp, $format = null, $latitude = null, $longitude = null, $zenith = null, $gmt_offset = null) {}
function date_sun_info ($time, $latitude, $longitude) {}
