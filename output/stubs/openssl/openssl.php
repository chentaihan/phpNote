<?php
function openssl_pkey_free($key) { }
function openssl_pkey_new(array $configargs = null) { }
function openssl_pkey_export($key, &$out, $passphrase = null, array $configargs = null) { }
function openssl_pkey_export_to_file($key, $outfilename, $passphrase = null, array $configargs = null) { }
function openssl_pkey_get_private($key, $passphrase = "") { }
function openssl_pkey_get_public($certificate) { }
function openssl_pkey_get_details($key) { }
function openssl_free_key($key_identifier) { }
function openssl_get_privatekey($key, $passphrase) { }
function openssl_get_publickey($certificate) { }
function openssl_spki_new(&$privkey, &$challenge, $algorithm = 0) {}
function openssl_spki_verify(&$spkac) {}
function openssl_spki_export_challenge (&$spkac ) {}
function openssl_spki_export (&$spkac ) {}
function openssl_x509_read($x509certdata) { }
function openssl_x509_fingerprint($x509, $type, $binary) {}
function openssl_x509_free($x509cert) { }
function openssl_x509_parse($x509cert, $shortnames = true) { }
function openssl_x509_checkpurpose($x509cert, $purpose, array $cainfo = null, $untrustedfile = null) { }
function openssl_x509_check_private_key($cert, $key) { }
function openssl_x509_export($x509, &$output, $notext = true) { }
function openssl_x509_export_to_file($x509, $outfilename, $notext = true) { }
function openssl_pkcs12_export($x509, &$out, $priv_key, $pass, array $args = null) { }
function openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass, array $args = null) { }
function openssl_pkcs12_read($pkcs12, array &$certs, $pass) { }
function openssl_csr_new(array $dn, &$privkey, array $configargs = null, array $extraattribs = null) { }
function openssl_csr_export($csr, &$out, $notext = true) { }
function openssl_csr_export_to_file($csr, $outfilename, $notext = true) { }
function openssl_csr_sign($csr, $cacert, $priv_key, $days, array $configargs = null, $serial = 0) { }
function openssl_csr_get_subject($csr, $use_shortnames = true) { }
function openssl_csr_get_public_key($csr, $use_shortnames = true) { }
function openssl_digest($data, $method, $raw_output = false) { }
function openssl_encrypt($data, $method, $password, $options = 0, $iv = "") { }
function openssl_decrypt($data, $method, $password, $options = 1, $iv = "") { }
function openssl_cipher_iv_length($method) { }
function openssl_sign($data, &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1) { }
function openssl_verify($data, $signature, $pub_key_id, $signature_alg = OPENSSL_ALGO_SHA1) { }
function openssl_seal($data, &$sealed_data, array &$env_keys, array $pub_key_ids, $method = null) { }
function openssl_open($sealed_data, &$open_data, $env_key, $priv_key_id, $method = null) { }
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algorithm) { }
function openssl_pkcs7_verify($filename, $flags, $outfilename = null, array $cainfo = null, $extracerts = null, $content = null) { }
function openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert, $recipkey = null) { }
function openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, array $headers, $flags = PKCS7_DETACHED, $extracerts = null) { }
function openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, array $headers, $flags = 0, $cipherid = OPENSSL_CIPHER_RC2_40) { }
function openssl_private_encrypt($data, &$crypted, $key, $padding = OPENSSL_PKCS1_PADDING) { }
function openssl_private_decrypt($data, &$decrypted, $key, $padding = OPENSSL_PKCS1_PADDING) { }
function openssl_public_encrypt($data, &$crypted, $key, $padding = OPENSSL_PKCS1_PADDING) { }
function openssl_public_decrypt($data, &$decrypted, $key, $padding = OPENSSL_PKCS1_PADDING) { }
function openssl_get_md_methods($aliases = false) { }
function openssl_get_cipher_methods($aliases = false) { }
function openssl_dh_compute_key($pub_key, $dh_key) { }
function openssl_random_pseudo_bytes($length, &$crypto_strong = null) { }
function openssl_error_string() { }
function openssl_get_cert_locations() { }
define ('OPENSSL_VERSION_TEXT', "OpenSSL 1.0.0e 6 Sep 2011");
define ('OPENSSL_VERSION_NUMBER', 268435551);
define ('X509_PURPOSE_SSL_CLIENT', 1);
define ('X509_PURPOSE_SSL_SERVER', 2);
define ('X509_PURPOSE_NS_SSL_SERVER', 3);
define ('X509_PURPOSE_SMIME_SIGN', 4);
define ('X509_PURPOSE_SMIME_ENCRYPT', 5);
define ('X509_PURPOSE_CRL_SIGN', 6);
define ('X509_PURPOSE_ANY', 7);
define ('OPENSSL_ALGO_SHA1', 1);
define ('OPENSSL_ALGO_MD5', 2);
define ('OPENSSL_ALGO_MD4', 3);
define ('OPENSSL_ALGO_MD2', 4);
define ('OPENSSL_ALGO_DSS1', 5);
define ('OPENSSL_ALGO_SHA224', 6);
define ('OPENSSL_ALGO_SHA256', 7);
define ('OPENSSL_ALGO_SHA384', 8);
define ('OPENSSL_ALGO_SHA512', 9);
define ('OPENSSL_ALGO_RMD160', 10);
define ('PKCS7_DETACHED', 64);
define ('PKCS7_TEXT', 1);
define ('PKCS7_NOINTERN', 16);
define ('PKCS7_NOVERIFY', 32);
define ('PKCS7_NOCHAIN', 8);
define ('PKCS7_NOCERTS', 2);
define ('PKCS7_NOATTR', 256);
define ('PKCS7_BINARY', 128);
define ('PKCS7_NOSIGS', 4);
define ('OPENSSL_PKCS1_PADDING', 1);
define ('OPENSSL_SSLV23_PADDING', 2);
define ('OPENSSL_NO_PADDING', 3);
define ('OPENSSL_PKCS1_OAEP_PADDING', 4);
define ('OPENSSL_CIPHER_RC2_40', 0);
define ('OPENSSL_CIPHER_RC2_128', 1);
define ('OPENSSL_CIPHER_RC2_64', 2);
define ('OPENSSL_CIPHER_DES', 3);
define ('OPENSSL_CIPHER_3DES', 4);
define ('OPENSSL_KEYTYPE_RSA', 0);
define ('OPENSSL_KEYTYPE_DSA', 1);
define ('OPENSSL_KEYTYPE_DH', 2);
define ('OPENSSL_KEYTYPE_EC', 3);
define ('OPENSSL_TLSEXT_SERVER_NAME', 1);
define('OPENSSL_CIPHER_AES_128_CBC', 5);
define('OPENSSL_CIPHER_AES_192_CBC', 6);
define('OPENSSL_CIPHER_AES_256_CBC', 7);
define('OPENSSL_RAW_DATA', 1);
define('OPENSSL_ZERO_PADDING', 2);
define('OPENSSL_DEFAULT_STREAM_CIPHERS', "ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:" .
"ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:" .
"DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:" .
"ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:" .
"ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:" .
"DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:" .
"AES256-GCM-SHA384:AES128:AES256:HIGH:!SSLv2:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!RC4:!ADH");
define ('STREAM_CRYPTO_METHOD_SSLv2_CLIENT', 0);
define ('STREAM_CRYPTO_METHOD_SSLv3_CLIENT', 1);
define ('STREAM_CRYPTO_METHOD_SSLv23_CLIENT', 2);
define ('STREAM_CRYPTO_METHOD_TLS_CLIENT', 3);
define ('STREAM_CRYPTO_METHOD_SSLv2_SERVER', 4);
define ('STREAM_CRYPTO_METHOD_SSLv3_SERVER', 5);
define ('STREAM_CRYPTO_METHOD_SSLv23_SERVER', 6);
define ('STREAM_CRYPTO_METHOD_TLS_SERVER', 7);
define("STREAM_CRYPTO_METHOD_ANY_CLIENT", 63);
define("STREAM_CRYPTO_METHOD_ANY_SERVER", 62);
define("STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT", 9);
define("STREAM_CRYPTO_METHOD_TLSv1_0_SERVER", 8);
define("STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT", 17);
define("STREAM_CRYPTO_METHOD_TLSv1_1_SERVER", 16);
define("STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT", 33);
define("STREAM_CRYPTO_METHOD_TLSv1_2_SERVER", 32);
