<?php
namespace Couchbase {
    define("Couchbase\\HAVE_IGBINARY", 1);
    define("Couchbase\\HAVE_ZLIB", 1);
    define("Couchbase\\ENCODER_FORMAT_JSON", 0);
    define("Couchbase\\ENCODER_FORMAT_IGBINARY", 1);
    define("Couchbase\\ENCODER_FORMAT_PHP", 2);
    define("Couchbase\\ENCODER_COMPRESSION_NONE", 0);
    define("Couchbase\\ENCODER_COMPRESSION_ZLIB", 1);
    define("Couchbase\\ENCODER_COMPRESSION_FASTLZ", 2);
    function fastlzCompress($data) {}
    function fastlzDecompress($data) {}
    function zlibCompress($data) {}
    function zlibDecompress($data) {}
    function passthruDecoder($bytes, $flags, $datatype) {}
    function passthruEncoder($value) {}
    function defaultDecoder($bytes, $flags, $datatype) {}
    function defaultEncoder($value) {}
    function basicDecoderV1($bytes, $flags, $datatype, $options) {}
    function basicEncoderV1($value, $options) {}
    class Exception extends \Exception {
    }
    class Document {
        public $error;
        public $value;
        public $flags;
        public $cas;
        public $token;
    }
    class DocumentFragment {
        public $error;
        public $value;
        public $cas;
        public $token;
    }
    final class Cluster {
        final public function __construct($connstr) {}
        final public function openBucket($name = "default", $password = "") {}
        final public function manager($username = null, $password = null) {}
        final public function authenticate($authenticator) {}
    }
    final class ClusterManager {
        final private function __construct() {}
        final public function listBuckets() {}
        final public function createBucket($name, $options = []) {}
        final public function removeBucket($name) {}
        final public function info() {}
    }
    final class Bucket {
        final private function __construct() {}
        final private function __get($name) {}
        final private function __set($name, $value) {}
        final public function manager() {}
        final public function setTranscoder($encoder, $decoder) {}
        final public function get($ids, $options = []) {}
        final public function getAndLock($ids, $lockTime, $options = []) {}
        final public function getAndTouch($ids, $expiry, $options = []) {}
        final public function getFromReplica($ids, $options = []) {}
        final public function upsert($ids, $value, $options = []) {}
        final public function insert($ids, $value, $options = []) {}
        final public function replace($ids, $value, $options = []) {}
        final public function append($ids, $value, $options = []) {}
        final public function prepend($ids, $value, $options = []) {}
        final public function remove($ids, $options = []) {}
        final public function unlock($ids, $options = []) {}
        final public function touch($ids, $expiry, $options = []) {}
        final public function counter($ids, $delta = 1, $options = []) {}
        final public function lookupIn($id) {}
        final public function retrieveIn($id, ...$paths) {}
        final public function mutateIn($id, $cas) {}
        final public function query($query, $jsonAsArray = false) {}
        final public function mapSize($id) {}
        final public function mapAdd($id, $key, $value) {}
        final public function mapRemove($id, $key) {}
        final public function mapGet($id, $key) {}
        final public function setSize($id) {}
        final public function setAdd($id, $value) {}
        final public function setExists($id, $value) {}
        final public function setRemove($id, $value) {}
        final public function listSize($id) {}
        final public function listPush($id, $value) {}
        final public function listShift($id, $value) {}
        final public function listRemove($id, $index) {}
        final public function listGet($id, $index) {}
        final public function listSet($id, $index, $value) {}
        final public function listExists($id, $value) {}
        final public function queueSize($id) {}
        final public function queueExists($id, $value) {}
        final public function queueAdd($id, $value) {}
        final public function queueRemove($id) {}
    }
    final class BucketManager {
        final private function __construct() {}
        final public function info() {}
        final public function flush() {}
        final public function listDesignDocuments() {}
        final public function getDesignDocument($name) {}
        final public function removeDesignDocument($name) {}
        final public function upsertDesignDocument($name, $document) {}
        final public function insertDesignDocument($name, $document) {}
        final public function listN1qlIndexes() {}
        final public function createN1qlPrimaryIndex($customName = '', $ignoreIfExist = false, $defer = false) {}
        final public function createN1qlIndex($name, $fields, $whereClause = '', $ignoreIfExist = false, $defer = false) {}
        final public function dropN1qlPrimaryIndex($customName = '', $ignoreIfNotExist = false) {}
        final public function dropN1qlIndex($name, $ignoreIfNotExist = false) {}
    }
    interface Authenticator {}
    final class ClassicAuthenticator implements Authenticator {
        final public function cluster($username, $password) {}
        final public function bucket($name, $password) {}
    }
    final class MutationToken {
        final private function __construct() {}
        final public static function from($bucketName, $vbucketId, $vbucketUuid, $sequenceNumber) {}
        final public function bucketName() {}
        final public function vbucketId() {}
        final public function vbucketUuid() {}
        final public function sequenceNumber() {}
    }
    final class MutationState {
        final private function __construct() {}
        final public static function from($source) {}
        final public function add($source) {}
    }
    interface ViewQueryEncodable {
        function encode();
    }
    final class ViewQuery implements ViewQueryEncodable {
        const UPDATE_BEFORE = 1;
        const UPDATE_NONE = 2;
        const UPDATE_AFTER = 3;
        const ORDER_ASCENDING = 1;
        const ORDER_DESCENDING = 2;
        final private function __construct() {}
        final public static function from($designDocumentName, $viewName) {}
        final public static function fromSpatial($designDocumentName, $viewName) {}
        function encode() {}
        final public function limit($limit) {}
        final public function skip($skip) {}
        final public function consistency($consistency) {}
        final public function order($order) {}
        final public function reduce($reduce) {}
        final public function group($group) {}
        final public function groupLevel($groupLevel) {}
        final public function key($key) {}
        final public function keys($keys) {}
        final public function range($startKey, $endKey, $inclusiveEnd = false) {}
        final public function idRange($startKeyDocumentId, $endKeyDocumentId) {}
        final public function custom($customParameters) {}
    }
    final class SpatialViewQuery implements ViewQueryEncodable {
        final private function __construct() {}
        function encode() {}
        final public function limit($limit) {}
        final public function skip($skip) {}
        final public function consistency($consistency) {}
        final public function order($order) {}
        final public function bbox($bbox) {}
        final public function startRange($range) {}
        final public function endRange($range) {}
        final public function custom($customParameters) {}
    }
    final class N1qlQuery {
        const NOT_BOUNDED = 1;
        const REQUEST_PLUS = 2;
        const STATEMENT_PLUS = 3;
        final private function __construct() {}
        final public static function fromString($statement) {}
        final public function adhoc($adhoc) {}
        final public function crossBucket($crossBucket) {}
        final public function positionalParams($params) {}
        final public function namedParams($params) {}
        final public function consistency($consistency) {}
        final public function consistentWith($state) {}
    }
    final class N1qlIndex {
        const UNSPECIFIED = 0;
        const GSI = 1;
        const VIEW = 2;
        final private function __construct() {}
        public $name;
        public $isPrimary;
        public $type;
        public $state;
        public $keyspace;
        public $namespace;
        public $fields;
        public $condition;
    }
    final class LookupInBuilder {
        final private function __construct() {}
        final public function get($path) {}
        final public function exists($path) {}
        final public function execute() {}
    }
    final class MutateInBuilder {
        final private function __construct() {}
        final public function insert($path, $value, $createParents = false) {}
        final public function upsert($path, $value, $createParents = false) {}
        final public function replace($path, $value) {}
        final public function remove($path) {}
        final public function arrayPrepend($path, $value, $createParents = false) {}
        final public function arrayPrependAll($path, $values, $createParents = false) {}
        final public function arrayAppend($path, $value, $createParents = false) {}
        final public function arrayAppendAll($path, $values, $createParents = false) {}
        final public function arrayInsert($path, $value) {}
        final public function arrayInsertAll($path, $values) {}
        final public function arrayAddUnique($path, $value, $createParents = false) {}
        final public function counter($path, $delta, $createParents = false) {}
        final public function execute() {}
    }
    final class SearchQuery implements \JsonSerializable {
        const HIGHLIGHT_HTML = 'html';
        const HIGHLIGHT_ANSI = 'ansi';
        const HIGHLIGHT_SIMPLE = 'simple';
        final public static function boolean() {}
        final public static function dateRange() {}
        final public static function booleanField($value) {}
        final public static function conjuncts(...$queries) {}
        final public static function disjuncts(...$queries) {}
        final public static function docId(...$documentIds) {}
        final public static function match($match) {}
        final public static function matchAll() {}
        final public static function matchNone() {}
        final public static function matchPhrase(...$terms) {}
        final public static function prefix($prefix) {}
        final public static function queryString($queryString) {}
        final public static function regexp($regexp) {}
        final public static function term($term) {}
        final public static function wildcard($wildcard) {}
        final public static function termFacet($field, $limit) {}
        final public static function dateRangeFacet($field, $limit) {}
        final public static function numericRangeFacet($field, $limit) {}
        final public function __construct($indexName, $queryPart) {}
        final public function jsonSerialize() {}
        final public function limit($limit) {}
        final public function skip($skip) {}
        final public function explain($explain) {}
        final public function serverSideTimeout($serverSideTimeout) {}
        final public function consistentWith($state) {}
        final public function fields(...$fields) {}
        final public function highlight($style, ...$fields) {}
        final public function sort(...$sort) {}
        final public function addFacet($name, $facet) {}
    }
    interface SearchQueryPart {}
    final class BooleanFieldSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
    }
    final class BooleanSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function must(...$queries) {}
        final public function mustNot(...$queries) {}
        final public function should(...$queries) {}
    }
    final class ConjunctionSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function every(...$queries) {}
    }
    final class DisjunctionSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function either(...$queries) {}
        final public function min($min) {}
    }
    final class DateRangeSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function start($start, $inclusive = true) {}
        final public function end($end, $inclusive = false) {}
        final public function dateTimeParser($dateTimeParser) {}
    }
    final class NumericRangeSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function min($min, $inclusive = true) {}
        final public function max($max, $inclusive = false) {}
    }
    final class DocIdSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function docIds(...$documentIds) {}
    }
    final class MatchAllSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
    }
    final class MatchNoneSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
    }
    final class MatchPhraseSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function analyzer($analyzer) {}
    }
    final class MatchSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function analyzer($analyzer) {}
        final public function prefixLength($prefixLength) {}
        final public function fuzziness($fuzziness) {}
    }
    final class PhraseSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
    }
    final class RegexpSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
    }
    final class WildcardSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
    }
    final class PrefixSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
    }
    final class QueryStringSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
    }
    final class TermSearchQuery implements \JsonSerializable, SearchQueryPart {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function boost($boost) {}
        final public function field($field) {}
        final public function prefixLength($prefixLength) {}
        final public function fuzziness($fuzziness) {}
    }
    interface SearchFacet {}
    final class TermSearchFacet implements \JsonSerializable, SearchFacet {
        final private function __construct() {}
        final public function jsonSerialize() {}
    }
    final class DateRangeSearchFacet implements \JsonSerializable, SearchFacet {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function addRange($name, $start, $end) {}
    }
    final class NumericRangeSearchFacet implements \JsonSerializable, SearchFacet {
        final private function __construct() {}
        final public function jsonSerialize() {}
        final public function addRange($name, $min, $max) {}
    }
    final class AnalyticsQuery {
        final private function __construct() {}
        final public static function fromString($statement) {}
        final public function hostname($hostname) {}
    }
}
