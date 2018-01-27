<?php
class SimpleXMLElement implements Traversable {
	final public function __construct ($data, $options = 0, $data_is_url = false, $ns = "", $is_prefix = false) {}
    function __get($name) {}
	public function asXML ($filename = null) {}
	public function saveXML ($filename = null) {}
	public function xpath ($path) {}
	public function registerXPathNamespace ($prefix, $ns) {}
	public function attributes ($ns = null, $is_prefix = false) {}
	public function children ($ns = null, $is_prefix = false) {}
	public function getNamespaces ($recursive = false) {}
	public function getDocNamespaces ($recursive = false, $from_root = true) {}
	public function getName () {}
	public function addChild ($name, $value = null, $namespace = null) {}
	public function addAttribute ($name, $value = null, $namespace = null) {}
	public function __toString () {}
	public function count () {}
}
class SimpleXMLIterator extends SimpleXMLElement implements Traversable, RecursiveIterator, Iterator, Countable {
	public function rewind () {}
	public function valid () {}
	public function current () {}
	public function key () {}
	public function next () {}
	public function hasChildren () {}
	public function getChildren () {}
	public function __toString () {}
	public function count () {}
}
function simplexml_load_file ($filename, $class_name = "SimpleXMLElement", $options = 0, $ns = "", $is_prefix = false) {}
function simplexml_load_string ($data, $class_name = "SimpleXMLElement", $options = 0, $ns = "", $is_prefix = false) {}
function simplexml_import_dom (DOMNode $node, $class_name = "SimpleXMLElement") {}
