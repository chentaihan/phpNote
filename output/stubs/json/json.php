<?php
interface JsonSerializable  {
    function jsonSerialize ();
}
class JsonIncrementalParser  {
	const JSON_PARSER_SUCCESS = 0;
	const JSON_PARSER_CONTINUE = 1;
	public function __construct ($depth, $options) {}
	public function getError () {}
	public function reset () {}
	public function parse ($json) {}
	public function parseFile ($filename) {}
	public function get ($options) {}
}
function json_encode ($value, $options = 0, $depth = 512) {}
function json_decode ($json, $assoc = false, $depth = 512, $options = 0) {}
function json_last_error () {}
function json_last_error_msg () {}
define ('JSON_HEX_TAG', 1);
define ('JSON_HEX_AMP', 2);
define ('JSON_HEX_APOS', 4);
define ('JSON_HEX_QUOT', 8);
define ('JSON_FORCE_OBJECT', 16);
define ('JSON_NUMERIC_CHECK', 32);
define ('JSON_UNESCAPED_SLASHES', 64);
define ('JSON_PRETTY_PRINT', 128);
define ('JSON_UNESCAPED_UNICODE', 256);
define ('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);
define ('JSON_ERROR_STATE_MISMATCH', 2);
define ('JSON_ERROR_CTRL_CHAR', 3);
define ('JSON_ERROR_UTF8', 5);
define ('JSON_ERROR_RECURSION', 6);
define ('JSON_ERROR_INF_OR_NAN', 7);
define ('JSON_ERROR_UNSUPPORTED_TYPE', 8);
define ('JSON_ERROR_NONE', 0);
define ('JSON_ERROR_DEPTH', 1);
define ('JSON_ERROR_SYNTAX', 4);
define ('JSON_OBJECT_AS_ARRAY', 1);
define ('JSON_PARSER_NOTSTRICT', 4);
define ('JSON_BIGINT_AS_STRING', 2);
define ('JSON_PRESERVE_ZERO_FRACTION', 1024);
define('JSON_UNESCAPED_LINE_TERMINATORS', 2048)
?>
