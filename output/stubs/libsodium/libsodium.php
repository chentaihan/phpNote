<?php
declare(strict_types=1);
namespace Sodium;
    const CRYPTO_AEAD_AES256GCM_KEYBYTES = 32;
    const CRYPTO_AEAD_AES256GCM_NSECBYTES = 0;
    const CRYPTO_AEAD_AES256GCM_NPUBBYTES = 12;
    const CRYPTO_AEAD_AES256GCM_ABYTES = 16;
    const CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES = 32;
    const CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES = 0;
    const CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES = 8;
    const CRYPTO_AEAD_CHACHA20POLY1305_ABYTES = 16;
    const CRYPTO_AUTH_BYTES = 32;
    const CRYPTO_AUTH_KEYBYTES = 32;
    const CRYPTO_BOX_SEALBYTES = 16;
    const CRYPTO_BOX_SECRETKEYBYTES = 32;
    const CRYPTO_BOX_PUBLICKEYBYTES = 32;
    const CRYPTO_BOX_KEYPAIRBYTES = 64;
    const CRYPTO_BOX_MACBYTES = 16;
    const CRYPTO_BOX_NONCEBYTES = 24;
    const CRYPTO_BOX_SEEDBYTES = 32;
    const CRYPTO_KX_BYTES = 32;
    const CRYPTO_KX_PUBLICKEYBYTES = 32;
    const CRYPTO_KX_SECRETKEYBYTES = 32;
    const CRYPTO_GENERICHASH_BYTES = 32;
    const CRYPTO_GENERICHASH_BYTES_MIN = 16;
    const CRYPTO_GENERICHASH_BYTES_MAX = 64;
    const CRYPTO_GENERICHASH_KEYBYTES = 32;
    const CRYPTO_GENERICHASH_KEYBYTES_MIN = 16;
    const CRYPTO_GENERICHASH_KEYBYTES_MAX = 64;
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES = 32;
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX = '$7$';
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE = 534288;
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE = 16777216;
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE = 33554432;
    const CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE = 1073741824;
    const CRYPTO_SCALARMULT_BYTES = 32;
    const CRYPTO_SCALARMULT_SCALARBYTES = 32;
    const CRYPTO_SHORTHASH_BYTES = 8;
    const CRYPTO_SHORTHASH_KEYBYTES = 16;
    const CRYPTO_SECRETBOX_KEYBYTES = 32;
    const CRYPTO_SECRETBOX_MACBYTES = 16;
    const CRYPTO_SECRETBOX_NONCEBYTES = 24;
    const CRYPTO_SIGN_BYTES = 64;
    const CRYPTO_SIGN_SEEDBYTES = 32;
    const CRYPTO_SIGN_PUBLICKEYBYTES = 32;
    const CRYPTO_SIGN_SECRETKEYBYTES = 64;
    const CRYPTO_SIGN_KEYPAIRBYTES = 96;
    const CRYPTO_STREAM_KEYBYTES = 32;
    const CRYPTO_STREAM_NONCEBYTES = 24;
    const CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE = 4;
    const CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE = 33554432;
    const CRYPTO_PWHASH_OPSLIMIT_MODERATE = 6; 
    const CRYPTO_PWHASH_MEMLIMIT_MODERATE = 134217728;
    const CRYPTO_PWHASH_OPSLIMIT_SENSITIVE = 8;
    const CRYPTO_PWHASH_MEMLIMIT_SENSITIVE = 536870912;
    function crypto_aead_aes256gcm_is_available(): bool
    {
        return false;
    }
    function crypto_aead_aes256gcm_decrypt(
        string $msg,
        string $nonce,
        string $key,
        string $ad = ''
    ): string {
        unset($msg, $nonce, $key, $ad);
        return '';
    }
    function crypto_aead_aes256gcm_encrypt(
        string $msg,
        string $nonce,
        string $key,
        string $ad = ''
    ): string {
        unset($msg, $nonce, $key, $ad);
        return '';
    }
    function crypto_aead_chacha20poly1305_decrypt(
        string $msg,
        string $nonce,
        string $key,
        string $ad = ''
    ): string {
        unset($msg, $nonce, $key, $ad);
        return '';
    }
    function crypto_aead_chacha20poly1305_encrypt(
        string $msg,
        string $nonce,
        string $key,
        string $ad = ''
    ): string {
        unset($msg, $nonce, $key, $ad);
        return '';
    }
    function crypto_auth(
        string $msg,
        string $key
    ): string {
        unset($msg, $key);
        return '';
    }
    function crypto_auth_verify(
        string $mac,
        string $msg,
        string $key
    ): bool {
        unset($mac, $msg, $key);
        return false;
    }
    function crypto_box(
        string $msg,
        string $nonce,
        string $keypair
    ): string {
        unset($msg, $nonce, $keypair);
        return '';
    }
    function crypto_box_keypair(): string {
        return '';
    }
    function crypto_box_seed_keypair(
        string $seed
    ): string {
        unset($seed);
        return '';
    }
    function crypto_box_keypair_from_secretkey_and_publickey(
        string $secretkey,
        string $publickey
    ): string {
        unset($secretkey, $publickey);
        return '';
    }
    function crypto_box_open(
        string $msg,
        string $nonce,
        string $keypair
    ): string {
        unset($msg, $nonce, $keypair);
        return '';
    }
    function crypto_box_publickey(
        string $keypair
    ): string {
        unset($keypair);
        return '';
    }
    function crypto_box_publickey_from_secretkey(
        string $secretkey
    ): string {
        unset($secretkey);
        return '';
    }
    function crypto_box_seal(
        string $message,
        string $publickey
    ): string {
        unset($message, $publickey);
        return '';
    }
    function crypto_box_seal_open(
        string $encrypted,
        string $keypair
    ): string {
        unset($encrypted, $keypair);
        return '';
    }
    function crypto_box_secretkey(string $keypair): string
    {
        unset($keypair);
        return '';
    }
    function crypto_kx(
        string $secretkey,
        string $publickey,
        string $client_publickey,
        string $server_publickey
    ): string {
        unset($secretkey, $publickey, $client_publickey, $server_publickey);
        return '';
    }
    function crypto_generichash(
        string $input,
        string $key = '',
        int $length = 32
    ): string{
        unset($input, $key, $length);
        return '';
    }
    function crypto_generichash_init(
        string $key = '',
        int $length = 32
    ): string {
        unset($key, $length);
        return '';
    }
    function crypto_generichash_update(
        string &$hashState,
        string $append
    ): bool {
        unset($hashState, $append);
        return '';
    }
    function crypto_generichash_final(
        string $state,
        int $length = 32
    ): string {
        unset($state, $length);
        return '';
    }
    function crypto_pwhash(
        int $out_len,
        string $passwd,
        string $salt,
        int $opslimit,
        int $memlimit
    ): string {
        unset($out_len, $passwd, $salt, $opslimit, $memlimit);
        return '';
    }
    function crypto_pwhash_str(
        string $passwd,
        int $opslimit,
        int $memlimit
    ): string {
        unset($passwd, $opslimit, $memlimit);
        return '';
    }
    function crypto_pwhash_str_verify(
        string $hash,
        string $passwd
    ): bool {
        unset($hash, $passwd);
        return false;
    }
    function crypto_pwhash_scryptsalsa208sha256(
        int $out_len,
        string $passwd,
        string $salt,
        int $opslimit,
        int $memlimit
    ): string {
        unset($out_len, $passwd, $salt, $opslimit, $memlimit);
        return '';
    }
    function crypto_pwhash_scryptsalsa208sha256_str(
        string $passwd,
        int $opslimit,
        int $memlimit
    ): string {
        unset($passwd, $opslimit, $memlimit);
        return '';
    }
    function crypto_pwhash_scryptsalsa208sha256_str_verify(
        string $hash,
        string $passwd
    ): bool {
        unset($hash, $passwd);
        return false;
    }
    function crypto_scalarmult(
        string $ecdhA,
        string $ecdhB
    ): string {
        unset($ecdhA, $ecdhB);
        return '';
    }
    function crypto_secretbox(
        string $plaintext,
        string $nonce,
        string $key
    ): string {
        unset($plaintext, $nonce, $key);
        return '';
    }
    function crypto_secretbox_open(
        string $ciphertext,
        string $nonce,
        string $key
    ): string {
        unset($ciphertext, $nonce, $key);
        return '';
    }
    function crypto_shorthash(
        string $message,
        string $key
    ): string {
        unset($message, $key);
        return '';
    }
    function crypto_sign(
        string $message,
        string $secretkey
    ): string {
        unset($message, $secretkey);
        return '';
    }
    function crypto_sign_detached(
        string $message,
        string $secretkey
    ): string {
        unset($message, $secretkey);
        return '';
    }
    function crypto_sign_ed25519_pk_to_curve25519(
        string $sign_pk
    ): string {
        unset($sign_pk);
        return '';
    }
    function crypto_sign_ed25519_sk_to_curve25519(
        string $sign_sk
    ): string {
        unset($sign_sk);
        return '';
    }
    function crypto_sign_keypair(): string
    {
        return '';
    }
    function crypto_sign_keypair_from_secretkey_and_publickey(
        string $secretkey,
        string $publickey
    ): string {
        unset($secretkey, $publickey);
        return '';
    }
    function crypto_sign_open(
        string $signed_message,
        string $publickey
    ): string {
        unset($signed_message, $publickey);
        return '';
    }
    function crypto_sign_publickey(
        string $keypair
    ): string {
        unset($keypair);
        return '';
    }
    function crypto_sign_secretkey(
        string $keypair
    ): string {
        unset($keypair);
        return '';
    }
    function crypto_sign_publickey_from_secretkey(
        string $secretkey
    ): string {
        unset($secretkey);
        return '';
    }
    function crypto_sign_seed_keypair(
        string $seed
    ): string {
        unset($seed);
        return '';
    }
    function crypto_sign_verify_detached(
        string $signature,
        string $msg,
        string $publickey
    ): bool {
        unset($signature, $msg, $publickey);
        return false;
    }
    function crypto_stream(
        int $length,
        string $nonce,
        string $key
    ): string {
        unset($length, $nonce, $key);
        return '';
    }
    function crypto_stream_xor(
        string $plaintext,
        string $nonce,
        string $key
    ): string {
        unset($plaintext, $nonce, $key);
        return '';
    }
    function randombytes_buf(
        int $length
    ): string {
        unset($length);
        return '';
    }
    function randombytes_random16(): string {
        return '';
    }
    function randombytes_uniform(
        int $upperBoundNonInclusive
    ): int {
        unset($upperBoundNonInclusive);
        return 0;
    }
    function bin2hex(
        string $binary
    ): string {
        unset($binary);
        return '';
    }
    function compare(
        string $left,
        string $right
    ): int {
        unset($left, $right);
        return 0;
    }
    function hex2bin(
        string $hex
    ): string {
        unset($hex);
        return '';
    }
    function increment(
        string &$nonce
    ) {
        unset($nonce);
    }
    function add(
        string &$left,
        string $right
    ) {
        unset($left, $right);
    }
    function library_version_major(): int {
        return 0;
    }
    function library_version_minor(): int {
        return 0;
    }
    function memcmp(
        string $left,
        string $right
    ): int {
        unset($right, $left);
        return 0;
    }
    function memzero(
        string &$target
    ) {
        $target = '';
    }
    function version_string(): string {
        return 'NA';
    }
    function crypto_scalarmult_base(
        string $sk
    ): string {
        unset($sk);
        return '';
    }
