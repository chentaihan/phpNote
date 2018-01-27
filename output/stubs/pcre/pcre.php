<?php
function preg_match ($pattern, $subject, array &$matches = null, $flags = 0, $offset = 0) {}
function preg_match_all ($pattern, $subject, array &$matches = null, $flags = PREG_PATTERN_ORDER, $offset = 0) {}
function preg_replace ($pattern, $replacement, $subject, $limit = -1, &$count = null) {}
function preg_replace_callback ($pattern, callable $callback, $subject, $limit = -1, &$count = null) {}
function preg_replace_callback_array ($patterns_and_callbacks, $subject , $limit = -1, &$count ) {}
function preg_filter ($pattern, $replacement, $subject, $limit = -1, &$count = null) {}
function preg_split ($pattern, $subject, $limit = -1, $flags = 0) {}
function preg_quote ($str, $delimiter = null) {}
function preg_grep ($pattern, array $input, $flags = 0) {}
function preg_last_error () {}
define ('PREG_PATTERN_ORDER', 1);
define ('PREG_JIT_STACKLIMIT_ERROR', 6);
define ('PREG_SET_ORDER', 2);
define ('PREG_OFFSET_CAPTURE', 256);
define ('PREG_SPLIT_NO_EMPTY', 1);
define ('PREG_SPLIT_DELIM_CAPTURE', 2);
define ('PREG_SPLIT_OFFSET_CAPTURE', 4);
define ('PREG_GREP_INVERT', 1);
define ('PREG_NO_ERROR', 0);
define ('PREG_INTERNAL_ERROR', 1);
define ('PREG_BACKTRACK_LIMIT_ERROR', 2);
define ('PREG_RECURSION_LIMIT_ERROR', 3);
define ('PREG_BAD_UTF8_ERROR', 4);
define ('PREG_BAD_UTF8_OFFSET_ERROR', 5);
define ('PCRE_VERSION', "8.31 2012-07-06");
?>
