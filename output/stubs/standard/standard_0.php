<?php
class __PHP_Incomplete_Class  {
}
class php_user_filter  {
        public $filtername;
        public $params;
    public function filter($in, $out, &$consumed, $closing)
    {
    }
    public function onCreate()
    {
    }
    public function onClose()
    {
    }
}
class Directory  {
    public $path;
    public $handle;
    public function close ( $dir_handle ) {}
    public function rewind ( $dir_handle ) {}
    public function read ( $dir_handle) { }
}
function constant ($name) {}
function bin2hex ($str) {}
function sleep ($seconds) {}
function usleep ($micro_seconds) {}
function time_nanosleep ($seconds, $nanoseconds) {}
function time_sleep_until ($timestamp) {}
function strptime ($date, $format) {}
function flush () {}
function wordwrap ($str, $width = 75, $break = "\n", $cut = false) {}
function htmlspecialchars ($string, $flags = ENT_COMPAT, $encoding = 'UTF-8', $double_encode = true) {}
function htmlentities ($string, $quote_style = null, $charset = null, $double_encode = true) {}
function html_entity_decode ($string, $quote_style = null, $charset = null) {}
function htmlspecialchars_decode ($string, $quote_style = null) {}
function get_html_translation_table ($table = null, $quote_style = null) {}
function sha1 ($str, $raw_output = null) {}
function sha1_file ($filename, $raw_output = null) {}
function md5 ($str, $raw_output = null) {}
function md5_file ($filename, $raw_output = null) {}
function crc32 ($str) {}
function iptcparse ($iptcblock) {}
function iptcembed ($iptcdata, $jpeg_file_name, $spool = null) {}
function getimagesize ($filename, array &$imageinfo = null) {}
function imageaffine($image, $affine, $clip = null) {}
function imageaffinematrixconcat(array $m1, array $m2) {}
function imageaffinematrixget ($type, $options = null) {}
function imagecrop ($image, $rect) {}
function imagecropauto ($image, $mode = -1, $threshold = .5, $color = -1) {}
function imageflip ($image, $mode) {}
function imagepalettetotruecolor ($image) {}
function imagescale ($image, $new_width, $new_height = -1, $mode = IMG_BILINEAR_FIXED) {}
function imagesetinterpolation ($image, $method = IMG_BILINEAR_FIXED) {}
function image_type_to_mime_type ($imagetype) {}
function image_type_to_extension ($imagetype, $include_dot = null) {}
function phpinfo ($what = null) {}
function phpversion ($extension = null) {}
function phpcredits ($flag = null) {}
function php_logo_guid () {}
function php_real_logo_guid () {}
function php_egg_logo_guid () {}
function zend_logo_guid () {}
function php_sapi_name () {}
function php_uname ($mode = null) {}
function php_ini_scanned_files () {}
function php_ini_loaded_file () {}
function strnatcmp ($str1, $str2) {}
function strnatcasecmp ($str1, $str2) {}
function substr_count ($haystack, $needle, $offset = null, $length = null) {}
function strspn ($subject, $mask, $start = null, $length = null) {}
function strcspn ($str1, $str2, $start = null, $length = null) {}
function strtok ($str = null, $token) {}
