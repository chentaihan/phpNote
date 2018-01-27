<?php
function exif_read_data ($filename, $sections = null, $arrays = false, $thumbnail = false) {}
function read_exif_data ($filename, $sections_needed, $sub_arrays, $read_thumbnail) {}
function exif_tagname ($index) {}
function exif_thumbnail ($filename, &$width = null, &$height = null, &$imagetype = null) {}
function exif_imagetype ($filename) {}
define ('EXIF_USE_MBSTRING', 1);
?>
