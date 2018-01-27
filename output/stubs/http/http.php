<?php
class HttpException extends Exception  {
	public $innerException;
}
class HttpRuntimeException extends HttpException  {
}
class HttpInvalidParamException extends HttpException  {
}
class HttpHeaderException extends HttpException  {
}
class HttpMalformedHeadersException extends HttpException  {
}
class HttpRequestMethodException extends HttpException  {
}
class HttpMessageTypeException extends HttpException  {
}
class HttpEncodingException extends HttpException  {
}
class HttpRequestException extends HttpException  {
}
class HttpRequestPoolException extends HttpException  {
}
class HttpSocketException extends HttpException  {
}
class HttpResponseException extends HttpException  {
}
class HttpUrlException extends HttpException  {
}
class HttpQueryStringException extends HttpException  {
}
class HttpDeflateStream  {
	const TYPE_GZIP = 16;
	const TYPE_ZLIB = 0;
	const TYPE_RAW = 32;
	const LEVEL_DEF = 0;
	const LEVEL_MIN = 1;
	const LEVEL_MAX = 9;
	const STRATEGY_DEF = 0;
	const STRATEGY_FILT = 256;
	const STRATEGY_HUFF = 512;
	const STRATEGY_RLE = 768;
	const STRATEGY_FIXED = 1024;
	const FLUSH_NONE = 0;
	const FLUSH_SYNC = 1048576;
	const FLUSH_FULL = 2097152;
	public function __construct ($flags = null) {}
	public function update ($data) {}
	public function flush ($data = null) {}
	public function finish ($data = null) {}
	public static function factory ($flags = null, $class_name = null) {}
}
class HttpInflateStream  {
	const FLUSH_NONE = 0;
	const FLUSH_SYNC = 1048576;
	const FLUSH_FULL = 2097152;
	public function __construct ($flags = null) {}
	public function update ($data) {}
	public function flush ($data = null) {}
	public function finish ($data = null) {}
	public static function factory ($flags = null, $class_name = null) {}
}
class HttpMessage implements Countable, Serializable, Iterator, Traversable {
	const TYPE_NONE = 0;
	const TYPE_REQUEST = 1;
	const TYPE_RESPONSE = 2;
	protected $type;
	protected $body;
	protected $requestMethod;
	protected $requestUrl;
	protected $responseStatus;
	protected $responseCode;
	protected $httpVersion;
	protected $headers;
	protected $parentMessage;
	public function __construct ($message = null) {}
	public function getBody () {}
	public function setBody ($body) {}
	public function getHeader ($header) {}
	public function getHeaders () {}
	public function setHeaders (sarray $header) {}
	public function addHeaders (array $headers, $append = null) {}
	public function getType () {}
	public function setType ($type) {}
	public function getInfo () {}
	public function setInfo ($http_info) {}
	public function getResponseCode () {}
	public function setResponseCode ($code) {}
	public function getResponseStatus () {}
	public function setResponseStatus ($status) {}
	public function getRequestMethod () {}
	public function setRequestMethod ($method) {}
	public function getRequestUrl () {}
	public function setRequestUrl ($url) {}
	public function getHttpVersion () {}
	public function setHttpVersion ($version) {}
	public function guessContentType ($magic_file, $magic_mode = null) {}
	public function getParentMessage () {}
	public function send () {}
	public function toString ($include_parent = null) {}
	public function toMessageTypeObject () {}
	public function count () {}
	public function serialize () {}
	public function unserialize ($serialized) {}
	public function rewind () {}
	public function valid () {}
	public function current () {}
	public function key () {}
	public function next () {}
	public function __toString () {}
	public static function factory ($raw_message = null, $class_name = null) {}
	public static function fromString ($raw_message = null, $class_name = null) {}
	public static function fromEnv ($message_type, $class_name = null) {}
	public function detach () {}
	public function prepend (HttpMessage $message, $top = null) {}
	public function reverse () {}
}
class HttpQueryString implements Serializable, ArrayAccess {
	const TYPE_BOOL = 3;
	const TYPE_INT = 1;
	const TYPE_FLOAT = 2;
	const TYPE_STRING = 6;
	const TYPE_ARRAY = 4;
	const TYPE_OBJECT = 5;
	private static $instance;
	private $queryArray;
	private $queryString;
	final public function __construct ($global = null, $add = null) {}
	public function toArray () {}
	public function toString () {}
	public function __toString () {}
	public function get ($key = null, $type = null, $defval = null, $delete = null) {}
	public function set ($params) {}
	public function mod ($params) {}
	public function getBool ($name, $defval, $delete) {}
	public function getInt ($name, $defval, $delete) {}
	public function getFloat ($name, $defval, $delete) {}
	public function getString ($name, $defval, $delete) {}
	public function getArray ($name, $defval, $delete) {}
	public function getObject ($name, $defval, $delete) {}
	public static function factory ($global, $params, $class_name) {}
	public static function singleton ($global = null) {}
	public function xlate ($ie, $oe) {}
	public function serialize()
	{}
	public function offsetGet($offset)
	{}
	public function unserialize($serialized)
	{}
	public function offsetExists($offset)
	{}
	public function offsetSet($offset, $value)
	{}
	public function offsetUnset($offset)
	{}
}
class HttpRequest  {
	const METH_GET = 1;
	const METH_HEAD = 2;
	const METH_POST = 3;
	const METH_PUT = 4;
	const METH_DELETE = 5;
	const METH_OPTIONS = 6;
	const METH_TRACE = 7;
	const METH_CONNECT = 8;
	const METH_PROPFIND = 9;
	const METH_PROPPATCH = 10;
	const METH_MKCOL = 11;
	const METH_COPY = 12;
	const METH_MOVE = 13;
	const METH_LOCK = 14;
	const METH_UNLOCK = 15;
	const METH_VERSION_CONTROL = 16;
	const METH_REPORT = 17;
	const METH_CHECKOUT = 18;
	const METH_CHECKIN = 19;
	const METH_UNCHECKOUT = 20;
	const METH_MKWORKSPACE = 21;
	const METH_UPDATE = 22;
	const METH_LABEL = 23;
	const METH_MERGE = 24;
	const METH_BASELINE_CONTROL = 25;
	const METH_MKACTIVITY = 26;
	const METH_ACL = 27;
	const VERSION_1_0 = 1;
	const VERSION_1_1 = 2;
	const VERSION_NONE = 0;
	const VERSION_ANY = 0;
	const SSL_VERSION_TLSv1 = 1;
	const SSL_VERSION_SSLv2 = 2;
	const SSL_VERSION_SSLv3 = 3;
	const SSL_VERSION_ANY = 0;
	const IPRESOLVE_V4 = 1;
	const IPRESOLVE_V6 = 2;
	const IPRESOLVE_ANY = 0;
	const AUTH_BASIC = 1;
	const AUTH_DIGEST = 2;
	const AUTH_NTLM = 8;
	const AUTH_GSSNEG = 4;
	const AUTH_ANY = -1;
	const PROXY_SOCKS4 = 4;
	const PROXY_SOCKS5 = 5;
	const PROXY_HTTP = 0;
	private $options;
	private $postFields;
	private $postFiles;
	private $responseInfo;
	private $responseMessage;
	private $responseCode;
	private $responseStatus;
	private $method;
	private $url;
	private $contentType;
	private $requestBody;
	private $queryData;
	private $putFile;
	private $putData;
	private $history;
	public $recordHistory;
	public function __construct ($url = null, $request_method = null, array $options = null ) {}
	public function setOptions (array $options = null ) {}
	public function getOptions () {}
	public function setSslOptions (array $options = null ) {}
	public function getSslOptions () {}
	public function addSslOptions (sarray $option) {}
	public function addHeaders (array $headers) {}
	public function getHeaders () {}
	public function setHeaders ( array $headers = null ) {}
	public function addCookies (array $cookies) {}
	public function getCookies () {}
	public function setCookies ( array $cookies = null ) {}
	public function enableCookies () {}
	public function resetCookies ($session_only = null) {}
	public function flushCookies () {}
	public function setMethod ($request_method) {}
	public function getMethod () {}
	public function setUrl ($url) {}
	public function getUrl () {}
	public function setContentType ($content_type) {}
	public function getContentType () {}
	public function setQueryData ($query_data) {}
	public function getQueryData () {}
	public function addQueryData (array $query_params) {}
	public function setPostFields (array $post_data) {}
	public function getPostFields () {}
	public function addPostFields (array $post_data) {}
	public function setBody ($request_body_data) {}
	public function getBody () {}
	public function addBody ($request_body_data) {}
	public function setRawPostData ($raw_post_data = null) {}
	public function getRawPostData () {}
	public function addRawPostData ($raw_post_data) {}
	public function setPostFiles (array $post_files) {}
	public function addPostFile ($name, $file, $content_type = null) {}
	public function getPostFiles () {}
	public function setPutFile ($file = null) {}
	public function getPutFile () {}
	public function setPutData ($put_data = null) {}
	public function getPutData () {}
	public function addPutData ($put_data) {}
	public function send () {}
	public function getResponseData () {}
	public function getResponseHeader ($name = null) {}
	public function getResponseCookies ($flags = null,  array $allowed_extras = null ) {}
	public function getResponseCode () {}
	public function getResponseStatus () {}
	public function getResponseBody () {}
	public function getResponseInfo ($name = null) {}
	public function getResponseMessage () {}
	public function getRawResponseMessage () {}
	public function getRequestMessage () {}
	public function getRawRequestMessage () {}
	public function getHistory () {}
	public function clearHistory () {}
	public static function factory ($url, $method, $options, $class_name) {}
	public static function get ($url, $options, &$info) {}
	public static function head ($url, $options, &$info) {}
	public static function postData ($url, $data, $options, &$info) {}
	public static function postFields ($url, $data, $options, &$info) {}
	public static function putData ($url, $data, $options, &$info) {}
	public static function putFile ($url, $file, $options, &$info) {}
	public static function putStream ($url, $stream, $options, &$info) {}
	public static function methodRegister ($method_name) {}
	public static function methodUnregister ($method) {}
	public static function methodName ($method_id) {}
	public static function methodExists ($method) {}
	public static function encodeBody ($fields, $files) {}
}
class HttpRequestDataShare implements Countable {
	private static $instance;
	public $cookie;
	public $dns;
	public $ssl;
	public $connect;
	public function __destruct () {}
	public function count () {}
	public function attach (HttpRequest $request) {}
	public function detach (HttpRequest $request) {}
	public function reset () {}
	public static function factory ($global, $class_name) {}
	public static function singleton ($global) {}
}
class HttpRequestPool implements Countable, Iterator, Traversable {
	public function __construct ( HttpRequest $request = null) {}
	public function __destruct () {}
	public function attach ( HttpRequest $request) {}
	public function detach ( HttpRequest $request ) {}
	public function send () {}
	public function reset () {}
	protected function socketPerform () {}
	protected function socketSelect () {}
	public function valid () {}
	public function current () {}
	public function key () {}
	public function next () {}
	public function rewind () {}
	public function count () {}
	public function getAttachedRequests () {}
	public function getFinishedRequests () {}
	public function enablePipelining ($enable) {}
	public function enableEvents ($enable) {}
}
class HttpResponse  {
	const REDIRECT = 0;
	const REDIRECT_PERM = 301;
	const REDIRECT_FOUND = 302;
	const REDIRECT_POST = 303;
	const REDIRECT_PROXY = 305;
	const REDIRECT_TEMP = 307;
	private static $sent;
	private static $catch;
	private static $mode;
	private static $stream;
	private static $file;
	private static $data;
	protected static $cache;
	protected static $gzip;
	protected static $eTag;
	protected static $lastModified;
	protected static $cacheControl;
	protected static $contentType;
	protected static $contentDisposition;
	protected static $bufferSize;
	protected static $throttleDelay;
	public static function setHeader ($name, $value = null, $replace = null) {}
	public static function getHeader ($name = null) {}
	public static function setETag ($etag) {}
	public static function getETag () {}
	public static function setLastModified ($timestamp) {}
	public static function getLastModified () {}
	public static function setContentDisposition ($filename, $inline = null) {}
	public static function getContentDisposition () {}
	public static function setContentType ($content_type) {}
	public static function getContentType () {}
	public static function guessContentType ($magic_file, $magic_mode = null) {}
	public static function setCache ($cache) {}
	public static function getCache () {}
	public static function setCacheControl ($control, $max_age = null, $must_revalidate = null) {}
	public static function getCacheControl () {}
	public static function setGzip ($gzip) {}
	public static function getGzip () {}
	public static function setThrottleDelay ($seconds) {}
	public static function getThrottleDelay () {}
	public static function setBufferSize ($bytes) {}
	public static function getBufferSize () {}
	public static function setData ($data) {}
	public static function getData () {}
	public static function setFile ($file) {}
	public static function getFile () {}
	public static function setStream ($stream) {}
	public static function getStream () {}
	public static function send ($clean_ob = null) {}
	public static function capture () {}
	public static function redirect ($url = null,  array $params = null , $session = null, $status = null) {}
	public static function status ($status) {}
	public static function getRequestHeaders () {}
	public static function getRequestBody () {}
	public static function getRequestBodyStream () {}
}
class HttpUtil  {
	public static function date ($timestamp) {}
	public static function buildUrl ($url, $parts, $flags, &$composed) {}
	public static function buildStr ($query, $prefix, $arg_sep) {}
	public static function negotiateLanguage ($supported, &$result) {}
	public static function negotiateCharset ($supported, &$result) {}
	public static function negotiateContentType ($supported, &$result) {}
	public static function matchModified ($last_modified, $for_range) {}
	public static function matchEtag ($plain_etag, $for_range) {}
	public static function matchRequestHeader ($header_name, $header_value, $case_sensitive) {}
	public static function parseMessage ($message_string) {}
	public static function parseHeaders ($headers_string) {}
	public static function parseCookie ($cookie_string) {}
	public static function buildCookie ($cookie_array) {}
	public static function parseParams ($param_string, $flags) {}
	public static function chunkedDecode ($encoded_string) {}
	public static function deflate ($plain, $flags) {}
	public static function inflate ($encoded) {}
	public static function support ($feature) {}
}
function http_date ($timestamp = null) {}
function http_build_url ($url = null, $parts = null, $flags = null,  array &$new_url = null ) {}
function http_build_str (array $query, $prefix = null, $arg_separator = null) {}
function http_negotiate_language (array $supported,  array &$result = null ) {}
function http_negotiate_charset (array $supported,  array &$result = null ) {}
function http_negotiate_content_type (array $supported,  array &$result = null ) {}
function http_redirect ($url = null,  array $params = null , $session = null, $status = null) {}
function http_throttle ($sec = null, $bytes = null) {}
function http_send_status ($status) {}
function http_send_last_modified ($timestamp = null) {}
function http_send_content_type ($content_type = null) {}
function http_send_content_disposition ($filename, $inline = null) {}
function http_match_modified ($timestamp = null, $for_range = null) {}
function http_match_etag ($etag, $for_range = null) {}
function http_cache_last_modified ($timestamp_or_expires = null) {}
function http_cache_etag ($etag = null) {}
function http_send_data ($data) {}
function http_send_file ($file) {}
function http_send_stream ($stream) {}
function http_chunked_decode ($encoded) {}
function http_parse_message ($message) {}
function http_parse_headers ($header) {}
function http_parse_cookie ($cookie, $flags = null,  array $allowed_extras = null ) {}
function http_build_cookie (array $cookie) {}
function http_parse_params ($param, $flags = null) {}
function http_get_request_headers () {}
function http_get_request_body () {}
function http_get_request_body_stream () {}
function http_match_request_header ($header, $value, $match_case = null) {}
function http_persistent_handles_count () {}
function http_persistent_handles_clean ($ident = null) {}
function http_persistent_handles_ident ($ident) {}
function http_get ($url, array $options = null ,  array &$info = null ) {}
function http_head ($url = null, array $options = null ,  array &$info = null ) {}
function http_post_data ($url, $data = null, array $options = null ,  array &$info = null ) {}
function http_post_fields ($url,  array $data = null ,  array $files = null , array $options = null ,  array &$info = null ) {}
function http_put_data ($url, $data = null, array $options = null ,  array &$info = null ) {}
function http_put_file ($url, $file = null, array $options = null ,  array &$info = null ) {}
function http_put_stream ($url, $stream = null, array $options = null ,  array &$info = null ) {}
function http_request ($method, $url = null, $body = null, array $options = null ,  array &$info = null ) {}
function http_request_body_encode (array $fields, array $files) {}
function http_request_method_register ($method) {}
function http_request_method_unregister ($method) {}
function http_request_method_exists ($method) {}
function http_request_method_name ($method) {}
function ob_etaghandler ($data, $mode) {}
function http_deflate ($data, $flags = null) {}
function http_inflate ($data) {}
function ob_deflatehandler ($data, $mode) {}
function ob_inflatehandler ($data, $mode) {}
function http_support ($feature = null) {}
define ('HTTP_COOKIE_PARSE_RAW', 1);
define ('HTTP_COOKIE_SECURE', 16);
define ('HTTP_COOKIE_HTTPONLY', 32);
define ('HTTP_DEFLATE_LEVEL_DEF', 0);
define ('HTTP_DEFLATE_LEVEL_MIN', 1);
define ('HTTP_DEFLATE_LEVEL_MAX', 9);
define ('HTTP_DEFLATE_TYPE_ZLIB', 0);
define ('HTTP_DEFLATE_TYPE_GZIP', 16);
define ('HTTP_DEFLATE_TYPE_RAW', 32);
define ('HTTP_DEFLATE_STRATEGY_DEF', 0);
define ('HTTP_DEFLATE_STRATEGY_FILT', 256);
define ('HTTP_DEFLATE_STRATEGY_HUFF', 512);
define ('HTTP_DEFLATE_STRATEGY_RLE', 768);
define ('HTTP_DEFLATE_STRATEGY_FIXED', 1024);
define ('HTTP_ENCODING_STREAM_FLUSH_NONE', 0);
define ('HTTP_ENCODING_STREAM_FLUSH_SYNC', 1048576);
define ('HTTP_ENCODING_STREAM_FLUSH_FULL', 2097152);
define ('HTTP_AUTH_BASIC', 1);
define ('HTTP_AUTH_DIGEST', 2);
define ('HTTP_AUTH_NTLM', 8);
define ('HTTP_AUTH_GSSNEG', 4);
define ('HTTP_AUTH_ANY', -1);
define ('HTTP_VERSION_NONE', 0);
define ('HTTP_VERSION_1_0', 1);
define ('HTTP_VERSION_1_1', 2);
define ('HTTP_VERSION_ANY', 0);
define ('HTTP_SSL_VERSION_TLSv1', 1);
define ('HTTP_SSL_VERSION_SSLv2', 2);
define ('HTTP_SSL_VERSION_SSLv3', 3);
define ('HTTP_SSL_VERSION_ANY', 0);
define ('HTTP_IPRESOLVE_V4', 1);
define ('HTTP_IPRESOLVE_V6', 2);
define ('HTTP_IPRESOLVE_ANY', 0);
define ('HTTP_PROXY_SOCKS4', 4);
define ('HTTP_PROXY_SOCKS5', 5);
define ('HTTP_PROXY_HTTP', 0);
define ('HTTP_METH_GET', 1);
define ('HTTP_METH_HEAD', 2);
define ('HTTP_METH_POST', 3);
define ('HTTP_METH_PUT', 4);
define ('HTTP_METH_DELETE', 5);
define ('HTTP_METH_OPTIONS', 6);
define ('HTTP_METH_TRACE', 7);
define ('HTTP_METH_CONNECT', 8);
define ('HTTP_METH_PROPFIND', 9);
define ('HTTP_METH_PROPPATCH', 10);
define ('HTTP_METH_MKCOL', 11);
define ('HTTP_METH_COPY', 12);
define ('HTTP_METH_MOVE', 13);
define ('HTTP_METH_LOCK', 14);
define ('HTTP_METH_UNLOCK', 15);
define ('HTTP_METH_VERSION_CONTROL', 16);
define ('HTTP_METH_REPORT', 17);
define ('HTTP_METH_CHECKOUT', 18);
define ('HTTP_METH_CHECKIN', 19);
define ('HTTP_METH_UNCHECKOUT', 20);
define ('HTTP_METH_MKWORKSPACE', 21);
define ('HTTP_METH_UPDATE', 22);
define ('HTTP_METH_LABEL', 23);
define ('HTTP_METH_MERGE', 24);
define ('HTTP_METH_BASELINE_CONTROL', 25);
define ('HTTP_METH_MKACTIVITY', 26);
define ('HTTP_METH_ACL', 27);
define ('HTTP_REDIRECT', 0);
define ('HTTP_REDIRECT_PERM', 301);
define ('HTTP_REDIRECT_FOUND', 302);
define ('HTTP_REDIRECT_POST', 303);
define ('HTTP_REDIRECT_PROXY', 305);
define ('HTTP_REDIRECT_TEMP', 307);
define ('HTTP_SUPPORT', 1);
define ('HTTP_SUPPORT_REQUESTS', 2);
define ('HTTP_SUPPORT_MAGICMIME', 4);
define ('HTTP_SUPPORT_ENCODINGS', 8);
define ('HTTP_SUPPORT_SSLREQUESTS', 32);
define ('HTTP_SUPPORT_EVENTS', 128);
define ('HTTP_PARAMS_ALLOW_COMMA', 1);
define ('HTTP_PARAMS_ALLOW_FAILURE', 2);
define ('HTTP_PARAMS_RAISE_ERROR', 4);
define ('HTTP_PARAMS_DEFAULT', 7);
define ('HTTP_URL_REPLACE', 0);
define ('HTTP_URL_JOIN_PATH', 1);
define ('HTTP_URL_JOIN_QUERY', 2);
define ('HTTP_URL_STRIP_USER', 4);
define ('HTTP_URL_STRIP_PASS', 8);
define ('HTTP_URL_STRIP_AUTH', 12);
define ('HTTP_URL_STRIP_PORT', 32);
define ('HTTP_URL_STRIP_PATH', 64);
define ('HTTP_URL_STRIP_QUERY', 128);
define ('HTTP_URL_STRIP_FRAGMENT', 256);
define ('HTTP_URL_STRIP_ALL', 492);
define ('HTTP_URL_FROM_ENV', 4096);
define ('HTTP_E_RUNTIME', 1);
define ('HTTP_E_INVALID_PARAM', 2);
define ('HTTP_E_HEADER', 3);
define ('HTTP_E_MALFORMED_HEADERS', 4);
define ('HTTP_E_REQUEST_METHOD', 5);
define ('HTTP_E_MESSAGE_TYPE', 6);
define ('HTTP_E_ENCODING', 7);
define ('HTTP_E_REQUEST', 8);
define ('HTTP_E_REQUEST_POOL', 9);
define ('HTTP_E_SOCKET', 10);
define ('HTTP_E_RESPONSE', 11);
define ('HTTP_E_URL', 12);
define ('HTTP_E_QUERYSTRING', 13);
define ('HTTP_MSG_NONE', 0);
define ('HTTP_MSG_REQUEST', 1);
define ('HTTP_MSG_RESPONSE', 2);
define ('HTTP_QUERYSTRING_TYPE_BOOL', 3);
define ('HTTP_QUERYSTRING_TYPE_INT', 1);
define ('HTTP_QUERYSTRING_TYPE_FLOAT', 2);
define ('HTTP_QUERYSTRING_TYPE_STRING', 6);
define ('HTTP_QUERYSTRING_TYPE_ARRAY', 4);
define ('HTTP_QUERYSTRING_TYPE_OBJECT', 5);
