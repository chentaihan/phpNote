<?php
function gmp_init ($number, $base = 0) {}
function gmp_intval ($gmpnumber) {}
function gmp_random_seed ($seed ) {}
function gmp_strval ($gmpnumber, $base = 10) {}
function gmp_add ($a, $b) {}
function gmp_sub ($a, $b) {}
function gmp_mul ($a, $b) {}
function gmp_div_qr ($n, $d, $round = GMP_ROUND_ZERO) {}
function gmp_div_q ($a, $b, $round = GMP_ROUND_ZERO) {}
function gmp_div_r ($n, $d, $round = GMP_ROUND_ZERO) {}
function gmp_div ($a, $b, $round = GMP_ROUND_ZERO) {}
function gmp_mod ($n, $d) {}
function gmp_divexact ($n, $d) {}
function gmp_neg ($a) {}
function gmp_abs ($a) {}
function gmp_fact ($a) {}
function gmp_sqrt ($a) {}
function gmp_sqrtrem ($a) {}
function gmp_pow ($base, $exp) {}
function gmp_powm ($base, $exp, $mod) {}
function gmp_perfect_square ($a) {}
function gmp_prob_prime ($a, $reps = 10) {}
function gmp_gcd ($a, $b) {}
function gmp_gcdext ($a, $b) {}
function gmp_invert ($a, $b) {}
function gmp_jacobi ($a, $p) {}
function gmp_legendre ($a, $p) {}
function gmp_cmp ($a, $b) {}
function gmp_sign ($a) {}
function gmp_random ($limiter = 20) {}
function gmp_and ($a, $b) {}
function gmp_or ($a, $b) {}
function gmp_com ($a) {}
function gmp_xor ($a, $b) {}
function gmp_setbit (&$a, $index, $set_clear = true) {}
function gmp_clrbit (&$a, $index) {}
function gmp_scan0 ($a, $start) {}
function gmp_scan1 ($a, $start) {}
function gmp_testbit ($a, $index) {}
function gmp_popcount ($a) {}
function gmp_hamdist ($a, $b) {}
function gmp_import ($data, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN) {}
function gmp_export (GMP $gmpnumber, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN) {}
function gmp_root (GMP $a, $nth) {}
function gmp_rootrem (GMP $a, $nth) {}
function gmp_nextprime ($a) {}
define ('GMP_ROUND_ZERO', 0);
define ('GMP_ROUND_PLUSINF', 1);
define ('GMP_ROUND_MINUSINF', 2);
define ('GMP_MSW_FIRST', 1);
define ('GMP_LSW_FIRST', 2);
define ('GMP_LITTLE_ENDIAN', 4);
define ('GMP_BIG_ENDIAN', 8);
define ('GMP_NATIVE_ENDIAN', 16);
define ('GMP_VERSION', "");
class GMP implements Serializable {
    public function serialize() {}
    public function unserialize($serialized) {}
}
?>
