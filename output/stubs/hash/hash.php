<?php
function hash ($algo, $data, $raw_output = false) {}
function hash_equals($known_string, $user_string) {}
function hash_file ($algo, $filename, $raw_output = false) {}
function hash_hmac ($algo, $data, $key, $raw_output = false) {}
function hash_hmac_file ($algo, $filename, $key, $raw_output = false) {}
function hash_init ($algo, $options = 0, $key = null) {}
function hash_update ($context, $data) {}
function hash_update_stream ($context, $handle, $length = -1) {}
function hash_update_file ($hcontext, $filename, $scontext = null) {}
function hash_final ($context, $raw_output = false) {}
function hash_copy ($context) {}
function hash_algos () {}
function hash_pbkdf2 ($algo, $password, $salt, $iterations, $length, $raw_output) {}
function mhash_keygen_s2k ($hash, $password, $salt, $bytes) {}
function mhash_get_block_size ($hash) {}
function mhash_get_hash_name ($hash) {}
function mhash_count () {}
function mhash ($hash, $data, $key = null) {}
define ('HASH_HMAC', 1);
define ('MHASH_CRC32', 0);
define ('MHASH_MD5', 1);
define ('MHASH_SHA1', 2);
define ('MHASH_HAVAL256', 3);
define ('MHASH_RIPEMD160', 5);
define ('MHASH_TIGER', 7);
define ('MHASH_GOST', 8);
define ('MHASH_CRC32B', 9);
define ('MHASH_HAVAL224', 10);
define ('MHASH_HAVAL192', 11);
define ('MHASH_HAVAL160', 12);
define ('MHASH_HAVAL128', 13);
define ('MHASH_TIGER128', 14);
define ('MHASH_TIGER160', 15);
define ('MHASH_MD4', 16);
define ('MHASH_SHA256', 17);
define ('MHASH_ADLER32', 18);
define ('MHASH_SHA224', 19);
define ('MHASH_SHA512', 20);
define ('MHASH_SHA384', 21);
define ('MHASH_WHIRLPOOL', 22);
define ('MHASH_RIPEMD128', 23);
define ('MHASH_RIPEMD256', 24);
define ('MHASH_RIPEMD320', 25);
define ('MHASH_SNEFRU256', 27);
define ('MHASH_MD2', 28);
define ('MHASH_FNV132', 29);
define ('MHASH_FNV1A32', 30);
define ('MHASH_FNV164', 31);
define ('MHASH_FNV1A64', 32);
define ('MHASH_JOAAT', 33);
?>
