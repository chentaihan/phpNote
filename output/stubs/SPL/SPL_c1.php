<?php
class SplFileInfo  {
        public function __construct ($file_name) {}
        public function getPath () {}
        public function getFilename () {}
        public function getExtension () {}
        public function getBasename ($suffix = null) {}
        public function getPathname () {}
        public function getPerms () {}
        public function getInode () {}
        public function getSize () {}
        public function getOwner () {}
        public function getGroup () {}
        public function getATime () {}
        public function getMTime () {}
        public function getCTime () {}
        public function getType () {}
        public function isWritable () {}
        public function isReadable () {}
        public function isExecutable () {}
        public function isFile () {}
        public function isDir () {}
        public function isLink () {}
        public function getLinkTarget () {}
        public function getRealPath () {}
        public function getFileInfo ($class_name = null) {}
        public function getPathInfo ($class_name = null) {}
	public function openFile ($open_mode = 'r', $use_include_path = false, $context = null) {}
        public function setFileClass ($class_name = null) {}
        public function setInfoClass ($class_name = null) {}
        public function __toString () {}
}
class DirectoryIterator extends SplFileInfo implements Iterator, Traversable, SeekableIterator {
        public function __construct ($path) {}
        public function isDot () {}
        public function rewind () {}
        public function valid () {}
        public function key () {}
        public function current () {}
        public function next () {}
        public function seek ($position) {}
}
class FilesystemIterator extends DirectoryIterator implements SeekableIterator, Traversable, Iterator {
        const CURRENT_MODE_MASK = 240;
        const CURRENT_AS_PATHNAME = 32;
        const CURRENT_AS_FILEINFO = 0;
        const CURRENT_AS_SELF = 16;
        const KEY_MODE_MASK = 3840;
        const KEY_AS_PATHNAME = 0;
        const FOLLOW_SYMLINKS = 512;
        const KEY_AS_FILENAME = 256;
        const NEW_CURRENT_AND_KEY = 256;
        const SKIP_DOTS = 4096;
        const UNIX_PATHS = 8192;
        public function __construct ($path, $flags) {}
        public function rewind () {}
        public function next () {}
        public function key () {}
        public function current () {}
        public function getFlags () {}
        public function setFlags ($flags = null) {}
}
class RecursiveDirectoryIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, RecursiveIterator {
        public function __construct ($path, $flags) {}
        public function hasChildren ($allow_links = null) {}
        public function getChildren () {}
        public function getSubPath () {}
        public function getSubPathname () {}
        public function rewind () {}
        public function next () {}
        public function key () {}
        public function current () {}
}
class GlobIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, Countable {
        public function __construct ($path, $flags) {}
        public function count () {}
}
class SplFileObject extends SplFileInfo implements RecursiveIterator, Traversable, Iterator, SeekableIterator {
        const DROP_NEW_LINE = 1;
        const READ_AHEAD = 2;
        const SKIP_EMPTY = 6;
        const READ_CSV = 8;
        public function __construct ($file_name, $open_mode, $use_include_path, $context) {}
        public function rewind () {}
        public function eof () {}
        public function valid () {}
        public function fgets () {}
        public function fread ($length) {}
	public function fgetcsv ($delimiter = ",", $enclosure = "\"", $escape = "\\") {}
	public function fputcsv (array $fields, $delimiter = ',' , $enclosure = '"', $escape_char = "\\") {}
	public function setCsvControl ($delimiter = ",", $enclosure = "\"", $escape = "\\") {}
        public function getCsvControl () {}
        public function flock ($operation, &$wouldblock = null) {}
        public function fflush () {}
        public function ftell () {}
	public function fseek ($offset, $whence = SEEK_SET) {}
        public function fgetc () {}
        public function fpassthru () {}
        public function fgetss ($allowable_tags = null) {}
        public function fscanf ($format, &$_ = null) {}
        public function fwrite ($str, $length = null) {}
        public function fstat () {}
        public function ftruncate ($size) {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function setFlags ($flags) {}
        public function getFlags () {}
        public function setMaxLineLen ($max_len) {}
        public function getMaxLineLen () {}
        public function hasChildren () {}
        public function getChildren () {}
        public function seek ($line_pos) {}
        public function getCurrentLine () {}
        public function __toString () {}
}
class SplTempFileObject extends SplFileObject implements SeekableIterator, Iterator, Traversable, RecursiveIterator {
        public function __construct ($max_memory) {}
}
class SplDoublyLinkedList implements Iterator, Traversable, Countable, ArrayAccess {
        const IT_MODE_LIFO = 2;
        const IT_MODE_FIFO = 0;
        const IT_MODE_DELETE = 1;
        const IT_MODE_KEEP = 0;
        public function add($index, $newval) {}
        public function pop () {}
        public function shift () {}
        public function push ($value) {}
        public function unshift ($value) {}
        public function top () {}
        public function bottom () {}
        public function count () {}
        public function isEmpty () {}
        public function setIteratorMode ($mode) {}
        public function getIteratorMode () {}
        public function offsetExists ($index) {}
        public function offsetGet ($index) {}
        public function offsetSet ($index, $newval) {}
        public function offsetUnset ($index) {}
        public function rewind () {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function prev () {}
        public function valid () {}
         public function unserialize($serialized) {}
         public function  serialize () {}
}
class SplQueue extends SplDoublyLinkedList implements ArrayAccess, Countable, Traversable, Iterator {
        public function enqueue ($value) {}
        public function dequeue () {}
    public function setIteratorMode ($mode) {}
}
class SplStack extends SplDoublyLinkedList implements ArrayAccess, Countable, Traversable, Iterator {
    public function setIteratorMode ($mode) {}
}
abstract class SplHeap implements Iterator, Traversable, Countable {
        public function extract () {}
        public function insert ($value) {}
        public function top () {}
        public function count () {}
        public function isEmpty () {}
        public function rewind () {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function valid () {}
        public function recoverFromCorruption () {}
        abstract protected function compare ($value1, $value2);
}
class SplMinHeap extends SplHeap implements Countable, Traversable, Iterator {
        protected function compare ($value1, $value2) {}
        public function extract () {}
        public function insert ($value) {}
        public function top () {}
        public function count () {}
        public function isEmpty () {}
        public function rewind () {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function valid () {}
        public function recoverFromCorruption () {}
}
class SplMaxHeap extends SplHeap implements Countable, Traversable, Iterator {
    protected function compare ($value1, $value2) {}
}
class SplPriorityQueue implements Iterator, Traversable, Countable {
        const EXTR_BOTH = 3;
        const EXTR_PRIORITY = 2;
        const EXTR_DATA = 1;
        public function compare ($priority1, $priority2) {}
        public function insert ($value, $priority) {}
        public function setExtractFlags ($flags) {}
        public function top () {}
        public function extract () {}
        public function count () {}
        public function isEmpty () {}
        public function rewind () {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function valid () {}
        public function recoverFromCorruption () {}
}
class SplFixedArray implements Iterator, Traversable, ArrayAccess, Countable {
        public function __construct ($size = 0) {}
        public function count () {}
        public function toArray () {}
	public static function fromArray (array $array, $save_indexes = true) {}
        public function getSize () {}
        public function setSize ($size) {}
        public function offsetExists ($index) {}
        public function offsetGet ($index) {}
        public function offsetSet ($index, $newval) {}
        public function offsetUnset ($index) {}
        public function rewind () {}
        public function current () {}
        public function key () {}
        public function next () {}
        public function valid () {}
}
interface SplObserver  {
        public function update (SplSubject $subject);
}
interface SplSubject  {
        public function attach (SplObserver $observer);
        public function detach (SplObserver $observer);
        public function notify ();
}
class SplObjectStorage implements Countable, Iterator, Traversable, Serializable, ArrayAccess {
        public function attach ($object, $data = null) {}
        public function detach ($object) {}
        public function contains ($object) {}
	public function addAll ($storage) {}
	public function removeAll ($storage) {}
	public function removeAllExcept ($storage) {}
        public function getInfo () {}
        public function setInfo ($data) {}
        public function count () {}
        public function rewind () {}
        public function valid () {}
        public function key () {}
        public function current () {}
        public function next () {}
        public function unserialize ($serialized) {}
        public function serialize () {}
        public function offsetExists ($object) {}
	public function offsetSet ($object, $data = null) {}
        public function offsetUnset ($object) {}
        public function offsetGet ($object) {}
        public function getHash($object) {}
}
class MultipleIterator implements Iterator, Traversable {
        const MIT_NEED_ANY = 0;
        const MIT_NEED_ALL = 1;
        const MIT_KEYS_NUMERIC = 0;
        const MIT_KEYS_ASSOC = 2;
        public function __construct ($flags) {}
        public function getFlags () {}
        public function setFlags ($flags) {}
	public function attachIterator (Iterator $iterator, $infos = null) {}
	public function detachIterator (Iterator $iterator) {}
	public function containsIterator (Iterator $iterator) {}
        public function countIterators () {}
        public function rewind () {}
        public function valid () {}
        public function key () {}
        public function current () {}
        public function next () {}
}
