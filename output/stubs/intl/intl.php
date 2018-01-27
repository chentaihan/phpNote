<?php
class Collator {
    const DEFAULT_VALUE = -1;
    const PRIMARY = 0;
    const SECONDARY = 1;
    const TERTIARY = 2;
    const DEFAULT_STRENGTH = 2;
    const QUATERNARY = 3;
    const IDENTICAL = 15;
    const OFF = 16;
    const ON = 17;
    const SHIFTED = 20;
    const NON_IGNORABLE = 21;
    const LOWER_FIRST = 24;
    const UPPER_FIRST = 25;
    const FRENCH_COLLATION = 0;
    const ALTERNATE_HANDLING = 1;
    const CASE_FIRST = 2;
    const CASE_LEVEL = 3;
    const NORMALIZATION_MODE = 4;
    const STRENGTH = 5;
    const HIRAGANA_QUATERNARY_MODE = 6;
    const NUMERIC_COLLATION = 7;
    const SORT_REGULAR = 0;
    const SORT_STRING = 1;
    const SORT_NUMERIC = 2;
    public function __construct($locale) { }
    public static function create($locale) { }
    public function compare($str1, $str2) { }
    public function sort(array &$arr, $sort_flag = null) { }
    public function sortWithSortKeys(array &$arr) { }
    public function asort(array &$arr, $sort_flag = null) { }
    public function getAttribute($attr) { }
    public function setAttribute($attr, $val) { }
    public function getStrength() { }
    public function setStrength($strength) { }
    public function getLocale($type = null) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
    public function getSortKey($str) { }
}
class NumberFormatter {
    const PATTERN_DECIMAL = 0;
    const DECIMAL = 1;
    const CURRENCY = 2;
    const PERCENT = 3;
    const SCIENTIFIC = 4;
    const SPELLOUT = 5;
    const ORDINAL = 6;
    const DURATION = 7;
    const PATTERN_RULEBASED = 9;
    const IGNORE = 0;
    const DEFAULT_STYLE = 1;
    const ROUND_CEILING = 0;
    const ROUND_FLOOR = 1;
    const ROUND_DOWN = 2;
    const ROUND_UP = 3;
    const ROUND_HALFEVEN = 4;
    const ROUND_HALFDOWN = 5;
    const ROUND_HALFUP = 6;
    const PAD_BEFORE_PREFIX = 0;
    const PAD_AFTER_PREFIX = 1;
    const PAD_BEFORE_SUFFIX = 2;
    const PAD_AFTER_SUFFIX = 3;
    const PARSE_INT_ONLY = 0;
    const GROUPING_USED = 1;
    const DECIMAL_ALWAYS_SHOWN = 2;
    const MAX_INTEGER_DIGITS = 3;
    const MIN_INTEGER_DIGITS = 4;
    const INTEGER_DIGITS = 5;
    const MAX_FRACTION_DIGITS = 6;
    const MIN_FRACTION_DIGITS = 7;
    const FRACTION_DIGITS = 8;
    const MULTIPLIER = 9;
    const GROUPING_SIZE = 10;
    const ROUNDING_MODE = 11;
    const ROUNDING_INCREMENT = 12;
    const FORMAT_WIDTH = 13;
    const PADDING_POSITION = 14;
    const SECONDARY_GROUPING_SIZE = 15;
    const SIGNIFICANT_DIGITS_USED = 16;
    const MIN_SIGNIFICANT_DIGITS = 17;
    const MAX_SIGNIFICANT_DIGITS = 18;
    const LENIENT_PARSE = 19;
    const POSITIVE_PREFIX = 0;
    const POSITIVE_SUFFIX = 1;
    const NEGATIVE_PREFIX = 2;
    const NEGATIVE_SUFFIX = 3;
    const PADDING_CHARACTER = 4;
    const CURRENCY_CODE = 5;
    const DEFAULT_RULESET = 6;
    const PUBLIC_RULESETS = 7;
    const DECIMAL_SEPARATOR_SYMBOL = 0;
    const GROUPING_SEPARATOR_SYMBOL = 1;
    const PATTERN_SEPARATOR_SYMBOL = 2;
    const PERCENT_SYMBOL = 3;
    const ZERO_DIGIT_SYMBOL = 4;
    const DIGIT_SYMBOL = 5;
    const MINUS_SIGN_SYMBOL = 6;
    const PLUS_SIGN_SYMBOL = 7;
    const CURRENCY_SYMBOL = 8;
    const INTL_CURRENCY_SYMBOL = 9;
    const MONETARY_SEPARATOR_SYMBOL = 10;
    const EXPONENTIAL_SYMBOL = 11;
    const PERMILL_SYMBOL = 12;
    const PAD_ESCAPE_SYMBOL = 13;
    const INFINITY_SYMBOL = 14;
    const NAN_SYMBOL = 15;
    const SIGNIFICANT_DIGIT_SYMBOL = 16;
    const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;
    const TYPE_DEFAULT = 0;
    const TYPE_INT32 = 1;
    const TYPE_INT64 = 2;
    const TYPE_DOUBLE = 3;
    const TYPE_CURRENCY = 4;
    public function __construct($locale, $style, $pattern) { }
    public static function create($locale, $style, $pattern = null) { }
    public function format($value, $type = null) { }
    public function parse($value, $type = null, &$position = null) { }
    public function formatCurrency($value, $currency) { }
    public function parseCurrency($value, &$currency, &$position = null) { }
    public function setAttribute($attr, $value) { }
    public function getAttribute($attr) { }
    public function setTextAttribute($attr, $value) { }
    public function getTextAttribute($attr) { }
    public function setSymbol($attr, $value) { }
    public function getSymbol($attr) { }
    public function setPattern($pattern) { }
    public function getPattern() { }
    public function getLocale($type = null) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
}
class Normalizer {
    const OPTION_DEFAULT = "";
    const NONE = "1";
    const FORM_D = "2";
    const NFD = 2;
    const FORM_KD = "3";
    const NFKD = 3;
    const FORM_C = "4";
    const NFC = 4;
    const FORM_KC = "5";
    const NFKC = 5;
    public static function normalize($input, $form = Normalizer::FORM_C) { }
    public static function isNormalized($input, $form = Normalizer::FORM_C) { }
}
class Locale {
    const ACTUAL_LOCALE = 0;
    const VALID_LOCALE = 1;
    const DEFAULT_LOCALE = null;
    const LANG_TAG = "language";
    const EXTLANG_TAG = "extlang";
    const SCRIPT_TAG = "script";
    const REGION_TAG = "region";
    const VARIANT_TAG = "variant";
    const GRANDFATHERED_LANG_TAG = "grandfathered";
    const PRIVATE_TAG = "private";
    public static function getDefault() { }
    public static function setDefault($locale) { }
    public static function getPrimaryLanguage($locale) { }
    public static function getScript($locale) { }
    public static function getRegion($locale) { }
    public static function getKeywords($locale) { }
    public static function getDisplayScript($locale, $in_locale = null) { }
    public static function getDisplayRegion($locale, $in_locale = null) { }
    public static function getDisplayName($locale, $in_locale = null) { }
    public static function getDisplayLanguage($locale, $in_locale = null) { }
    public static function getDisplayVariant($locale, $in_locale = null) { }
    public static function composeLocale(array $subtags) { }
    public static function parseLocale($locale) { }
    public static function getAllVariants($locale) { }
    public static function filterMatches($langtag, $locale, $canonicalize = false) { }
    public static function lookup(array $langtag, $locale, $canonicalize = false, $default = null) { }
    public static function canonicalize($locale) { }
    public static function acceptFromHttp($header) { }
}
class MessageFormatter {
    public function __construct($locale, $pattern) { }
    public static function create($locale, $pattern) { }
    public function format(array $args) { }
    public static function formatMessage($locale, $pattern, array $args) { }
    public function parse($value) { }
    public static function parseMessage($locale, $pattern, $source) { }
    public function setPattern($pattern) { }
    public function getPattern() { }
    public function getLocale() { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
}
class IntlDateFormatter {
    const FULL = 0;
    const LONG = 1;
    const MEDIUM = 2;
    const SHORT = 3;
    const NONE = -1;
    const GREGORIAN = 1;
    const TRADITIONAL = 0;
    public function __construct($locale, $datetype, $timetype, $timezone, $calendar, $pattern) { }
    public static function create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null) { }
    public function getDateType() { }
    public function getTimeType() { }
    public function getCalendar() { }
    public function setCalendar($which) { }
    public function getTimeZoneId() { }
    public function getCalendarObject() { }
    public function getTimeZone() { }
    public function setTimeZoneId($zone) { }
    public function setTimeZone($zone) { }
    public function setPattern($pattern) { }
    public function getPattern() { }
    public function getLocale($which = null) { }
    public function setLenient($lenient) { }
    public function isLenient() { }
    public function format($value) { }
    public function formatObject($object, $format = NULL, $locale = NULL) { }
    public function parse($value, &$position = null) { }
    public function localtime($value, &$position = null) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
}
class ResourceBundle implements Traversable {
    public function __construct($locale, $bundlename, $fallback) { }
    public static function create($locale, $bundlename, $fallback = null) { }
    public function get($index) { }
    public function count() { }
    public static function getLocales($bundlename) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
}
class Transliterator {
    const FORWARD = 0;
    const REVERSE = 1;
    public $id;
    final private function __construct() { }
    public static function create($id, $direction = null) { }
    public static function createFromRules($rules, $direction = null) { }
    public function createInverse() { }
    public static function listIDs() { }
    public function transliterate($subject, $start = null, $end = null) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
}
class Spoofchecker {
    const SINGLE_SCRIPT_CONFUSABLE = 1;
    const MIXED_SCRIPT_CONFUSABLE = 2;
    const WHOLE_SCRIPT_CONFUSABLE = 4;
    const ANY_CASE = 8;
    const SINGLE_SCRIPT = 16;
    const INVISIBLE = 32;
    const CHAR_LIMIT = 64;
    public function __construct() { }
    public function isSuspicious($text, &$error = null) { }
    public function areConfusable($s1, $s2, &$error = null) { }
    public function setAllowedLocales($locale_list) { }
    public function setChecks($checks) { }
}
class IntlGregorianCalendar {
    public static function createInstance($timeZone = NULL, $locale = NULL) { }
    public function setGregorianChange($change) { }
    public function getGregorianChange() { }
    public function isLeapYear($year) { }
}
class IntlCalendar {
    const FIELD_ERA = 0;
    const FIELD_YEAR = 1;
    const FIELD_MONTH = 2;
    const FIELD_WEEK_OF_YEAR = 3;
    const FIELD_WEEK_OF_MONTH = 4;
    const FIELD_DATE = 5;
    const FIELD_DAY_OF_YEAR = 6;
    const FIELD_DAY_OF_WEEK = 7;
    const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
    const FIELD_AM_PM = 9;
    const FIELD_HOUR = 10;
    const FIELD_HOUR_OF_DAY = 11;
    const FIELD_MINUTE = 12;
    const FIELD_SECOND = 13;
    const FIELD_MILLISECOND = 14;
    const FIELD_ZONE_OFFSET = 15;
    const FIELD_DST_OFFSET = 16;
    const FIELD_YEAR_WOY = 17;
    const FIELD_DOW_LOCAL = 18;
    const FIELD_EXTENDED_YEAR = 19;
    const FIELD_JULIAN_DAY = 20;
    const FIELD_MILLISECONDS_IN_DAY = 21;
    const FIELD_IS_LEAP_MONTH = 22;
    const FIELD_FIELD_COUNT = 23;
    const FIELD_DAY_OF_MONTH = 5;
    const DOW_SUNDAY = 1;
    const DOW_MONDAY = 2;
    const DOW_TUESDAY = 3;
    const DOW_WEDNESDAY = 4;
    const DOW_THURSDAY = 5;
    const DOW_FRIDAY = 6;
    const DOW_SATURDAY = 7;
    const DOW_TYPE_WEEKDAY = 0;
    const DOW_TYPE_WEEKEND = 1;
    const DOW_TYPE_WEEKEND_OFFSET = 2;
    const DOW_TYPE_WEEKEND_CEASE = 3;
    const WALLTIME_FIRST = 1;
    const WALLTIME_LAST = 0;
    const WALLTIME_NEXT_VALID = 2;
    public function add($field, $amount) { }
    public function after(IntlCalendar $calendar) { }
    public function before(IntlCalendar $calendar) { }
    public function clear($field = NULL) { }
    private function __construct() { }
    public static function createInstance($timeZone = NULL, $locale = NULL) { }
    public function equals($calendar) { }
    public function fieldDifference($when, $field) { }
    public static function fromDateTime($dateTime) { }
    public function get($field) { }
    public function getActualMaximum($field) { }
    public function getActualMinimum($field) { }
    public static function getAvailableLocales() { }
    public function getDayOfWeekType($dayOfWeek) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
    public function getFirstDayOfWeek() { }
    public function getGreatestMinimum($field) { }
    public static function getKeywordValuesForLocale($key, $locale, $commonlyUsed) { }
    public function getLeastMaximum($field) { }
    public function getLocale($localeType) { }
    public function getMaximum($field) { }
    public function getMinimalDaysInFirstWeek() { }
    public function getMinimum($field) { }
    public static function getNow() { }
    public function getRepeatedWallTimeOption() { }
    public function getSkippedWallTimeOption() { }
    public function getTime() { }
    public function getTimeZone() { }
    public function getType() { }
    public function getWeekendTransition($dayOfWeek) { }
    public function inDaylightTime() { }
    public function isEquivalentTo(IntlCalendar $calendar) { }
    public function isLenient() { }
    public function isWeekend($date = NULL) { }
    public function roll($field, $amountOrUpOrDown) { }
    public function PS_UNRESERVE_PREFIX_isSet($field) { }
    public function set($year, $month, $dayOfMonth = NULL, $hour = NULL, $minute = NULL, $second = NULL) { }
    public function set($field, $value) { }
    public function setFirstDayOfWeek($dayOfWeek) { }
    public function setLenient($isLenient) { }
    public function setRepeatedWallTimeOption($wallTimeOption) { }
    public function setSkippedWallTimeOption($wallTimeOption) { }
    public function setTime($date) { }
    public function setTimeZone($timeZone) { }
    public function toDateTime() { }
}
class IntlIterator implements Iterator {
    public function current() { }
    public function key() { }
    public function next() { }
    public function rewind() { }
    public function valid() { }
}
class IntlException extends Exception {
}
class IntlTimeZone {
    const  DISPLAY_SHORT = 1;
    const  DISPLAY_LONG = 2;
    public static function countEquivalentIDs($zoneId) { }
    public static function createDefault() { }
    public static function createEnumeration($countryOrRawOffset) { }
    public static function createTimeZone($zoneId) { }
    public static function  fromDateTimeZone($zoneId) { }
    public static function getCanonicalID($zoneId, &$isSystemID) { }
    public function getDisplayName($isDaylight, $style, $locale) { }
    public function  getDSTSavings() { }
    public static function getEquivalentID($zoneId, $index) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
    public static function getGMT() { }
    public function getID() { }
    public function getOffset($date, $local, &$rawOffset, &$dstOffset) { }
    public function  getRawOffset() { }
    public static function getTZDataVersion() { }
    public function hasSameRules(IntlTimeZone $otherTimeZone) { }
    public function toDateTimeZone() { }
    public function useDaylightTime() { }
}
function collator_create($locale) { }
function collator_compare(Collator $object, $str1, $str2) { }
function collator_get_attribute(Collator $object, $attr) { }
function collator_set_attribute(Collator $object, $attr, $val) { }
function collator_get_strength(Collator $object) { }
function collator_set_strength(Collator $object, $strength) { }
function collator_sort(Collator $object, array &$arr, $sort_flag = null) { }
function collator_sort_with_sort_keys(Collator $object, array &$arr) { }
function collator_asort(Collator $object, array &$arr, $sort_flag = null) { }
function collator_get_locale(Collator $object, $type = null) { }
function collator_get_error_code(Collator $object) { }
function collator_get_error_message(Collator $object) { }
function collator_get_sort_key(Collator $object, $str) { }
function numfmt_create($locale, $style, $pattern = null) { }
function numfmt_format(NumberFormatter $fmt, $value, $type = null) { }
function numfmt_parse(NumberFormatter $fmt, $value, $type = null, &$position = null) { }
function numfmt_format_currency(NumberFormatter $fmt, $value, $currency) { }
function numfmt_parse_currency(NumberFormatter $fmt, $value, &$currency, &$position = null) { }
function numfmt_set_attribute(NumberFormatter $fmt, $attr, $value) { }
function numfmt_get_attribute(NumberFormatter $fmt, $attr) { }
function numfmt_set_text_attribute(NumberFormatter $fmt, $attr, $value) { }
function numfmt_get_text_attribute(NumberFormatter $fmt, $attr) { }
function numfmt_set_symbol(NumberFormatter $fmt, $attr, $value) { }
function numfmt_get_symbol(NumberFormatter $fmt, $attr) { }
function numfmt_set_pattern(NumberFormatter $fmt, $pattern) { }
function numfmt_get_pattern(NumberFormatter $fmt, $nf) { }
function numfmt_get_locale(NumberFormatter $fmt, $type = null) { }
function numfmt_get_error_code(NumberFormatter $fmt, $nf) { }
function numfmt_get_error_message(NumberFormatter $fmt, $nf) { }
function normalizer_normalize($input, $form = Normalizer::FORM_C) { }
function normalizer_is_normalized($input, $form = Normalizer::FORM_C) { }
function locale_get_default() { }
function locale_set_default($name) { }
function locale_get_primary_language($locale) { }
function locale_get_script($locale) { }
function locale_get_region($locale) { }
function locale_get_keywords($locale) { }
function locale_get_display_script($locale, $in_locale = null) { }
function locale_get_display_region($locale, $in_locale = null) { }
function locale_get_display_name($locale, $in_locale = null) { }
function locale_get_display_language($locale, $in_locale = null) { }
function locale_get_display_variant($locale, $in_locale = null) { }
function locale_compose(array $subtags) { }
function locale_parse($locale) { }
function locale_get_all_variants($locale) { }
function locale_filter_matches($langtag, $locale, $canonicalize = false) { }
function locale_canonicalize($arg1) { }
function locale_lookup(array $langtag, $locale, $canonicalize = false, $default = null) { }
function locale_accept_from_http($header) { }
function msgfmt_create($locale, $pattern) { }
function msgfmt_format(MessageFormatter $fmt, array $args) { }
function msgfmt_format_message(MessageFormatter $fmt, $locale, $pattern, array $args) { }
function msgfmt_parse(MessageFormatter $fmt, $value) { }
function msgfmt_parse_message(MessageFormatter $fmt, $locale, $pattern, $source) { }
function msgfmt_set_pattern(MessageFormatter $fmt, $pattern) { }
function msgfmt_get_pattern(MessageFormatter $fmt, $mf) { }
function msgfmt_get_locale(MessageFormatter $fmt, $mf) { }
function msgfmt_get_error_code(MessageFormatter $fmt, $nf) { }
function msgfmt_get_error_message(MessageFormatter $fmt, $coll) { }
function datefmt_create($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null) { }
function datefmt_get_datetype(MessageFormatter $mf) { }
function datefmt_get_timetype(MessageFormatter $mf) { }
function datefmt_get_calendar(MessageFormatter $mf) { }
function datefmt_set_calendar(MessageFormatter $mf, $which) { }
function datefmt_get_locale(MessageFormatter $mf, $which = null) { }
function datefmt_get_timezone_id(MessageFormatter $mf) { }
function datefmt_get_calendar_object() { }
function datefmt_get_timezone() { }
function datefmt_set_timezone_id(MessageFormatter $mf, $zone) { }
function datefmt_set_timezone($zone) { }
function datefmt_get_pattern(MessageFormatter $mf) { }
function datefmt_set_pattern(MessageFormatter $mf, $pattern) { }
function datefmt_is_lenient(MessageFormatter $mf) { }
function datefmt_set_lenient(MessageFormatter $mf, $lenient) { }
function datefmt_format(MessageFormatter $mf, $value) { }
function datefmt_format_object($object, $format = NULL, $locale = NULL) { }
function datefmt_parse(MessageFormatter $mf, $value, &$position = null) { }
function datefmt_localtime(MessageFormatter $mf, $value, &$position = null) { }
function datefmt_get_error_code(MessageFormatter $mf) { }
function datefmt_get_error_message(MessageFormatter $mf, $coll) { }
function grapheme_strlen($input) { }
function grapheme_strpos($haystack, $needle, $offset = 0) { }
function grapheme_stripos($haystack, $needle, $offset = 0) { }
function grapheme_strrpos($haystack, $needle, $offset = 0) { }
function grapheme_strripos($haystack, $needle, $offset = 0) { }
function grapheme_substr($string, $start, $length = null) { }
function grapheme_strstr($haystack, $needle, $before_needle = false) { }
function grapheme_stristr($haystack, $needle, $before_needle = false) { }
function grapheme_extract($haystack, $size, $extract_type = null, $start = 0, &$next = null) { }
function idn_to_ascii($domain, $options = 0, $variant = INTL_IDNA_VARIANT_2003, array &$idna_info) { }
function idn_to_utf8($domain, $options = 0, $variant = INTL_IDNA_VARIANT_2003, array &$idna_info) { }
function intlcal_create_instance($timeZone = NULL, $locale = NULL) { }
function intlcal_get_keyword_values_for_locale($key, $locale, $commonlyUsed) { }
function intlcal_get_now() { }
function intlcal_get_available_locales() { }
function intl_get($calendar, $field) { }
function intlcal_get_time($calendar) { }
function intlcal_set_time($date) { }
function intlcal_add($calendar, $field, $amount) { }
function intlcal_set_time_zone($calendar, $timeZone) { }
function intlcal_after(IntlCalendar $calendarObject, IntlCalendar $calendar) { }
function intlcal_before(IntlCalendar $calendarObject, IntlCalendar $calendar) { }
function intlcal_set($calendar, $year, $month, $dayOfMonth = NULL, $hour = NULL, $minute = NULL, $second = NULL) { }
function intlcal_roll($calendar, $field, $amountOrUpOrDown) { }
function intlcal_clear($calendar, $field = NULL) { }
function intlcal_field_difference($calendar, $when, $field) { }
function intlcal_get_actual_maximum($calendar, $field) { }
function intlcal_get_actual_minimum($calendar, $field) { }
function intlcal_get_day_of_week_type($calendar, $dayOfWeek) { }
function intlcal_get_first_day_of_week($calendar) { }
function intlcal_greates_minimum($calendar, $field) { }
function intlcal_get($calendar, $index) { }
function intlcal_get_least_maximum($calendar, $field) { }
function intlcal_get_greatest_minimum($calendar, $field) { }
function intlcal_get_locale($calendar, $localeType) { }
function intcal_get_maximum($calendar, $field) { }
function intlcal_get_minimal_days_in_first_week($calendar) { }
function intlcal_get_minimum($calendar, $field) { }
function intlcal_get_time_zone($calendar) { }
function intlcal_get_type($calendar) { }
function intlcal_get_weekend_transition($calendar, $dayOfWeek) { }
function intlcal_in_daylight_time($calendar) { }
function intlcal_is_lenient($calendar) { }
function intlcal_is_set($calendar, $field) { }
function intlcal_get_maximum($calendar, $field) { }
function intlcal_is_equivalent_to(IntlCalendar $calendarObject, IntlCalendar $calendar) { }
function intlcal_is_weekend($calendar, $date = NULL) { }
function intlcal_set_first_day_of_week($calendar, $dayOfWeek) { }
function intlcal_set_lenient($calendar, $isLenient) { }
function intlcal_get_repeated_wall_time_option($calendar) { }
function intlcal_equals($calendarObject, $calendar) { }
function intlcal_get_skipped_wall_time_option($calendar) { }
function intlcal_set_repeated_wall_time_option($calendar, $wallTimeOption) { }
function intlcal_set_skipped_wall_time_option($calendar, $wallTimeOption) { }
function intlcal_from_date_time($dateTime) { }
function intlcal_to_date_time($calendar) { }
function intlcal_get_error_code($calendar) { }
function intlcal_get_error_message($calendar) { }
function intltz_count_equivalent_ids($zoneId) { }
function intlz_create_default() { }
function intltz_create_enumeration($countryOrRawOffset) { }
function intltz_create_time_zone($zoneId) { }
function intltz_from_date_time_zone($zoneId) { }
function intltz_get_canonical_id($zoneId, &$isSystemID) { }
function intltz_get_display_name($obj, $isDaylight, $style, $locale) { }
function intltz_get_dst_savings($obj) { }
function intltz_get_equivalent_id($zoneId, $index) { }
function intltz_get_error_code($obj) { }
function intltz_get_error_message($obj) { }
function intltz_getGMT() { }
function intltz_get_id($obj) { }
function intltz_get_offset($obj, $date, $local, &$rawOffset, &$dstOffset) { }
function intltz_get_raw_offset($obj) { }
function intltz_get_tz_data_version($obj) { }
function intltz_has_same_rules($obj, $otherTimeZone) { }
function intltz_to_date_time_zone($obj) { }
function intltz_use_daylight_time($obj) { }
function intlgregcal_create_instance($timeZone = NULL, $locale = NULL) { }
function intlgregcal_set_gregorian_change($obj, $change) { }
function intlgregcal_get_gregorian_change($obj) { }
function intlgregcal_is_leap_year($year) { }
function resourcebundle_create($locale, $bundlename, $fallback = null) { }
function resourcebundle_get(ResourceBundle $r, $index) { }
function resourcebundle_count(ResourceBundle $r, $bundle) { }
function resourcebundle_locales(ResourceBundle $r, $bundlename) { }
function resourcebundle_get_error_code(ResourceBundle $bundle) { }
function resourcebundle_get_error_message(ResourceBundle $bundle) { }
function transliterator_create($id, $direction = null) { }
function transliterator_create_from_rules($rules, $direction = null) { }
function transliterator_list_ids() { }
function transliterator_create_inverse(Transliterator $orig_trans) { }
function transliterator_transliterate($transliterator, $subject, $start = null, $end = null) { }
function transliterator_get_error_code(Transliterator $trans) { }
function transliterator_get_error_message(Transliterator $trans) { }
function intl_get_error_code() { }
function intl_get_error_message() { }
function intl_is_failure($error_code) { }
function intl_error_name($error_code) { }
define ('INTL_MAX_LOCALE_LEN', 80);
define ('INTL_ICU_VERSION', "4.8.1.1");
define ('INTL_ICU_DATA_VERSION', "4.8.1");
define ('ULOC_ACTUAL_LOCALE', 0);
define ('ULOC_VALID_LOCALE', 1);
define ('GRAPHEME_EXTR_COUNT', 0);
define ('GRAPHEME_EXTR_MAXBYTES', 1);
define ('GRAPHEME_EXTR_MAXCHARS', 2);
define ('U_USING_FALLBACK_WARNING', -128);
define ('U_ERROR_WARNING_START', -128);
define ('U_USING_DEFAULT_WARNING', -127);
define ('U_SAFECLONE_ALLOCATED_WARNING', -126);
define ('U_STATE_OLD_WARNING', -125);
define ('U_STRING_NOT_TERMINATED_WARNING', -124);
define ('U_SORT_KEY_TOO_SHORT_WARNING', -123);
define ('U_AMBIGUOUS_ALIAS_WARNING', -122);
define ('U_DIFFERENT_UCA_VERSION', -121);
define ('U_ERROR_WARNING_LIMIT', -119);
define ('U_ZERO_ERROR', 0);
define ('U_ILLEGAL_ARGUMENT_ERROR', 1);
define ('U_MISSING_RESOURCE_ERROR', 2);
define ('U_INVALID_FORMAT_ERROR', 3);
define ('U_FILE_ACCESS_ERROR', 4);
define ('U_INTERNAL_PROGRAM_ERROR', 5);
define ('U_MESSAGE_PARSE_ERROR', 6);
define ('U_MEMORY_ALLOCATION_ERROR', 7);
define ('U_INDEX_OUTOFBOUNDS_ERROR', 8);
define ('U_PARSE_ERROR', 9);
define ('U_INVALID_CHAR_FOUND', 10);
define ('U_TRUNCATED_CHAR_FOUND', 11);
define ('U_ILLEGAL_CHAR_FOUND', 12);
define ('U_INVALID_TABLE_FORMAT', 13);
define ('U_INVALID_TABLE_FILE', 14);
define ('U_BUFFER_OVERFLOW_ERROR', 15);
define ('U_UNSUPPORTED_ERROR', 16);
define ('U_RESOURCE_TYPE_MISMATCH', 17);
define ('U_ILLEGAL_ESCAPE_SEQUENCE', 18);
define ('U_UNSUPPORTED_ESCAPE_SEQUENCE', 19);
define ('U_NO_SPACE_AVAILABLE', 20);
define ('U_CE_NOT_FOUND_ERROR', 21);
define ('U_PRIMARY_TOO_LONG_ERROR', 22);
define ('U_STATE_TOO_OLD_ERROR', 23);
define ('U_TOO_MANY_ALIASES_ERROR', 24);
define ('U_ENUM_OUT_OF_SYNC_ERROR', 25);
define ('U_INVARIANT_CONVERSION_ERROR', 26);
define ('U_INVALID_STATE_ERROR', 27);
define ('U_COLLATOR_VERSION_MISMATCH', 28);
define ('U_USELESS_COLLATOR_ERROR', 29);
define ('U_NO_WRITE_PERMISSION', 30);
define ('U_STANDARD_ERROR_LIMIT', 31);
define ('U_BAD_VARIABLE_DEFINITION', 65536);
define ('U_PARSE_ERROR_START', 65536);
define ('U_MALFORMED_RULE', 65537);
define ('U_MALFORMED_SET', 65538);
define ('U_MALFORMED_SYMBOL_REFERENCE', 65539);
define ('U_MALFORMED_UNICODE_ESCAPE', 65540);
define ('U_MALFORMED_VARIABLE_DEFINITION', 65541);
define ('U_MALFORMED_VARIABLE_REFERENCE', 65542);
define ('U_MISMATCHED_SEGMENT_DELIMITERS', 65543);
define ('U_MISPLACED_ANCHOR_START', 65544);
define ('U_MISPLACED_CURSOR_OFFSET', 65545);
define ('U_MISPLACED_QUANTIFIER', 65546);
define ('U_MISSING_OPERATOR', 65547);
define ('U_MISSING_SEGMENT_CLOSE', 65548);
define ('U_MULTIPLE_ANTE_CONTEXTS', 65549);
define ('U_MULTIPLE_CURSORS', 65550);
define ('U_MULTIPLE_POST_CONTEXTS', 65551);
define ('U_TRAILING_BACKSLASH', 65552);
define ('U_UNDEFINED_SEGMENT_REFERENCE', 65553);
define ('U_UNDEFINED_VARIABLE', 65554);
define ('U_UNQUOTED_SPECIAL', 65555);
define ('U_UNTERMINATED_QUOTE', 65556);
define ('U_RULE_MASK_ERROR', 65557);
define ('U_MISPLACED_COMPOUND_FILTER', 65558);
define ('U_MULTIPLE_COMPOUND_FILTERS', 65559);
define ('U_INVALID_RBT_SYNTAX', 65560);
define ('U_INVALID_PROPERTY_PATTERN', 65561);
define ('U_MALFORMED_PRAGMA', 65562);
define ('U_UNCLOSED_SEGMENT', 65563);
define ('U_ILLEGAL_CHAR_IN_SEGMENT', 65564);
define ('U_VARIABLE_RANGE_EXHAUSTED', 65565);
define ('U_VARIABLE_RANGE_OVERLAP', 65566);
define ('U_ILLEGAL_CHARACTER', 65567);
define ('U_INTERNAL_TRANSLITERATOR_ERROR', 65568);
define ('U_INVALID_ID', 65569);
define ('U_INVALID_FUNCTION', 65570);
define ('U_PARSE_ERROR_LIMIT', 65571);
define ('U_UNEXPECTED_TOKEN', 65792);
define ('U_FMT_PARSE_ERROR_START', 65792);
define ('U_MULTIPLE_DECIMAL_SEPARATORS', 65793);
define ('U_MULTIPLE_DECIMAL_SEPERATORS', 65793);
define ('U_MULTIPLE_EXPONENTIAL_SYMBOLS', 65794);
define ('U_MALFORMED_EXPONENTIAL_PATTERN', 65795);
define ('U_MULTIPLE_PERCENT_SYMBOLS', 65796);
define ('U_MULTIPLE_PERMILL_SYMBOLS', 65797);
define ('U_MULTIPLE_PAD_SPECIFIERS', 65798);
define ('U_PATTERN_SYNTAX_ERROR', 65799);
define ('U_ILLEGAL_PAD_POSITION', 65800);
define ('U_UNMATCHED_BRACES', 65801);
define ('U_UNSUPPORTED_PROPERTY', 65802);
define ('U_UNSUPPORTED_ATTRIBUTE', 65803);
define ('U_FMT_PARSE_ERROR_LIMIT', 65810);
define ('U_BRK_INTERNAL_ERROR', 66048);
define ('U_BRK_ERROR_START', 66048);
define ('U_BRK_HEX_DIGITS_EXPECTED', 66049);
define ('U_BRK_SEMICOLON_EXPECTED', 66050);
define ('U_BRK_RULE_SYNTAX', 66051);
define ('U_BRK_UNCLOSED_SET', 66052);
define ('U_BRK_ASSIGN_ERROR', 66053);
define ('U_BRK_VARIABLE_REDFINITION', 66054);
define ('U_BRK_MISMATCHED_PAREN', 66055);
define ('U_BRK_NEW_LINE_IN_QUOTED_STRING', 66056);
define ('U_BRK_UNDEFINED_VARIABLE', 66057);
define ('U_BRK_INIT_ERROR', 66058);
define ('U_BRK_RULE_EMPTY_SET', 66059);
define ('U_BRK_UNRECOGNIZED_OPTION', 66060);
define ('U_BRK_MALFORMED_RULE_TAG', 66061);
define ('U_BRK_ERROR_LIMIT', 66062);
define ('U_REGEX_INTERNAL_ERROR', 66304);
define ('U_REGEX_ERROR_START', 66304);
define ('U_REGEX_RULE_SYNTAX', 66305);
define ('U_REGEX_INVALID_STATE', 66306);
define ('U_REGEX_BAD_ESCAPE_SEQUENCE', 66307);
define ('U_REGEX_PROPERTY_SYNTAX', 66308);
define ('U_REGEX_UNIMPLEMENTED', 66309);
define ('U_REGEX_MISMATCHED_PAREN', 66310);
define ('U_REGEX_NUMBER_TOO_BIG', 66311);
define ('U_REGEX_BAD_INTERVAL', 66312);
define ('U_REGEX_MAX_LT_MIN', 66313);
define ('U_REGEX_INVALID_BACK_REF', 66314);
define ('U_REGEX_INVALID_FLAG', 66315);
define ('U_REGEX_LOOK_BEHIND_LIMIT', 66316);
define ('U_REGEX_SET_CONTAINS_STRING', 66317);
define ('U_REGEX_ERROR_LIMIT', 66324);
define ('U_IDNA_PROHIBITED_ERROR', 66560);
define ('U_IDNA_ERROR_START', 66560);
define ('U_IDNA_UNASSIGNED_ERROR', 66561);
define ('U_IDNA_CHECK_BIDI_ERROR', 66562);
define ('U_IDNA_STD3_ASCII_RULES_ERROR', 66563);
define ('U_IDNA_ACE_PREFIX_ERROR', 66564);
define ('U_IDNA_VERIFICATION_ERROR', 66565);
define ('U_IDNA_LABEL_TOO_LONG_ERROR', 66566);
define ('U_IDNA_ZERO_LENGTH_LABEL_ERROR', 66567);
define ('U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR', 66568);
define ('U_IDNA_ERROR_LIMIT', 66569);
define ('U_STRINGPREP_PROHIBITED_ERROR', 66560);
define ('U_STRINGPREP_UNASSIGNED_ERROR', 66561);
define ('U_STRINGPREP_CHECK_BIDI_ERROR', 66562);
define ('U_ERROR_LIMIT', 66818);
define ('IDNA_DEFAULT', 0);
define ('IDNA_ALLOW_UNASSIGNED', 1);
define ('IDNA_USE_STD3_RULES', 2);
define ('IDNA_CHECK_BIDI', 4);
define ('IDNA_CHECK_CONTEXTJ', 8);
define ('IDNA_NONTRANSITIONAL_TO_ASCII', 16);
define ('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);
define ('INTL_IDNA_VARIANT_2003', 0);
define ('INTL_IDNA_VARIANT_UTS46', 1);
define ('IDNA_ERROR_EMPTY_LABEL', 1);
define ('IDNA_ERROR_LABEL_TOO_LONG', 2);
define ('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);
define ('IDNA_ERROR_LEADING_HYPHEN', 8);
define ('IDNA_ERROR_TRAILING_HYPHEN', 16);
define ('IDNA_ERROR_HYPHEN_3_4', 32);
define ('IDNA_ERROR_LEADING_COMBINING_MARK', 64);
define ('IDNA_ERROR_DISALLOWED', 128);
define ('IDNA_ERROR_PUNYCODE', 256);
define ('IDNA_ERROR_LABEL_HAS_DOT', 512);
define ('IDNA_ERROR_INVALID_ACE_LABEL', 1024);
define ('IDNA_ERROR_BIDI', 2048);
define ('IDNA_ERROR_CONTEXTJ', 4096);
class IntlBreakIterator implements Traversable {
    const  DONE = -1;
    const  WORD_NONE = 0;
    const  WORD_NONE_LIMIT = 100;
    const  WORD_NUMBER = 100;
    const  WORD_NUMBER_LIMIT = 200;
    const  WORD_LETTER = 200;
    const  WORD_LETTER_LIMIT = 300;
    const  WORD_KANA = 300;
    const  WORD_KANA_LIMIT = 400;
    const  WORD_IDEO = 400;
    const WORD_IDEO_LIMIT = 500;
    const  LINE_SOFT = 0;
    const  LINE_SOFT_LIMIT = 100;
    const  LINE_HARD = 100;
    const  LINE_HARD_LIMIT = 200;
    const  SENTENCE_TERM = 0;
    const  SENTENCE_TERM_LIMIT = 100;
    const  SENTENCE_SEP = 100;
    const  SENTENCE_SEP_LIMIT = 200;
    private function __construct() { }
    public static function  createCharacterInstance($locale) { }
    public static function createCodePointInstance() { }
    public static function createLineInstance($locale) { }
    public static function createSentenceInstance($locale) { }
    public static function createTitleInstance($locale) { }
    public static function createWordInstance($locale) { }
    public function current() { }
    public function first() { }
    public function following($offset) { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
    public function getLocale($locale_type) { }
    public function getPartsIterator($key_type) { }
    public function getText() { }
    public function isBoundary($offset) { }
    public function last() { }
    public function next($offset) { }
    public function preceding($offset) { }
    public function previous() { }
    public function setText($text) { }
}
class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable {
    public function __construct($rules, $areCompiled) { }
    public static function  createCharacterInstance($locale) { }
    /*
     * (PHP 5 &gt;=5.5.0)<br/>
     * Create break iterator for boundaries of code points
     * @link http://www.php.net/manual/en/intlbreakiterator.createcodepointinstance.php
     * @return IntlRuleBasedBreakIterator
     */
    public static function createCodePointInstance() { }
    public static function createLineInstance($locale) { }
    public static function createSentenceInstance($locale) { }
    public static function createTitleInstance($locale) { }
    public static function createWordInstance($locale) { }
    public function getBinaryRules() { }
    public function getRules() { }
    public function getRuleStatus() { }
    public function getRuleStatusVec() { }
}
class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable {
    public function getLastCodePoint() { }
}
class UConverter {
    const REASON_UNASSIGNED = 0;
    const REASON_ILLEGAL = 1;
    const REASON_IRREGULAR = 2;
    const REASON_RESET = 3;
    const REASON_CLOSE = 4;
    const REASON_CLONE = 5;
    const UNSUPPORTED_CONVERTER = -1;
    const SBCS = 0;
    const DBCS = 1;
    const MBCS = 2;
    const LATIN_1 = 3;
    const UTF8 = 4;
    const UTF16_BigEndian = 5;
    const UTF16_LittleEndian = 6;
    const UTF32_BigEndian = 7;
    const UTF32_LittleEndian = 8;
    const EBCDIC_STATEFUL = 9;
    const ISO_2022 = 10;
    const LMBCS_1 = 11;
    const LMBCS_2 = 12;
    const LMBCS_3 = 13;
    const LMBCS_4 = 14;
    const LMBCS_5 = 15;
    const LMBCS_6 = 16;
    const LMBCS_8 = 17;
    const LMBCS_11 = 18;
    const LMBCS_16 = 19;
    const LMBCS_17 = 20;
    const LMBCS_18 = 21;
    const LMBCS_19 = 22;
    const LMBCS_LAST = 22;
    const HZ = 23;
    const SCSU = 24;
    const ISCII = 25;
    const US_ASCII = 26;
    const UTF7 = 27;
    const BOCU1 = 28;
    const UTF16 = 29;
    const UTF32 = 30;
    const CESU8 = 31;
    const IMAP_MAILBOX = 32;
    public function __construct($destination_encoding = null, $source_encoding = null) { }
    public function convert($str, $reverse) { }
    public function fromUCallback($reason, $source, $codePoint, &$error) { }
    public static function getAliases($name = null) { }
    public static function getAvailable() { }
    public function getDestinationEncoding() { }
    public function getDestinationType() { }
    public function getErrorCode() { }
    public function getErrorMessage() { }
    public function getSourceEncoding() { }
    public function getSourceType() { }
    public static function getStandards() { }
    public function getSubstChars() { }
    public static function reasonText($reason) { }
    public function setDestinationEncoding($encoding) { }
    public function setSourceEncoding($encoding) { }
    public function setSubstChars($chars) { }
    public function toUCallback($reason, $source, $codeUnits, &$error) { }
    public static function transcode($str, $toEncoding, $fromEncoding, array $options = []) { }
}
?>
