<?php
define('AMQP_NOPARAM', 0);
define('AMQP_DURABLE', 2);
define('AMQP_PASSIVE', 4);
define('AMQP_EXCLUSIVE', 8);
define('AMQP_AUTODELETE', 16);
define('AMQP_INTERNAL', 32);
define('AMQP_NOLOCAL', 64);
define('AMQP_AUTOACK', 128);
define('AMQP_IFEMPTY', 256);
define('AMQP_IFUNUSED', 512);
define('AMQP_MANDATORY', 1024);
define('AMQP_IMMEDIATE', 2048);
define('AMQP_MULTIPLE', 4096);
define('AMQP_NOWAIT', 8192);
define('AMQP_REQUEUE', 16384);
define('AMQP_EX_TYPE_DIRECT', 'direct');
define('AMQP_EX_TYPE_FANOUT', 'fanout');
define('AMQP_EX_TYPE_TOPIC', 'topic');
define('AMQP_EX_TYPE_HEADERS', 'headers');
define('AMQP_OS_SOCKET_TIMEOUT_ERRNO', 536870947);
define('PHP_AMQP_MAX_CHANNELS', 256);
class AMQPChannel
{
    public function __construct(AMQPConnection $amqp_connection) { }
    public function isConnected() { }
    public function getChannelId() { }
    public function setPrefetchSize($size) { }
    public function getPrefetchSize() { }
    public function setPrefetchCount($count) { }
    public function getPrefetchCount() { }
    public function qos($size, $count) { }
    public function startTransaction() { }
    public function commitTransaction() { }
    public function rollbackTransaction() { }
    public function getConnection() { }
    public function basicRecover($requeue = true) { }
}
class AMQPChannelException extends AMQPException
{
}
class AMQPConnection
{
    public function __construct(array $credentials = array()) { }
    public function isConnected() { }
    public function connect() { }
    public function pconnect() { }
    public function pdisconnect() { }
    public function disconnect() { }
    public function reconnect() { }
    public function preconnect() { }
    public function getLogin() { }
    public function setLogin($login) { }
    public function getPassword() { }
    public function setPassword($password) { }
    public function getHost() { }
    public function setHost($host) { }
    public function getPort() { }
    public function setPort($port) { }
    public function getVhost() { }
    public function setVhost($vhost) { }
    public function getTimeout() { }
    public function setTimeout($timeout) { }
    public function getReadTimeout() { }
    public function setReadTimeout($timeout) { }
    public function getWriteTimeout() { }
    public function setWriteTimeout($timeout) { }
    public function getUsedChannels() { }
    public function getMaxChannels() { }
    public function isPersistent() { }
}
class AMQPConnectionException extends AMQPException
{
}
class AMQPEnvelope
{
    public function getBody() { }
    public function getRoutingKey() { }
    public function getDeliveryTag() { }
    public function getDeliveryMode() { }
    public function getExchangeName() { }
    public function isRedelivery() { }
    public function getContentType() { }
    public function getContentEncoding() { }
    public function getType() { }
    public function getTimeStamp() { }
    public function getPriority() { }
    public function getExpiration() { }
    public function getUserId() { }
    public function getAppId() { }
    public function getMessageId() { }
    public function getReplyTo() { }
    public function getCorrelationId() { }
    public function getHeaders() { }
    public function getHeader($header_key) { }
}
class AMQPException extends Exception
{
}
class AMQPExchange
{
    public function __construct(AMQPChannel $amqp_channel) { }
    public function getName() { }
    public function setName($exchange_name) { }
    public function getType() { }
    public function setType($exchange_type) { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function getArgument($key) { }
    public function getArguments() { }
    public function setArgument($key, $value) { }
    public function setArguments(array $arguments) { }
    public function declareExchange() { }
    public function delete($exchangeName = null, $flags = AMQP_NOPARAM) { }
    public function bind($exchange_name, $routing_key = '', array $arguments = array()) { }
    public function unbind($exchange_name, $routing_key = '', array $arguments = array()) { }
    public function publish(
        $message,
        $routing_key = null,
        $flags = AMQP_NOPARAM,
        array $attributes = array()
    ) {
    }
    public function getChannel() { }
    public function getConnection() { }
}
class AMQPExchangeException extends AMQPException
{
}
class AMQPQueue
{
    public function __construct(AMQPChannel $amqp_channel) { }
    public function getName() { }
    public function setName($queue_name) { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function getArgument($key) { }
    public function getArguments() { }
    public function setArgument($key, $value) { }
    public function setArguments(array $arguments) { }
    public function declareQueue() { }
    public function bind($exchange_name, $routing_key = null, array $arguments = array()) { }
    public function get($flags = AMQP_NOPARAM) { }
    public function consume(
        callable $callback = null,
        $flags = AMQP_NOPARAM,
        $consumerTag = null
    ) {
    }
    public function ack($delivery_tag, $flags = AMQP_NOPARAM) { }
    public function nack($delivery_tag, $flags = AMQP_NOPARAM) { }
    public function reject($delivery_tag, $flags = AMQP_NOPARAM) { }
    public function purge() { }
    public function cancel($consumer_tag = '') { }
    public function unbind($exchange_name, $routing_key = null, array $arguments = array()) { }
    public function delete($flags = AMQP_NOPARAM) { }
    public function getChannel() { }
    public function getConnection() { }
}
class AMQPQueueException extends AMQPException
{
}
