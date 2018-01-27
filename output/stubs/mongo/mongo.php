<?php
/*
 * Mongo extension stubs
 * Gathered from http://www.php.net/manual/en/book.mongo.php
 * Maintainer: Alexander Makarov, sam@rmcreative.ru, max@upgradeyour.com
 *
 * MongoClient: https://github.com/djsipe/PHP-Stubs
 */
class MongoClient
{
    const VERSION = '3.x';
    const DEFAULT_HOST = "localhost" ;
    const DEFAULT_PORT = 27017 ;
    const RP_PRIMARY = "primary" ;
    const RP_PRIMARY_PREFERRED = "primaryPreferred" ;
    const RP_SECONDARY = "secondary" ;
    const RP_SECONDARY_PREFERRED = "secondaryPreferred" ;
    const RP_NEAREST = "nearest" ;
    public $connected = FALSE ;
    public $status = NULL ;
    protected $server = NULL ;
    protected $persistent = NULL ;
    public function __construct($server = "mongodb://localhost:27017", array $options = array("connect" => TRUE), $driver_options) {}
    public function close($connection) {}
    public function connect() {}
    public function dropDB($db) {}
    public function __get ($dbname)
    {}
    static public function getConnections ()
    {}
    public function getHosts ()
    {}
    public function getReadPreference ()
    {}
    public function getWriteConcern () {}
    public function killCursor ( $server_hash , $id) {}
    public function listDBs() {}
    public function selectCollection($db, $collection) {}
    public function selectDB($name) {}
    public function setReadPreference ($readPreference, $tags=null)
    {}
    public function switchSlave()  {}
    public function __toString() {}
}
class Mongo extends MongoClient {
    public function getPoolSize() {}
    public function getSlave() {}
    public function getSlaveOkay() {}
    public function pairConnect() {}
    public function poolDebug() {}
    public function setSlaveOkay ($ok) {}
    public function setPoolSize($size) {}
    public function persistConnect($username = "", $password = "") {}
    public function pairPersistConnect($username = "", $password = "") {}
    protected function connectUtil() {}
    public function lastError() {}
    public function prevError() {}
    public function resetError() {}
    public function forceError() {}
}
class MongoDB {
    const PROFILING_OFF = 0;
    const PROFILING_SLOW = 1;
    const PROFILING_ON = 2;
    public $w = 1;
    public $wtimeout = 10000;
    public function __construct($conn, $name) {}
    public function __toString() {}
    public function __get($name) {}
    public function getCollectionNames($includeSystemCollections = false) {}
    public function getGridFS($prefix = "fs") {}
    public function getProfilingLevel() {}
    public function getSlaveOkay () {}
    public function setProfilingLevel($level) {}
    public function drop() {}
    public function repair($preserve_cloned_files = FALSE, $backup_original_files = FALSE) {}
    public function selectCollection($name) {}
    public function setSlaveOkay ($ok = true) {}
    public function createCollection($name, $options) {}
    public function dropCollection($coll) {}
    public function listCollections($includeSystemCollections = false) {}
    public function createDBRef($collection, $document_or_id) {}
    public function getDBRef(array $ref) {}
    public function getWriteConcern() {}
    public function execute($code, array $args = array()) {}
    public function command(array $data, $options) {}
    public function lastError() {}
    public function prevError() {}
    public function resetError() {}
    public function forceError() {}
    public function authenticate($username, $password) {}
    public function getReadPreference () {}
    public function setReadPreference ($read_preference, array $tags) {}
    public function setWriteConcern($w, $wtimeout) {}
}
class MongoCollection {
    const ASCENDING = 1;
    const DESCENDING = -1;
	public $db = NULL ;
    public $w;
    public $wtimeout;
    public function __construct(MongoDB $db, $name) {}
    public function __toString() {}
    public function __get($name) {}
    public function aggregate ( array $pipeline, array $op, array $pipelineOperators ) {}
    public function aggregateCursor(array $pipeline, array $options) {}
    public function getName() {}
    public function getSlaveOkay() { }
    public function setSlaveOkay($ok = true) { }
    public function getReadPreference() { }
    public function setReadPreference($read_preference, array $tags) { }
    public function drop() {}
    public function validate($scan_data = FALSE) {}
    public function insert($a, array $options = array()) {}
    public function batchInsert(array $a, array $options = array()) {}
    public function update(array $criteria , array $newobj, array $options = array()) {}
    public function remove(array $criteria = array(), array $options = array()) {}
    public function find(array $query = array(), array $fields = array()) {}
    public function distinct ($key, array $query = NULL) {}
    public function findAndModify (array $query, array $update = NULL, array $fields = NULL, array $options = NULL) {}
    public function findOne(array $query = array(), array $fields = array(), array $options = array()) {}
    public function createIndex(array $keys, array $options = array()) {}
    public function ensureIndex(array $keys, array $options = array()) {}
    public function deleteIndex($keys) {}
    public function deleteIndexes() {}
    public function getIndexInfo() {}
    public function count($query = array()) {}
    public function save($a, array $options = array()) {}
    public function createDBRef(array $a) {}
    public function getDBRef(array $ref) {}
    protected static function toIndexString($keys) {}
    public function group($keys, array $initial, MongoCode $reduce, array $condition = array()) {}
}
class MongoCursor implements Iterator, Traversable {
    public static $slaveOkay = FALSE;
    static $timeout = 30000;
    public function __construct($connection, $ns, array $query = array(), array $fields = array()) {}
    public function awaitData ($wait = true) {}
    public function hasNext() {}
    public function getNext() {}
    public function getReadPreference () { }
    public function limit($num) {}
    public function partial ($okay = true) {}
    public function setFlag ($flag, $set = true ) {}
    public function setReadPreference ($read_preference, array $tags) {}
    public function skip($num) {}
    public function slaveOkay($okay = true) {}
    public function tailable($tail = true) {}
    public function immortal($liveForever = true) {}
    public function timeout($ms) {}
    public function dead() {}
    public function snapshot() {}
    public function sort(array $fields) {}
    public function hint(array $key_pattern) {}
    public function addOption($key, $value) {}
    protected function doQuery() {}
    public function current() {}
    public function key() {}
    public function next() {}
    public function rewind() {}
    public function valid() {}
    public function reset() {}
    public function explain() {}
    public function count($all = FALSE) {}
	public function fields(array $f){}
	public function info(){}
    public function batchSize($batchSize){}
	
