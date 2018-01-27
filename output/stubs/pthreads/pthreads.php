<?php
define('PTHREADS_INHERIT_ALL', 1118481);
define('PTHREADS_INHERIT_NONE', 0);
define('PTHREADS_INHERIT_INI', 1);
define('PTHREADS_INHERIT_CONSTANTS', 16);
define('PTHREADS_INHERIT_CLASSES', 4096);
define('PTHREADS_INHERIT_FUNCTIONS', 256);
define('PTHREADS_INHERIT_INCLUDES', 65536);
define('PTHREADS_INHERIT_COMMENTS', 1048576);
define('PTHREADS_ALLOW_HEADERS', 16777216);
class Pool {
    protected $size;
    protected $class;
    protected $ctor;
    protected $workers;
    protected $work;
    protected $last;
    public function __construct( $size, $class, $ctor=[] ) {}
    public function collect( $collector ) {}
    public function resize( $size ) {}
    public function shutdown() {}
    public function submit( $task ) {}
    public function submitTo( $worker, $task ) {}
}
class Threaded implements Traversable, Countable, ArrayAccess {
    protected $worker;
    public function chunk( $size, $preserve ) {}
    public function count() {}
    public function getTerminationInfo() {}
    public function isRunning() {}
    public function isTerminated() {}
    public function isWaiting() {}
    public function lock() {}
    public function merge( $from, $overwrite = null ) {}
    public function notify() {}
    public function pop() {}
    public function run() {}
    public function shift() {}
    public function synchronized( $block, $_ = null ) {}
    public function unlock() {}
    public function wait( $timeout = 0 ) {}
    public function offsetExists($offset) {
    }
    public function offsetGet($offset) {
    }
    public function offsetSet($offset, $value) {
    }
    public function offsetUnset($offset) {
    }
}
class Stackable extends Threaded implements Traversable, Countable, ArrayAccess {
}
class Thread extends Threaded implements Traversable, Countable, ArrayAccess {
    public function detach() {}
    public function getCreatorId() {}
    public static function getCurrentThread() {}
    public static function getCurrentThreadId() {}
    public function getThreadId() {}
    public static function globally() {}
    public function isJoined() {}
    public function isStarted() {}
    public function join() {}
    public function kill() {}
    public function start( $options = 0 ) {}
}
class Worker extends Thread implements Traversable, Countable, ArrayAccess {
    public function getStacked() {}
    public function isShutdown() {}
    public function isWorking() {}
    public function shutdown() {}
    public function stack( &$work ) {}
    public function unstack( &$work = null ) {}
}
class Mutex {
    final public static function create ( $lock = false ) {}
    final public static function destroy( $mutex ) {}
    final public static function lock( $mutex ) {}
    final public static function trylock( $mutex ) {}
    final public static function unlock( $mutex, $destroy = false ) {}
}
class Cond {
    final public static function broadcast( $condition ) {}
    final public static function create() {}
    final public static function destroy( $condition ) {}
    final public static function signal( $condition ) {}
    final public static function wait( $condition, $mutex, $timeout = 0 ) {}
}
