<?php
class PharException extends Exception  {
}
class Phar extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess {
	const BZ2 = 8192;
	const GZ = 4096;
	const NONE = 0;
	const PHAR = 1;
	const TAR = 2;
	const ZIP = 3;
	const COMPRESSED = 61440;
	const PHP = 0;
	const PHPS = 1;
	const MD5 = 1;
	const OPENSSL = 16;
	const SHA1 = 2;
	const SHA256 = 3;
	const SHA512 = 4;
	public function __construct ($fname, $flags = null, $alias = null) {}
	public function __destruct () {}
	public function addEmptyDir ($dirname, $levels = 1) {}
	public function addFile ($file, $localname = null) {}
	public function addFromString ($localname, $contents) {}
	public function buildFromDirectory ($base_dir, $regex = null) {}
	public function buildFromIterator (Iterator $iter, $base_directory = null) {}
	public function compressFiles ($compression) {}
	public function decompressFiles () {}
	public function compress ($compression, $extension = null) {}
	public function decompress ($extension = null) {}
	public function convertToExecutable ($format = 9021976, $compression = 9021976, $extension = null) {}
	public function convertToData ($format = 9021976, $compression = 9021976, $extension = null) {}
	public function copy ($oldfile, $newfile) {}
	public function count () {}
	public function delete ($entry) {}
	public function delMetadata () {}
	public function extractTo ($pathto, $files = null, $overwrite = false) {}
        public function getAlias () {}
	public function getMetadata () {}
	public function getModified () {}
	public function getSignature () {}
	public function getStub () {}
	public function getVersion () {}
	public function hasMetadata () {}
	public function isBuffering () {}
	public function isCompressed () {}
	public function isFileFormat ($format) {}
	public function isWritable () {}
	public function offsetExists ($offset) {}
	public function offsetGet ($offset) {}
	public function offsetSet ($offset, $value) {}
	public function offsetUnset ($offset) {}
	public function setAlias ($alias) {}
	public function setDefaultStub ($index = null, $webindex = null) {}
	public function setMetadata ($metadata) {}
	public function setSignatureAlgorithm ($sigtype, $privatekey = null) {}
	public function setStub ($stub, $len = -1) {}
	public function startBuffering () {}
	public function stopBuffering () {}
	final public static function apiVersion () {}
	final public static function canCompress ($type = 0) {}
	final public static function canWrite () {}
	final public static function createDefaultStub ($indexfile = null, $webindexfile = null) {}
	final public static function getSupportedCompression () {}
	final public static function getSupportedSignatures () {}
	final public static function interceptFileFuncs () {}
	final public static function isValidPharFilename ($filename, $executable = true) {}
	final public static function loadPhar ($filename, $alias = null) {}
	final public static function mapPhar ($alias = null, $dataoffset = 0) {}
	final public static function running ($retphar = true) {}
	final public static function mount ($pharpath, $externalpath) {}
	final public static function mungServer (array $munglist) {}
	final public static function unlinkArchive ($archive) {}
	final public static function webPhar ($alias = null, $index = "index.php", $f404 = null, array $mimetypes = null, callable $rewrites = null) {}
	public function hasChildren ($allow_links = false) {}
	public function getChildren () {}
	public function rewind () {}
	public function next () {}
	public function key () {}
	public function current () {}
	public function valid () {}
	public function seek ($position) {}
}
class PharData extends Phar {
	public function __construct ($fname, $flags = null, $alias = null, $format = Phar::TAR) {}
	public function offsetExists ($entry) {}
	public function offsetGet ($entry) {}
	public function offsetSet ($offset, $value) {}
	public function offsetUnset ($offset) {}
	public function hasChildren ($allow_links = false) {}
	public function getChildren () {}
	public function rewind () {}
	public function next () {}
	public function key () {}
	public function current () {}
	public function valid () {}
	public function seek ($position) {}
}
class PharFileInfo extends SplFileInfo  {
	public function __construct ($entry) {}
	public function __destruct () {}
	public function chmod ($permissions) {}
	public function compress ($compression) {}
	public function decompress () {}
	public function delMetadata () {}
	public function getCompressedSize () {}
	public function getCRC32 () {}
	public function getContent () {}
	public function getMetadata () {}
	public function getPharFlags () {}
	public function hasMetadata () {}
	public function isCompressed ($compression_type = 9021976) {}
	public function isCRCChecked () {}
	public function setMetadata ($metadata) {}
}
?>