	public function maxTimeMS ($ms) {}
}
class MongoCommandCursor implements MongoCursorInterface, Iterator{
    public function current(){}
    public function next(){}
    public function key(){}
    public function valid(){}
    public function rewind(){}
    function batchSize(int $batchSize):MongoCursorInterface{}
    function dead():bool{}
    function info():array{}
    function getReadPreference():array{}
    function setReadPreference(string $read_preference, array $tags = null):MongoCursorInterface{}
    function timeout(int $ms):MongoCursorInterface{}
}
interface MongoCursorInterface extends Iterator
{
    function batchSize(int $batchSize):MongoCursorInterface;
    function dead():bool;
    function info():array;
    function getReadPreference():array;
    function setReadPreference(string $read_preference, array $tags = null):MongoCursorInterface;
    function timeout(int $ms):MongoCursorInterface;
}
class MongoGridFS extends MongoCollection {
    const ASCENDING = 1;
    const DESCENDING = -1;
    public $chunks;
    protected $filesName;
    protected $chunksName;
    public function __construct($db, $prefix = "fs", $chunks = "fs") {}
    public function drop() {}
    public function find(array $query = array(), array $fields = array()) {}
    public function storeFile($filename, $extra = array(), $options = array()) {}
    public function storeBytes($bytes, $extra = array(), $options = array()) {}
    public function findOne(array $query = array(), array $fields = array()) {}
    public function remove(array $criteria = array(), array $options = array()) {}
    public function delete($id) {}
    public function storeUpload($name, array $metadata = array()) {}
    public function __get($id) {}
    public function put($filename, array $extra = array()) {}
}
class MongoGridFSFile {
    public $file;
    protected $gridfs;
    public function __construct($gridfs, array $file) {}
    public function getFilename() {}
    public function getSize() {}
    public function write($filename = null) {}
    public function getBytes() {}
    public function getResource() {}
}
class MongoGridFSCursor extends MongoCursor implements Traversable, Iterator {
    public static $slaveOkay;
    protected $gridfs;
    public function __construct($gridfs, $connection, $ns, $query, $fields) {}
    public function getNext() {}
    public function current() {}
    public function key() {}
}
class MongoId {
     public $id = NULL;
    public function __construct($id = NULL) {}
    public static function isValid($value) {}
    public function __toString() {}
    public function getInc() {}
    public function getPID() {}
    public function getTimestamp() {}
    public static function getHostname() {}
    public static function __set_state(array $props) {}
}
class MongoCode {
    public $code;
    public $scope;
    public function __construct($code, array $scope = array()) {}
    public function __toString() {}
}
class MongoRegex {
    public $regex;
    public $flags;
    public function __construct($regex) {}
    public function __toString() {}
}
class MongoDate {
    public $sec;
    public $usec;
    public function __construct($sec = 0, $usec = 0) {}
    public function toDateTime() {}
    public function __toString() {}
}
class MongoBinData {
	const GENERIC = 0x0;
    const FUNC = 0x1;
    const BYTE_ARRAY = 0x2;
    const UUID = 0x3;
	const UUID_RFC4122 = 0x4;
	
