<?php
interface DateTimeInterface {
    public function diff($datetime2, $absolute = false);
    public function format($format);
    public function getOffset();
    public function getTimestamp();
    public function getTimezone();
    public function __wakeup();
}
class DateTimeImmutable implements DateTimeInterface {
    public function __construct($time = "now", $timezone = NULL) { }
    public function add(DateInterval $interval) { }
    public static function createFromFormat($format, $time, DateTimeZone $timezone) { }
    public static function createFromMutable(DateTime $dateTime) { }
    public static function getLastErrors() { }
    public function modify($modify) { }
    public static function __set_state(array $array) { }
    public function setDate($year, $month, $day) { }
    public function setISODate($year, $week, $day = 1) { }
    public function setTime($hour, $minute, $second = 0, $microseconds = 0) { }
    public function setTimestamp($unixtimestamp) { }
    public function setTimezone(DateTimeZone $timezone) { }
    public function sub(DateInterval $interval) { }
    public function diff($datetime2, $absolute = false) { }
    public function format($format) { }
    public function getOffset() { }
    public function getTimestamp() { }
    public function getTimezone() { }
    public function __wakeup() { }
}
class DateTime implements DateTimeInterface {
    const ATOM = 'Y-m-d\TH:i:sP';
    const COOKIE = 'l, d-M-y H:i:s T';
    const ISO8601 = 'Y-m-d\TH:i:sO';
    const RFC822 = 'D, d M y H:i:s O';
    const RFC850 = 'l, d-M-y H:i:s T';
    const RFC1036 = 'D, d M y H:i:s O';
    const RFC1123 = 'D, d M Y H:i:s O';
    const RFC2822 = 'D, d M Y H:i:s O';
    const RFC3339 = 'Y-m-d\TH:i:sP';
    const RSS = 'D, d M Y H:i:s O';
    const W3C = 'Y-m-d\TH:i:sP';
    public function __construct ($time='now', DateTimeZone $timezone=null) {}
    public function __wakeup () {}
    public function format ($format) {}
    public function modify ($modify) {}
    public function add (DateInterval $interval) {}
    public function sub (DateInterval $interval) {}
    public function getTimezone () {}
    public function setTimezone ($timezone) {}
    public function getOffset () {}
    public function setTime ($hour, $minute, $second=0, $microseconds=0) {}
    public function setDate ($year, $month, $day) {}
    public function setISODate ($year, $week, $day=1) {}
    public function setTimestamp ($unixtimestamp) {}
    public function getTimestamp () {}
    public function diff ($datetime2, $absolute = false) {}
    public static function createFromFormat ($format, $time, DateTimeZone $timezone=null) {}
    public static function getLastErrors () {}
    public static function __set_state ($array) {}
}
class DateTimeZone {
    const AFRICA = 1;
    const AMERICA = 2;
    const ANTARCTICA = 4;
    const ARCTIC = 8;
    const ASIA = 16;
    const ATLANTIC = 32;
    const AUSTRALIA = 64;
    const EUROPE = 128;
    const INDIAN = 256;
    const PACIFIC = 512;
    const UTC = 1024;
    const ALL = 2047;
    const ALL_WITH_BC = 4095;
    const PER_COUNTRY = 4096;
    public function __construct ($timezone) {}
    public function getName () {}
    public function getLocation () {}
    public function getOffset (DateTime $datetime) {}
    public function getTransitions ($timestamp_begin=null, $timestamp_end=null) {}
    public static function listAbbreviations () {}
    public static function listIdentifiers ($what=DateTimeZone::ALL, $country=null) {}
}
class DateInterval {
    public $y;
    public $m;
    public $d;
    public $h;
    public $i;
    public $s;
    public $invert;
    public $days;
    public function __construct ($interval_spec) {}
    public function format ($format) {}
    public static function createFromDateString ($time) {}
}
class DatePeriod implements Traversable {
    const EXCLUDE_START_DATE = 1;
    public function __construct (DateTimeInterface $start, DateInterval $interval, DateTimeInterface $end, $options=0) {}
    public function __construct (DateTimeInterface $start, DateInterval $interval, $recurrences, $options=0) {}
    public function __construct ($isostr, $options=0) {}
    public function getDateInterval () {}
    public function getEndDate () {}
    public function getStartDate () {}
}
