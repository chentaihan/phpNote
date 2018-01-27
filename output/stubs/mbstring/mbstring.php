<?php
function mb_convert_case ($str, $mode, $encoding = null) {}
function mb_strtoupper ($str, $encoding = null) {}
function mb_strtolower ($str, $encoding = null) {}
function mb_language ($language = null) {}
function mb_internal_encoding ($encoding = null) {}
function mb_http_input ($type = null) {}
function mb_http_output ($encoding = null) {}
function mb_detect_order ($encoding_list = null) {}
function mb_substitute_character ($substrchar = null) {}
function mb_parse_str ($encoded_string, array &$result = null) {}
function mb_output_handler ($contents, $status) {}
function mb_preferred_mime_name ($encoding) {}
function mb_strlen ($str, $encoding = null) {}
function mb_strpos ($haystack, $needle, $offset = null, $encoding = null) {}
function mb_strrpos ($haystack, $needle, $offset = null, $encoding = null) {}
function mb_stripos ($haystack, $needle, $offset = null, $encoding = null) {}
function mb_strripos ($haystack, $needle, $offset = null, $encoding = null) {}
function mb_strstr ($haystack, $needle, $part = null, $encoding = null) {}
function mb_strrchr ($haystack, $needle, $part = null, $encoding = null) {}
function mb_stristr ($haystack, $needle, $part = null, $encoding = null) {}
function mb_strrichr ($haystack, $needle, $part = null, $encoding = null) {}
function mb_substr_count ($haystack, $needle, $encoding = null) {}
function mb_substr ($str, $start, $length = null, $encoding = null) {}
function mb_strcut ($str, $start, $length = null, $encoding = null) {}
function mb_strwidth ($str, $encoding = null) {}
function mb_strimwidth ($str, $start, $width, $trimmarker = null, $encoding = null) {}
function mb_convert_encoding ($str, $to_encoding, $from_encoding = null) {}
function mb_detect_encoding ($str, $encoding_list = null, $strict = null) {}
function mb_list_encodings () {}
function mb_encoding_aliases ($encoding) {}
function mb_convert_kana ($str, $option = null, $encoding = null) {}
function mb_encode_mimeheader ($str, $charset = null, $transfer_encoding = null, $linefeed = null, $indent = null) {}
function mb_decode_mimeheader ($str) {}
function mb_convert_variables ($to_encoding, $from_encoding, &$vars, &$_ = null) {}
function mb_encode_numericentity ($str, array $convmap, $encoding = null, $is_hex = false) {}
function mb_decode_numericentity ($str, array $convmap, $encoding = null) {}
function mb_send_mail ($to, $subject, $message, $additional_headers = null, $additional_parameter = null) {}
function mb_get_info ($type = null) {}
function mb_check_encoding ($var = null, $encoding = null) {}
function mb_regex_encoding ($encoding = null) {}
function mb_regex_set_options ($options = null) {}
function mb_ereg ($pattern, $string, array $regs = null) {}
function mb_eregi ($pattern, $string, array $regs = null) {}
function mb_ereg_replace ($pattern, $replacement, $string, $option = null) {}
function mb_ereg_replace_callback ($pattern, callable $callback, $string, $option = "msr") {}
function mb_eregi_replace ($pattern, $replace, $string, $option = null) {}
function mb_split ($pattern, $string, $limit = null) {}
function mb_ereg_match ($pattern, $string, $option = null) {}
function mb_ereg_search ($pattern = null, $option = null) {}
function mb_ereg_search_pos ($pattern = null, $option = null) {}
function mb_ereg_search_regs ($pattern = null, $option = null) {}
function mb_ereg_search_init ($string, $pattern = null, $option = null) {}
function mb_ereg_search_getregs () {}
function mb_ereg_search_getpos () {}
function mb_ereg_search_setpos ($position) {}
function mbregex_encoding ($encoding) {}
function mbereg ($pattern, $string, &$registers) {}
function mberegi ($pattern, $string, &$registers) {}
function mbereg_replace ($pattern, $replacement, $string, $option) {}
function mberegi_replace ($pattern, $replacement, $string) {}
function mbsplit ($pattern, $string, $limit) {}
function mbereg_match ($pattern, $string, $option) {}
function mbereg_search ($pattern, $option) {}
function mbereg_search_pos ($pattern, $option) {}
function mbereg_search_regs ($pattern, $option) {}
function mbereg_search_init ($string, $pattern, $option) {}
function mbereg_search_getregs () {}
function mbereg_search_getpos () {}
function mbereg_search_setpos ($position) {}
define ('MB_OVERLOAD_MAIL', 1);
define ('MB_OVERLOAD_STRING', 2);
define ('MB_OVERLOAD_REGEX', 4);
define ('MB_CASE_UPPER', 0);
define ('MB_CASE_LOWER', 1);
define ('MB_CASE_TITLE', 2);
?>
