<?php
function readgzfile ($filename, $use_include_path = 0) {}
function gzrewind ($zp) {}
function gzclose ($zp) {}
function gzeof ($zp) {}
function gzgetc ($zp) {}
function gzgets ($zp, $length) {}
function gzgetss ($zp, $length, $allowable_tags = null) {}
function gzread ($zp, $length) {}
function gzopen ($filename, $mode, $use_include_path = 0) {}
function gzpassthru ($zp) {}
function gzseek ($zp, $offset, $whence = SEEK_SET) {}
function gztell ($zp) {}
function gzwrite ($zp, $string, $length = null) {}
function gzputs ($fp, $str, $length) {}
function gzfile ($filename, $use_include_path = 0) {}
function gzcompress ($data, $level = -1, $encoding = ZLIB_ENCODING_DEFLATE) {}
function gzuncompress ($data, $length = 0) {}
function gzdeflate ($data, $level = -1, $encoding = ZLIB_ENCODING_RAW) {}
function gzinflate ($data, $length = 0) {}
function gzencode ($data, $level = -1, $encoding_mode = FORCE_GZIP) {}
function gzdecode ($data, $length = null) {}
function zlib_encode ($data, $encoding, $level) {}
function zlib_decode ($data, $max_decoded_len = null) {}
function zlib_get_coding_type () {}
function ob_gzhandler ($buffer, $mode) {}
function deflate_init ($encoding, $options = array()) {}
function deflate_add ($context, $data, $flush_mode = ZLIB_SYNC_FLUSH) {}
function inflate_init ($encoding, $options = array()) {}
function inflate_add ($context, $encoded_data, $flush_mode = ZLIB_SYNC_FLUSH) {}
define ('FORCE_GZIP', 31);
define ('FORCE_DEFLATE', 15);
define ('ZLIB_ENCODING_RAW', -15);
define ('ZLIB_ENCODING_GZIP', 31);
define ('ZLIB_ENCODING_DEFLATE', 15);
define ('ZLIB_NO_FLUSH', 0);
define ('ZLIB_PARTIAL_FLUSH', 1);
define ('ZLIB_SYNC_FLUSH', 2);
define ('ZLIB_FULL_FLUSH', 3);
define ('ZLIB_BLOCK', 5);
define ('ZLIB_FINISH', 4);
define ('ZLIB_FILTERED', 1);
define ('ZLIB_HUFFMAN_ONLY', 2);
define ('ZLIB_RLE', 3);
define ('ZLIB_FIXED', 4);
define ('ZLIB_DEFAULT_STRATEGY', 0);
define ('ZLIB_VERSION', 'zlib_version_string'); // This is set to the zlib version
define ('ZLIB_VERNUM', 'zlib_version_string'); // This is set to the zlib version
