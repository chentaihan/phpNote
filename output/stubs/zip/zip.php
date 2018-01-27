<?php
class ZipArchive  {
	const CREATE = 1;
	const EXCL = 2;
	const CHECKCONS = 4;
	const OVERWRITE = 8;
	const FL_NOCASE = 1;
	const FL_NODIR = 2;
	const FL_COMPRESSED = 4;
	const FL_UNCHANGED = 8;
	const CM_DEFAULT = -1;
	const CM_STORE = 0;
	const CM_SHRINK = 1;
	const CM_REDUCE_1 = 2;
	const CM_REDUCE_2 = 3;
	const CM_REDUCE_3 = 4;
	const CM_REDUCE_4 = 5;
	const CM_IMPLODE = 6;
	const CM_DEFLATE = 8;
	const CM_DEFLATE64 = 9;
	const CM_PKWARE_IMPLODE = 10;
	const CM_BZIP2 = 12;
	const CM_LZMA = 14;
	const CM_TERSE = 18;
	const CM_LZ77 = 19;
	const CM_WAVPACK = 97;
	const CM_PPMD = 98;
	const ER_OK = 0;
	const ER_MULTIDISK = 1;
	const ER_RENAME = 2;
	const ER_CLOSE = 3;
	const ER_SEEK = 4;
	const ER_READ = 5;
	const ER_WRITE = 6;
	const ER_CRC = 7;
	const ER_ZIPCLOSED = 8;
	const ER_NOENT = 9;
	const ER_EXISTS = 10;
	const ER_OPEN = 11;
	const ER_TMPOPEN = 12;
	const ER_ZLIB = 13;
	const ER_MEMORY = 14;
	const ER_CHANGED = 15;
	const ER_COMPNOTSUPP = 16;
	const ER_EOF = 17;
	const ER_INVAL = 18;
	const ER_NOZIP = 19;
	const ER_INTERNAL = 20;
	const ER_INCONS = 21;
	const ER_REMOVE = 22;
	const ER_DELETED = 23;
    public $status;
    public $statusSys;
    public $numFiles;
    public $filename;
    public $comment;
	public function open ($filename, $flags = null) {}
	public function close () {}
	public function getStatusString () {}
	public function addEmptyDir ($dirname) {}
	public function addFromString ($localname, $contents) {}
	public function addFile ($filename, $localname = null, $start = 0, $length = 0) {}
	public function addGlob ($pattern, $flags = 0, array $options = array()) {}
	public function addPattern ($pattern, $path = '.', array $options = array()) {}
	public function renameIndex ($index, $newname) {}
	public function renameName ($name, $newname) {}
	public function setArchiveComment ($comment) {}
	public function getArchiveComment ($flags = null) {}
	public function setCommentIndex ($index, $comment) {}
	public function setCommentName ($name, $comment) {}
	public function setCompressionIndex ($index, $comp_method, $comp_flags = 0) {}
	public function setCompressionName ($name, $comp_method, $comp_flags = 0){}
    public function setPassword($password) {}
	public function getCommentIndex ($index, $flags = null) {}
	public function getCommentName ($name, $flags = null) {}
	public function deleteIndex ($index) {}
	public function deleteName ($name) {}
	public function statName ($name, $flags = null) {}
	public function statIndex ($index, $flags = null) {}
	public function locateName ($name, $flags = null) {}
	public function getNameIndex ($index, $flags = null) {}
	public function unchangeArchive () {}
	public function unchangeAll () {}
	public function unchangeIndex ($index) {}
	public function unchangeName ($name) {}
	public function extractTo ($destination, $entries = null) {}
	public function getFromName ($name, $length = 0, $flags = null) {}
	public function getFromIndex ($index, $length = 0, $flags = null) {}
	public function getStream ($name) {}
}
function zip_open ($filename) {}
function zip_close ($zip) {}
function zip_read ($zip) {}
function zip_entry_open ($zip, $zip_entry, $mode = null) {}
function zip_entry_close ($zip_entry) {}
function zip_entry_read ($zip_entry, $length = 1024) {}
function zip_entry_filesize ($zip_entry) {}
function zip_entry_name ($zip_entry) {}
function zip_entry_compressedsize ($zip_entry) {}
function zip_entry_compressionmethod ($zip_entry) {}
?>
