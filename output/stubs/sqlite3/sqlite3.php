<?php
class SQLite3  {
	public function open ($filename, $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, $encryption_key = null) {}
	public function close () {}
	public function exec ($query) {}
	public static function version () {}
	public function lastInsertRowID () {}
	public function lastErrorCode () {}
	public function lastErrorMsg () {}
	public function busyTimeout ($msecs) {}
	public function loadExtension ($shared_library) {}
	public function changes () {}
	public static function escapeString ($value) {}
	public function prepare ($query) {}
	public function query ($query) {}
	public function querySingle ($query, $entire_row = false) {}
	public function createFunction ($name, $callback, $argument_count = -1) {}
	public function createAggregate ($name, $step_callback, $final_callback, $argument_count = -1) {}
	public function createCollation ($name, callable $callback) {}
	public function openBlob ($table, $column, $rowid, $dbname) {}
	public function enableExceptions ($enableExceptions) {}
	public function __construct ($filename, $flags = null, $encryption_key = null) {}
}
class SQLite3Stmt  {
	public function paramCount () {}
	public function close () {}
	public function reset () {}
	public function clear () {}
	public function execute () {}
	public function bindParam ($sql_param, &$param, $type = null) {}
	public function bindValue ($sql_param, $value, $type = null) {}
	public function readOnly () {}
	private function __construct ($sqlite3) {}
}
class SQLite3Result  {
	public function numColumns () {}
	public function columnName ($column_number) {}
	public function columnType ($column_number) {}
	public function fetchArray ($mode = SQLITE3_BOTH) {}
	public function reset () {}
	public function finalize () {}
	private function __construct () {}
}
define ('SQLITE3_ASSOC', 1);
define ('SQLITE3_NUM', 2);
define ('SQLITE3_BOTH', 3);
define ('SQLITE3_INTEGER', 1);
define ('SQLITE3_FLOAT', 2);
define ('SQLITE3_TEXT', 3);
define ('SQLITE3_BLOB', 4);
define ('SQLITE3_NULL', 5);
define ('SQLITE3_OPEN_READONLY', 1);
define ('SQLITE3_OPEN_READWRITE', 2);
define ('SQLITE3_OPEN_CREATE', 4);
?>
