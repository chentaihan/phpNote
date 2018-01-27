<?php
class LibXMLError  {
	public $level;
	public $code;
	public $column;
	public $message;
	public $file;
	public $line;
}
function libxml_set_streams_context ($streams_context) {}
function libxml_use_internal_errors ($use_errors = false) {}
function libxml_get_last_error () {}
function libxml_clear_errors () {}
function libxml_get_errors () {}
function libxml_disable_entity_loader ($disable = true) {}
function libxml_set_external_entity_loader (callable $resolver_function) {}
define ('LIBXML_VERSION', 20901);
define ('LIBXML_DOTTED_VERSION', "2.9.1");
define ('LIBXML_LOADED_VERSION', 20901);
define ('LIBXML_NOENT', 2);
define ('LIBXML_DTDLOAD', 4);
define ('LIBXML_DTDATTR', 8);
define ('LIBXML_DTDVALID', 16);
define ('LIBXML_NOERROR', 32);
define ('LIBXML_NOWARNING', 64);
define ('LIBXML_NOBLANKS', 256);
define ('LIBXML_XINCLUDE', 1024);
define ('LIBXML_NSCLEAN', 8192);
define ('LIBXML_NOCDATA', 16384);
define ('LIBXML_NONET', 2048);
define ('LIBXML_PEDANTIC', 128);
define ('LIBXML_COMPACT', 65536);
define ('LIBXML_BIGLINES', 65535);
define ('LIBXML_NOXMLDECL', 2);
define ('LIBXML_PARSEHUGE', 524288);
define ('LIBXML_NOEMPTYTAG', 4);
define ('LIBXML_SCHEMA_CREATE', 1);
define ('LIBXML_HTML_NOIMPLIED', 8192);
define ('LIBXML_HTML_NODEFDTD', 4);
define ('LIBXML_ERR_NONE', 0);
define ('LIBXML_ERR_WARNING', 1);
define ('LIBXML_ERR_ERROR', 2);
define ('LIBXML_ERR_FATAL', 3);
