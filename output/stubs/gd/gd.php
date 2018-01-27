<?php
function gd_info () {}
function imagearc ($image, $cx, $cy, $width, $height, $start, $end, $color) {}
function imageellipse ($image, $cx, $cy, $width, $height, $color) {}
function imagechar ($image, $font, $x, $y, $c, $color) {}
function imagecharup ($image, $font, $x, $y, $c, $color) {}
function imagecolorat ($image, $x, $y) {}
function imagecolorallocate ($image, $red, $green, $blue) {}
function imagepalettecopy ($destination, $source) {}
function imagecreatefromstring ($image) {}
function imagecolorclosest ($image, $red, $green, $blue) {}
function imagecolorclosesthwb ($image, $red, $green, $blue) {}
function imagecolordeallocate ($image, $color) {}
function imagecolorresolve ($image, $red, $green, $blue) {}
function imagecolorexact ($image, $red, $green, $blue) {}
function imagecolorset ($image, $index, $red, $green, $blue, $alpha = 0) {}
function imagecolortransparent ($image, $color = null) {}
function imagecolorstotal ($image) {}
function imagecolorsforindex ($image, $index) {}
function imagecopy ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h) {}
function imagecopymerge ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct) {}
function imagecopymergegray ($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct) {}
function imagecopyresized ($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {}
function imagecreate ($width, $height) {}
function imagecreatetruecolor ($width, $height) {}
function imageistruecolor ($image) {}
function imagetruecolortopalette ($image, $dither, $ncolors) {}
function imagesetthickness ($image, $thickness) {}
function imagefilledarc ($image, $cx, $cy, $width, $height, $start, $end, $color, $style) {}
function imagefilledellipse ($image, $cx, $cy, $width, $height, $color) {}
function imagealphablending ($image, $blendmode) {}
function imagesavealpha ($image, $saveflag) {}
function imagecolorallocatealpha ($image, $red, $green, $blue, $alpha) {}
function imagecolorresolvealpha ($image, $red, $green, $blue, $alpha) {}
function imagecolorclosestalpha ($image, $red, $green, $blue, $alpha) {}
function imagecolorexactalpha ($image, $red, $green, $blue, $alpha) {}
function imagecopyresampled ($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {}
function imagerotate ($image, $angle, $bgd_color, $ignore_transparent = null) {}
function imageantialias ($image, $enabled) {}
function imagesettile ($image, $tile) {}
function imagesetbrush ($image, $brush) {}
function imagesetstyle ($image, array $style) {}
function imagecreatefrompng ($filename) {}
function imagecreatefromgif ($filename) {}
function imagecreatefromjpeg ($filename) {}
function imagecreatefromwbmp ($filename) {}
function imagecreatefromxbm ($filename) {}
function imagecreatefromxpm ($filename) {}
function imagecreatefromgd ($filename) {}
function imagecreatefromgd2 ($filename) {}
function imagecreatefromgd2part ($filename, $srcX, $srcY, $width, $height) {}
function imagepng ($image, $filename = null, $quality = null, $filters = null) {}
function imagegif ($image, $filename = null) {}
function imagejpeg ($image, $filename = null, $quality = null) {}
function imagewbmp ($image, $filename = null, $foreground = null) {}
function imagegd ($image, $filename = null) {}
function imagegd2 ($image, $filename = null, $chunk_size = null, $type = null) {}
function imagedestroy ($image) {}
function imagegammacorrect ($image, $inputgamma, $outputgamma) {}
function imagefill ($image, $x, $y, $color) {}
function imagefilledpolygon ($image, array $points, $num_points, $color) {}
function imagefilledrectangle ($image, $x1, $y1, $x2, $y2, $color) {}
function imagefilltoborder ($image, $x, $y, $border, $color) {}
function imagefontwidth ($font) {}
function imagefontheight ($font) {}
function imageinterlace ($image, $interlace = null) {}
function imageline ($image, $x1, $y1, $x2, $y2, $color) {}
function imageloadfont ($file) {}
function imagepolygon ($image, array $points, $num_points, $color) {}
function imagerectangle ($image, $x1, $y1, $x2, $y2, $color) {}
function imagesetpixel ($image, $x, $y, $color) {}
function imagestring ($image, $font, $x, $y, $string, $color) {}
function imagestringup ($image, $font, $x, $y, $string, $color) {}
function imagesx ($image) {}
function imagesy ($image) {}
function imagedashedline ($image, $x1, $y1, $x2, $y2, $color) {}
function imagettfbbox ($size, $angle, $fontfile, $text) {}
function imagettftext ($image, $size, $angle, $x, $y, $color, $fontfile, $text) {}
function imageftbbox ($size, $angle, $fontfile, $text, $extrainfo = null ) {}
function imagefttext ($image, $size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo = null ) {}
function imagepsloadfont ($filename) {}
function imagepsfreefont ($font_index) {}
function imagepsencodefont ($font_index, $encodingfile) {}
function imagepsextendfont ($font_index, $extend) {}
function imagepsslantfont ($font_index, $slant) {}
function imagepstext ($image, $text, $font_index, $size, $foreground, $background, $x, $y, $space = null, $tightness = null, $angle = null, $antialias_steps = null) {}
function imagepsbbox ($text, $font, $size) {}
function imagetypes () {}
function jpeg2wbmp ($jpegname, $wbmpname, $dest_height, $dest_width, $threshold) {}
function png2wbmp ($pngname, $wbmpname, $dest_height, $dest_width, $threshold) {}
function image2wbmp ($image, $filename = null, $threshold = null) {}
function imagelayereffect ($image, $effect) {}
function imagecolormatch ($image1, $image2) {}
function imagexbm ($image, $filename, $foreground = null) {}
function imagefilter ($image, $filtertype, $arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null) {}
function imageconvolution ($image, array $matrix, $div, $offset) {}
define ('IMG_GIF', 1);
define ('IMG_JPG', 2);
define ('IMG_JPEG', 2);
define ('IMG_PNG', 4);
define ('IMG_WBMP', 8);
define ('IMG_XPM', 16);
define ('IMG_COLOR_TILED', -5);
define ('IMG_COLOR_STYLED', -2);
define ('IMG_COLOR_BRUSHED', -3);
define ('IMG_COLOR_STYLEDBRUSHED', -4);
define ('IMG_COLOR_TRANSPARENT', -6);
define ('IMG_ARC_ROUNDED', 0);
define ('IMG_ARC_PIE', 0);
define ('IMG_ARC_CHORD', 1);
define ('IMG_ARC_NOFILL', 2);
define ('IMG_ARC_EDGED', 4);
define ('IMG_GD2_RAW', 1);
define ('IMG_GD2_COMPRESSED', 2);
define ('IMG_EFFECT_REPLACE', 0);
define ('IMG_EFFECT_ALPHABLEND', 1);
define ('IMG_EFFECT_NORMAL', 2);
define ('IMG_EFFECT_OVERLAY', 3);
define ('GD_BUNDLED', 1);
define ('IMG_FILTER_NEGATE', 0);
define ('IMG_FILTER_GRAYSCALE', 1);
define ('IMG_FILTER_BRIGHTNESS', 2);
define ('IMG_FILTER_CONTRAST', 3);
define ('IMG_FILTER_COLORIZE', 4);
define ('IMG_FILTER_EDGEDETECT', 5);
define ('IMG_FILTER_GAUSSIAN_BLUR', 7);
define ('IMG_FILTER_SELECTIVE_BLUR', 8);
define ('IMG_FILTER_EMBOSS', 6);
define ('IMG_FILTER_MEAN_REMOVAL', 9);
define ('IMG_FILTER_SMOOTH', 10);
define ('IMG_FILTER_PIXELATE', 11);
define ('GD_VERSION', "2.0.35");
define ('GD_MAJOR_VERSION', 2);
define ('GD_MINOR_VERSION', 0);
define ('GD_RELEASE_VERSION', 35);
define ('GD_EXTRA_VERSION', "");
define ('PNG_NO_FILTER', 0);
define ('PNG_FILTER_NONE', 8);
define ('PNG_FILTER_SUB', 16);
define ('PNG_FILTER_UP', 32);
define ('PNG_FILTER_AVG', 64);
define ('PNG_FILTER_PAETH', 128);
define ('PNG_ALL_FILTERS', 248);
define('IMG_AFFINE_TRANSLATE',0);
define('IMG_AFFINE_SCALE',1);
define('IMG_AFFINE_ROTATE',2);
define('IMG_AFFINE_SHEAR_HORIZONTAL',3);
define('IMG_AFFINE_SHEAR_VERTICAL',4);
define('IMG_CROP_DEFAULT',0);
define('IMG_CROP_TRANSPARENT',1);
define('IMG_CROP_BLACK',2);
define('IMG_CROP_WHITE',3);
define('IMG_CROP_SIDES',4);
define('IMG_FLIP_BOTH',3);
define('IMG_FLIP_HORIZONTAL',1);
define('IMG_FLIP_VERTICAL',2);
define('IMG_BELL', 1);
define('IMG_BESSEL', 2);
define('IMG_BICUBIC', 4);
define('IMG_BICUBIC_FIXED', 5);
define('IMG_BILINEAR_FIXED', 3);
define('IMG_BLACKMAN', 6);
define('IMG_BOX', 7);
define('IMG_BSPLINE', 8);
define('IMG_CATMULLROM', 9);
define('IMG_GAUSSIAN', 10);
define('IMG_GENERALIZED_CUBIC', 11);
define('IMG_HERMITE', 12);
define('IMG_HAMMING', 13);
define('IMG_HANNING', 14);
define('IMG_MITCHELL', 15);
define('IMG_POWER', 17);
define('IMG_QUADRATIC', 18);
define('IMG_SINC', 19);
define('IMG_NEAREST_NEIGHBOUR', 16);
define('IMG_WEIGHTED4', 21);
define('IMG_TRIANGLE', 20);