    const MD5 = 0x5;
    const CUSTOM = 0x80;
    public $bin;
    public $type;
    public function __construct($data, $type = 2) {}
    public function __toString() {}
}
class MongoDBRef {
    protected static $refKey = '$ref';
    protected static $idKey = '$id';
    public static function create($collection, $id, $database = null) {}
    public static function isRef($ref) {}
    public static function get($db, $ref) {}
}
class MongoWriteBatch
{
	const COMMAND_INSERT = 1;
	const COMMAND_UPDATE = 2;
	const COMMAND_DELETE = 3;
	protected function __construct($collection, $batch_type, $write_options)
	{
	}
	public function add(array $item)
	{
	}
	final public function execute(array $write_options)
	{
	}
}
class MongoUpdateBatch extends MongoWriteBatch
{
	public function __construct(MongoCollection $collection, array $write_options)
	{
	}
}
class MongoException extends Exception {
}
class MongoCursorException extends MongoException {
}
class MongoCursorTimeoutException extends MongoCursorException {
}
class MongoConnectionException extends MongoException {
}
class MongoGridFSException extends MongoException {
}
class MongoWriteConcernException extends MongoCursorException {
    public function getDocument() {}
}
class MongoExecutionTimeoutException extends MongoException {}
class MongoProtocolException extends MongoException {}
class MongoDuplicateKeyException extends MongoWriteConcernException {
}
class MongoResultException extends MongoException {
    public function getDocument () {}
    public $document;
}
class MongoTimestamp {
    public $sec;
    public $inc;
    public function __construct($sec = 0, $inc) {}
    public function __toString() {}
}
class MongoInt32 {
    public $value;
    public function __construct($value) {}
    public function __toString() {}
}
class MongoInt64 {
    public $value;
    public function __construct($value) {}
    public function __toString() {}
}
class MongoLog {
    const NONE = 0;
    const ALL = 0;
    const WARNING = 0;
    const INFO = 0;
    const FINE = 0;
    const RS = 0;
    const POOL = 0;
    const IO = 0;
    const SERVER = 0;
    const PARSE = 0;
    const CON = 2;
    public static function setCallback ( callable $log_function ) {}
    public static function setLevel($level) {}
    public static function getLevel() {}
    public static function setModule($module) {}
    public static function getModule() {}
}
class MongoPool {
    public static function info() {}
    public static function setSize($size) {}
    public static function getSize() {}
}
class MongoMaxKey {
}
class MongoMinKey {
}
