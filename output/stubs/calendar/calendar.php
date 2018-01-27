<?php
function jdtogregorian ($julianday) {}
function gregoriantojd ($month, $day, $year) {}
function jdtojulian ($julianday) {}
function juliantojd ($month, $day, $year) {}
function jdtojewish ($juliandaycount, $hebrew = false, $fl = 0) {}
function jewishtojd ($month, $day, $year) {}
function jdtofrench ($juliandaycount) {}
function frenchtojd ($month, $day, $year) {}
function jddayofweek ($julianday, $mode = CAL_DOW_DAYNO) {}
function jdmonthname ($julianday, $mode) {}
function easter_date ($year = null) {}
function easter_days ($year = null, $method = CAL_EASTER_DEFAULT) {}
function unixtojd ($timestamp = 0) {}
function jdtounix ($jday) {}
function cal_to_jd ($calendar, $month, $day, $year) {}
function cal_from_jd ($jd, $calendar) {}
function cal_days_in_month ($calendar, $month, $year) {}
function cal_info ($calendar = -1) {}
define ('CAL_GREGORIAN', 0);
define ('CAL_JULIAN', 1);
define ('CAL_JEWISH', 2);
define ('CAL_FRENCH', 3);
define ('CAL_NUM_CALS', 4);
define ('CAL_DOW_DAYNO', 0);
define ('CAL_DOW_SHORT', 1);
define ('CAL_DOW_LONG', 2);
define ('CAL_MONTH_GREGORIAN_SHORT', 0);
define ('CAL_MONTH_GREGORIAN_LONG', 1);
define ('CAL_MONTH_JULIAN_SHORT', 2);
define ('CAL_MONTH_JULIAN_LONG', 3);
define ('CAL_MONTH_JEWISH', 4);
define ('CAL_MONTH_FRENCH', 5);
define ('CAL_EASTER_DEFAULT', 0);
define ('CAL_EASTER_ROMAN', 1);
define ('CAL_EASTER_ALWAYS_GREGORIAN', 2);
define ('CAL_EASTER_ALWAYS_JULIAN', 3);
define ('CAL_JEWISH_ADD_ALAFIM_GERESH', 2);
define ('CAL_JEWISH_ADD_ALAFIM', 4);
define ('CAL_JEWISH_ADD_GERESHAYIM', 8);
