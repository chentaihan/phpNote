<?php
define('APC_LIST_ACTIVE', 1);
define('APC_LIST_DELETED', 2);
define('APC_ITER_TYPE', 1);
define('APC_ITER_KEY', 2);
define('APC_ITER_FILENAME', 4);
define('APC_ITER_DEVICE', 8);
define('APC_ITER_INODE', 16);
define('APC_ITER_VALUE', 32);
define('APC_ITER_MD5', 64);
define('APC_ITER_NUM_HITS', 128);
define('APC_ITER_MTIME', 256);
define('APC_ITER_CTIME', 512);
define('APC_ITER_DTIME', 1024);
define('APC_ITER_ATIME', 2048);
define('APC_ITER_REFCOUNT', 4096);
define('APC_ITER_MEM_SIZE', 8192);
define('APC_ITER_TTL', 16384);
define('APC_ITER_NONE', 0);
define('APC_ITER_ALL', -1);
function apcu_clear_cache(){}
function apcu_sma_info($limited = false){}
function apcu_store($key, $var, $ttl = 0){}
function apcu_fetch($key, &$success = null){}
function apcu_delete($key){}
function apcu_add($key, $var, $ttl = 0){}
function apcu_exists($keys){}
function apcu_inc($key, $step = 1, &$success = null){}
function apcu_dec($key, $step = 1, &$success = null){}
function apcu_cas($key, $old, $new){}
function apcu_entry($key, callable $generator, $ttl = 0){}
function apcu_cache_info($limited = false){}
class APCUIterator implements Iterator
{
	public function __construct($search = null, $format = APC_ITER_ALL, $chunk_size = 100, $list = APC_LIST_ACTIVE){}
	public function rewind(){}
	public function valid(){}
	public function current(){}
	public function key(){}
	public function next(){}
	public function getTotalHits(){}
	public function getTotalSize(){}
	public function getTotalCount(){}
}
