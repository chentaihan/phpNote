<?php
class ZMQ
{
    const SOCKET_PAIR = 0;
    const SOCKET_PUB = 1;
    const SOCKET_SUB = 2;
    const SOCKET_REQ = 3;
    const SOCKET_REP = 4;
    const SOCKET_XREQ = 5;
    const SOCKET_XREP = 6;
    const SOCKET_PUSH = 8;
    const SOCKET_PULL = 7;
    const SOCKET_ROUTER = 6;
    const SOCKET_DEALER = 5;
    const SOCKET_XPUB = 9;
    const SOCKET_XSUB = 10;
    const SOCKET_STREAM = 11;
    const SOCKOPT_HWM = 1;
    const SOCKOPT_SNDHWM = 23;
    const SOCKOPT_RCVHWM = 24;
    const SOCKOPT_AFFINITY = 4;
    const SOCKOPT_IDENTITY = 5;
    const SOCKOPT_SUBSCRIBE = 6;
    const SOCKOPT_UNSUBSCRIBE = 7;
    const SOCKOPT_RATE = 8;
    const SOCKOPT_RECOVERY_IVL = 9;
    const SOCKOPT_RECONNECT_IVL = 18;
    const SOCKOPT_RECONNECT_IVL_MAX = 21;
    const SOCKOPT_MCAST_LOOP = 10;
    const SOCKOPT_SNDBUF = 11;
    const SOCKOPT_RCVBUF = 12;
    const SOCKOPT_RCVMORE = 13;
    const SOCKOPT_TYPE = 16;
    const SOCKOPT_LINGER = 17;
    const SOCKOPT_BACKLOG = 19;
    const SOCKOPT_MAXMSGSIZE = 22;
    const SOCKOPT_SNDTIMEO = 28;
    const SOCKOPT_RCVTIMEO = 27;
    const SOCKOPT_IPV4ONLY = 31;
    const SOCKOPT_LAST_ENDPOINT = 32;
    const SOCKOPT_TCP_KEEPALIVE_IDLE = 36;
    const SOCKOPT_TCP_KEEPALIVE_CNT = 35;
    const SOCKOPT_TCP_KEEPALIVE_INTVL = 37;
    const SOCKOPT_DELAY_ATTACH_ON_CONNECT = 39;
    const SOCKOPT_TCP_ACCEPT_FILTER = 38;
    const SOCKOPT_XPUB_VERBOSE = 40;
    const SOCKOPT_ROUTER_RAW = 41;
    const SOCKOPT_IPV6 = 42;
    const CTXOPT_MAX_SOCKETS = 2;
    const POLL_IN = 1;
    const POLL_OUT = 2;
    const MODE_NOBLOCK = 1;
    const MODE_DONTWAIT = 1;
    const MODE_SNDMORE = 2;
    const DEVICE_FORWARDER = 2;
    const DEVICE_QUEUE = 3;
    const DEVICE_STREAMER = 1;
    const ERR_INTERNAL = -99;
    const ERR_EAGAIN = 11;
    const ERR_ENOTSUP = 156384713;
    const ERR_EFSM = 156384763;
    const ERR_ETERM = 156384765;
    private function __construct()
    {
    }
}
class ZMQContext
{
    public function __construct($io_threads = 1, $is_persistent = true)
    {
    }
    public function getOpt($key)
    {
    }
    public function getSocket($type, $persistent_id = null, $on_new_socket = null)
    {
    }
    public function isPersistent()
    {
    }
    public function setOpt($key, $value)
    {
    }
}
class ZMQSocket
{
    public function __construct(ZMQContext $context, $type, $persistent_id = null, $on_new_socket = null)
    {
    }
    public function bind($dsn, $force = false)
    {
    }
    public function connect($dsn, $force = false)
    {
    }
    public function disconnect($dsn)
    {
    }
    public function getEndpoints()
    {
    }
    public function getPersistentId()
    {
    }
    public function getSockOpt($key)
    {
    }
    public function getSocketType()
    {
    }
    public function isPersistent()
    {
    }
    public function recv($mode = 0)
    {
    }
    public function recvMulti($mode = 0)
    {
    }
    public function send($message, $mode = 0)
    {
    }
    public function sendmulti(array $message, $mode = 0)
    {
    }
    public function setSockOpt($key, $value)
    {
    }
    public function unbind($dsn)
    {
    }
}
class ZMQPoll
{
    public function add(ZMQSocket $entry, $type)
    {
    }
    public function clear()
    {
    }
    public function count()
    {
    }
    public function getLastErrors()
    {
    }
    public function poll(array &$readable, array &$writable, $timeout = -1)
    {
    }
    public function remove($item)
    {
    }
}
class ZMQDevice
{
    public function __construct(ZMQSocket $frontend, ZMQSocket $backend, ZMQSocket $listener = null)
    {
    }
    public function getIdleTimeout()
    {
    }
    public function getTimerTimeout()
    {
    }
    public function run()
    {
    }
    public function setIdleCallback($cb_func, $timeout, $user_data)
    {
    }
    public function setIdleTimeout($timeout)
    {
    }
    public function setTimerCallback($cb_func, $timeout, $user_data)
    {
    }
    public function setTimerTimeout($timeout)
    {
    }
}
class ZMQException extends Exception
{
}
class ZMQContextException extends ZMQException
{
}
class ZMQSocketException extends ZMQException
{
}
class ZMQPollException extends ZMQException
{
}
class ZMQDeviceException extends ZMQException
{
}
