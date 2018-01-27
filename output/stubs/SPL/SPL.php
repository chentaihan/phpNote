<?php
class LogicException extends Exception {
}
class BadFunctionCallException extends LogicException {
}
class BadMethodCallException extends BadFunctionCallException {
}
class DomainException extends LogicException {
}
class InvalidArgumentException extends LogicException {
}
class LengthException extends LogicException {
}
class OutOfRangeException extends LogicException {
}
class RuntimeException extends Exception {
}
class OutOfBoundsException extends RuntimeException {
}
class OverflowException extends RuntimeException {
}
class RangeException extends RuntimeException {
}
class UnderflowException extends RuntimeException {
}
class UnexpectedValueException extends RuntimeException {
}
class EmptyIterator implements Iterator, Traversable {
    public function current() { }
    public function next() { }
    public function key() { }
    public function valid() { }
    public function rewind() { }
}
class CallbackFilterIterator extends FilterIterator implements Iterator , Traversable , OuterIterator {
    function __construct(Iterator $iterator , callable $callback) { }
    public function accept() { }
}
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements OuterIterator , Traversable , Iterator , RecursiveIterator {
    function __construct( RecursiveIterator $iterator, $callback ) { }
    public function hasChildren() { }
    public function getChildren() { }
}
interface RecursiveIterator extends Iterator, Traversable {
    public function hasChildren();
    public function getChildren();
}
class RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator {
    const LEAVES_ONLY = 0;
    const SELF_FIRST = 1;
    const CHILD_FIRST = 2;
    const CATCH_GET_CHILD = 16;
    public function __construct(Traversable $iterator, $mode, $flags) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function getDepth() { }
    public function getSubIterator($level) { }
    public function getInnerIterator() { }
    public function beginIteration() { }
    public function endIteration() { }
    public function callHasChildren() { }
    public function callGetChildren() { }
    public function beginChildren() { }
    public function endChildren() { }
    public function nextElement() { }
    public function setMaxDepth($max_depth) { }
    public function getMaxDepth() { }
}
interface OuterIterator extends Iterator, Traversable {
    public function getInnerIterator();
}
class IteratorIterator implements Iterator, Traversable, OuterIterator {
    public function __construct(Traversable $iterator) { }
    public function getInnerIterator() { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
}
abstract class FilterIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {
    abstract public function accept();
    public function __construct(Iterator $iterator) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function getInnerIterator() { }
}
abstract class RecursiveFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator, RecursiveIterator {
    public function __construct(RecursiveIterator $iterator) { }
    public function hasChildren() { }
    public function getChildren() { }
}
class ParentIterator extends RecursiveFilterIterator implements RecursiveIterator, OuterIterator, Traversable, Iterator {
    public function accept() { }
    public function __construct(RecursiveIterator $iterator) { }
    public function hasChildren() { }
    public function getChildren() { }
}
interface Countable {
    public function count();
}
interface SeekableIterator extends Iterator, Traversable {
    public function seek($position);
}
class LimitIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {
    public function __construct(Iterator $iterator, $offset, $count) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function seek($position) { }
    public function getPosition() { }
    public function getInnerIterator() { }
}
class CachingIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator, ArrayAccess, Countable {
    const CALL_TOSTRING = 1;
    const CATCH_GET_CHILD = 16;
    const TOSTRING_USE_KEY = 2;
    const TOSTRING_USE_CURRENT = 4;
    const TOSTRING_USE_INNER = 8;
    const FULL_CACHE = 256;
    public function __construct(Iterator $iterator, $flags = self::CALL_TOSTRING) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function hasNext() { }
    public function __toString() { }
    public function getInnerIterator() { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function offsetGet($index) { }
    public function offsetSet($index, $newval) { }
    public function offsetUnset($index) { }
    public function offsetExists($index) { }
    public function getCache() { }
    public function count() { }
}
class RecursiveCachingIterator extends CachingIterator
    implements Countable, ArrayAccess, Iterator, Traversable, OuterIterator, RecursiveIterator {
    public function __construct(Iterator $iterator, $flags = self::CALL_TOSTRING) { }
    public function hasChildren() { }
    public function getChildren() { }
}
class NoRewindIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {
    public function __construct(Iterator $iterator) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function getInnerIterator() { }
}
class AppendIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {
    public function __construct() { }
    public function append(Iterator $iterator) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function getInnerIterator() { }
    public function getIteratorIndex() { }
    public function getArrayIterator() { }
}
class InfiniteIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {
    public function __construct(Iterator $iterator) { }
    public function next() { }
}
class RegexIterator extends FilterIterator implements Iterator, Traversable, OuterIterator {
    const ALL_MATCHES = 2;
    const GET_MATCH = 1;
    const MATCH = 0;
    const REPLACE = 4;
    const SPLIT = 3;
    const USE_KEY = 1;
    public $replacement;
    public function __construct(Iterator $iterator, $regex, $mode = self::MATCH, $flags = 0, $preg_flags = 0) { }
    public function accept() { }
    public function getMode() { }
    public function setMode($mode) { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function getRegex() {}
    public function getPregFlags() { }
    public function setPregFlags($preg_flags) { }
}
class RecursiveRegexIterator extends RegexIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator {
    public function __construct(RecursiveIterator $iterator, $regex, $mode, $flags, $preg_flags) { }
    public function hasChildren() { }
    public function getChildren() { }
}
class RecursiveTreeIterator extends RecursiveIteratorIterator implements OuterIterator, Traversable, Iterator {
    const BYPASS_CURRENT = 4;
    const BYPASS_KEY = 8;
    const PREFIX_LEFT = 0;
    const PREFIX_MID_HAS_NEXT = 1;
    const PREFIX_MID_LAST = 2;
    const PREFIX_END_HAS_NEXT = 3;
    const PREFIX_END_LAST = 4;
    const PREFIX_RIGHT = 5;
    public function __construct($iterator, $flags = RecursiveTreeIterator::BYPASS_KEY, $caching_it_flags = CachingIterator::CATCH_GET_CHILD,
                                $mode = RecursiveIteratorIterator::SELF_FIRST) { }
    public function rewind() { }
    public function valid() { }
    public function key() { }
    public function current() { }
    public function next() { }
    public function beginIteration() { }
    public function endIteration() { }
    public function callHasChildren() { }
    public function callGetChildren() { }
    public function beginChildren() { }
    public function endChildren() { }
    public function nextElement() { }
    public function getPrefix() { }
    public function setPrefixPart($part, $value) { }
    public function getEntry() { }
    public function getPostfix() { }
}
class ArrayObject implements IteratorAggregate, Traversable, ArrayAccess, Serializable, Countable {
    const STD_PROP_LIST = 1;
    const ARRAY_AS_PROPS = 2;
    public function __construct($input = [], $flags = 0, $iterator_class = "ArrayIterator") { }
    public function offsetExists($index) { }
    public function offsetGet($index) { }
    public function offsetSet($index, $newval) { }
    public function offsetUnset($index) { }
    public function append($value) { }
    public function getArrayCopy() { }
    public function count() { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function asort() { }
    public function ksort() { }
    public function uasort($cmp_function) { }
    public function uksort($cmp_function) { }
    public function natsort() { }
    public function natcasesort() { }
    public function unserialize($serialized) { }
    public function serialize() { }
    public function getIterator() { }
    public function exchangeArray($input) { }
    public function setIteratorClass($iterator_class) { }
    public function getIteratorClass() { }
}
class ArrayIterator implements Iterator, Traversable, ArrayAccess, SeekableIterator, Serializable, Countable {
    const STD_PROP_LIST = 1;
    const ARRAY_AS_PROPS = 2;
    public function __construct($array = array(), $flags = 0) { }
    public function offsetExists($index) { }
    public function offsetGet($index) { }
    public function offsetSet($index, $newval) { }
    public function offsetUnset($index) { }
    public function append($value) { }
    public function getArrayCopy() { }
    public function count() { }
    public function getFlags() { }
    public function setFlags($flags) { }
    public function asort() { }
    public function ksort() { }
    public function uasort($cmp_function) { }
    public function uksort($cmp_function) { }
    public function natsort() { }
    public function natcasesort() { }
    public function unserialize($serialized) { }
    public function serialize() { }
    public function rewind() { }
    public function current() { }
    public function key() { }
    public function next() { }
    public function valid() { }
    public function seek($position) { }
}
class RecursiveArrayIterator extends ArrayIterator
    implements Serializable, SeekableIterator, ArrayAccess, Traversable, Iterator, RecursiveIterator {
    const CHILD_ARRAYS_ONLY = 4;
    public function hasChildren() { }
    public function getChildren() { }
}
function is_iterable($arg) {
}
define ("MT_RAND_PHP", 1);
?>
