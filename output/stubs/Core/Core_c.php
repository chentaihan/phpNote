<?php
class stdClass {
}
interface iterable {}
interface Traversable extends iterable {
}
interface IteratorAggregate extends Traversable {
    public function getIterator();
}
interface Iterator extends Traversable {
    public function current();
    public function next();
    public function key();
    public function valid();
    public function rewind();
}
interface ArrayAccess {
    public function offsetExists($offset);
    public function offsetGet($offset);
    public function offsetSet($offset, $value);
    public function offsetUnset($offset);
}
interface Serializable {
    public function serialize();
    public function unserialize($serialized);
}
interface Throwable
{
    public function getMessage();
    public function getCode();
    public function getFile();
    public function getLine();
    public function getTrace();
    public function getTraceAsString();
    public function getPrevious();
    public function __toString();
}
class Exception implements Throwable {
    protected $message;
    protected $code;
    protected $file;
    protected $line;
    final private function __clone() { }
    public function __construct($message = "", $code = 0, Throwable $previous = null) { }
    final public function getMessage() { }
    final public function getCode() { }
    final public function getFile() { }
    final public function getLine() { }
    final public function getTrace() { }
    final public function getPrevious() { }
    final public function getTraceAsString() { }
    public function __toString() { }
}
class Error implements Throwable {
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
    }
    public function getMessage()
    {
    }
    public function getCode(){}
    public function getFile(){}
    public  function getLine(){}
    public function getTrace(){}
    public function getTraceAsString(){}
    public function getPrevious(){}
    public function __toString(){}
}
class TypeError extends Error {
}
class ParseError extends Error {
}
class AssertionError extends Error {
}
class ArithmeticError extends Error {
}
class DivisionByZeroError extends Error {
}
class ErrorException extends Exception {
    protected $severity;
    public function __construct($message = "", $code = 0, $severity = 1, $filename = __FILE__, $lineno = __LINE__, $previous) { }
    final public function getSeverity() { }
}
final class Closure {
    private function __construct() { }
    public function __invoke(...$_) { }
    function bindTo($newthis, $newscope = 'static') { }
    static function bind(Closure $closure, $newthis, $newscope = 'static') { }
    function call ($newThis, ...$parameters) {}
    public static function fromCallable (callable $callable) {}
}
