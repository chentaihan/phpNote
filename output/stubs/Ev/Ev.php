<?php
final class Ev
{
    const FLAG_AUTO = 0;
    const FLAG_NOENV = 16777216;
    const FLAG_FORKCHECK = 33554432;
    const FLAG_NOINOTIFY = 1048576;
    const FLAG_SIGNALFD = 2097152;
    const FLAG_NOSIGMASK = 4194304;
    const RUN_NOWAIT = 1;
    const RUN_ONCE = 2;
    const BREAK_CANCEL = 0;
    const BREAK_ONE = 1;
    const BREAK_ALL = 2;
    const MINPRI = -2;
    const MAXPRI = 2;
    const READ = 1;
    const WRITE = 2;
    const TIMER = 256;
    const PERIODIC = 512;
    const SIGNAL = 1024;
    const CHILD = 2048;
    const STAT = 4096;
    const IDLE = 8192;
    const PREPARE = 16384;
    const CHECK = 32768;
    const EMBED = 65536;
    const CUSTOM = 16777216;
    const ERROR = 2147483648;
    const BACKEND_SELECT = 1;
    const BACKEND_POLL = 2;
    const BACKEND_EPOLL = 4;
    const BACKEND_KQUEUE = 8;
    const BACKEND_DEVPOLL = 16;
    const BACKEND_PORT = 32;
    const BACKEND_ALL = 63;
    const BACKEND_MASK = 65535;
    final public static function backend() {}
    final public static function depth() {}
    final public static function embeddableBackends() {}
    final public static function feedSignal($signum) {}
    final public static function feedSignalEvent($signum) {}
    final public static function iteration() {}
    final public static function now() {}
    final public static function nowUpdate() {}
    final public static function recommendedBackends() {}
    final public static function resume() {}
    final public static function run($flags = self::FLAG_AUTO) {}
    final public static function sleep($seconds) {}
    final public static function stop($how = self::BREAK_ONE) {}
    final public static function supportedBackends() {}
    final public static function suspend() {}
    final public static function time() {}
    final public static function verify() {}
}
abstract class EvWatcher
{
    public $data;
    public $priority;
    public function clear() {}
    public function feed($events) {}
    public function getLoop() {}
    public function invoke($events) {}
    public function keepAlive($value) {}
    public function setCallback(callable $callback) {}
    public function start() {}
    public function stop() {}
}
final class EvCheck extends EvWatcher
{
    public function __construct(callable $callback, $data = null, $priority = 0) {}
    final public static function createStopped(callable $callback, $data = null, $priority = 0) {}
}
final class EvChild extends EvWatcher
{
    public function __construct($pid, $trace, callable $callback, $data = null, $priority = 0) {}
    final public static function createStopped($pid, $trace, callable $callback, $data = null, $priority = 0) {}
    public function set($pid, $trace) {}
}
final class EvEmbed extends EvWatcher
{
    public function __construct(EvLoop $embed, callable $callback, $data = null, $priority = 0) {}
    public function set(EvLoop $embed) {}
    public function sweep() {}
    final public static function createStopped(EvLoop $embed, callable $callback, $data = null, $priority = 0) {}
}
final class EvIo extends EvWatcher
{
    public function __construct($fd, $events, callable $callback, $data = null, $priority = 0) {}
    public function set($fd, $events) {}
    final public static function createStopped($fd, $events, callable $callback, $data = null, $priority = 0) {}
}
final class EvPeriodic extends EvWatcher
{
    public $offset;
    public $interval;
    public function __construct(
        $offset, $interval, callable $reschedule_cb = null, callable $callback, $data = null, $priority = 0
    ) {}
    public function again() {}
    public function at() {}
    final public static function createStopped(
        $offset, $interval, callable $reschedule_cb = null, callable $callback, $data = null, $priority = 0
    ) {}
}
final class EvPrepare extends EvWatcher
{
    public function __construct(callable $callback, $data = null, $priority = 0) {}
    final public static function createStopped(callable $callback, $data = null, $priority = 0) {}
}
final class EvSignal extends EvWatcher
{
    public function __construct($signum, callable $callback, $data = null, $priority = 0) {}
    public function set($signum) {}
    final public static function createStopped($signum, callable $callback, $data = null, $priority = 0) {}
}
final class EvStat extends EvWatcher
{
    public function __construct($path, $interval, callable $callback, $data = null, $priority = 0) {}
    public function attr() {}
    public function prev() {}
    public function set($path, $interval) {}
    public function stat() {}
    final public static function createStopped($path, $interval, callable $callback, $data = null, $priority = 0) {}
}
final class EvTimer extends EvWatcher
{
    public $repeat;
    public $remaining;
    public function __construct($after, $repeat, callable $callback, $data = null, $priority = 0) {}
    public function again() {}
    public function set($after, $repeat) {}
    final public static function createStopped($after, $repeat, callable $callback, $data = null, $priority = 0) {}
}
final class EvIdle extends EvWatcher
{
    public function __construct(callable $callback, $data = null, $priority = 0) {}
    final public static function createStopped(callable $callback, $data = null, $priority = 0) {}
}
final class EvFork extends EvWatcher
{
    public function __construct(callable $callback, $data = null, $priority = 0) {}
    final public static function createStopped(callable $callback, $data = null, $priority = 0) {}
}
final class EvLoop
{
    public $data;
    public $iteration;
    public $pending;
    public $io_interval;
    public $timeout_interval;
    public $depth;
    public function __construct($flags = Ev::FLAG_AUTO, $data = null, $io_interval = 0.0, $timeout_interval = 0.0) {}
    public function backend() {}
    public function check(callable $callback, $data = null, $priority = 0) {}
    public function child($pid, $trace, callable $callback, $data = null, $priority = 0) {}
    public function embed(EvLoop $other, callable $callback, $data = null, $priority = 0) {}
    public function fork(callable $callback, $data = null, $priority = 0) {}
    public function idle(callable $callback, $data = null, $priority = 0) {}
    public function invokePending() {}
    public function io($fd, $events, callable $callback, $data = null, $priority = 0) {}
    public function loopFork() {}
    public function now() {}
    public function nowUpdate() {}
    public function periodic($offset, $interval, callable $callback, $data = null, $priority = 0) {}
    public function prepare(callable $callback, $data = null, $priority = 0) {}
    public function resume() {}
    public function run($flags = Ev::FLAG_AUTO) {}
    public function signal($signal, callable $callback, $data = null, $priority = 0) {}
    public function stat($path, $interval, callable $callback, $data = null, $priority = 0) {}
    public function stop($how = Ev::BREAK_ALL) {}
    public function suspend() {}
    public function timer($after, $repeat, callable $callback, $data = null, $priority = 0) {}
    public function verify() {}
    public static function defaultLoop(
        $flags = Ev::FLAG_AUTO, $data = null, $io_interval = 0.0, $timeout_interval = 0.0
    ) {}
}
