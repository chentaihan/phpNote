<?php
class DOMNode  {
    public $nodeName;
    public $nodeValue;
    public $nodeType;
    public $parentNode;
    public $childNodes;
    public $firstChild;
    public $lastChild;
    public $previousSibling;
    public $nextSibling;
    public $attributes;
    public $ownerDocument;
    public $namespaceURI;
    public $prefix;
    public $localName;
    public $baseURI;
    public $textContent;
    public function insertBefore (DOMNode $newnode, DOMNode $refnode = null) {}
    public function replaceChild (DOMNode $newnode , DOMNode $oldnode ) {}
    public function removeChild (DOMNode $oldnode ) {}
    public function appendChild (DOMNode $newnode ) {}
    public function hasChildNodes () {}
    public function cloneNode ($deep = null) {}
    public function normalize () {}
    public function isSupported ($feature, $version) {}
    public function hasAttributes () {}
    public function compareDocumentPosition (DOMNode $other) {}
    public function isSameNode (DOMNode $node ) {}
    public function lookupPrefix ($namespaceURI) {}
    public function isDefaultNamespace ($namespaceURI) {}
    public function lookupNamespaceUri ($prefix) {}
    public function isEqualNode (DOMNode $arg) {}
    public function getFeature ($feature, $version) {}
    public function setUserData ($key, $data, $handler) {}
    public function getUserData ($key) {}
    public function getNodePath () {}
     public function getLineNo () {}
    public function C14N ($exclusive, $with_comments, array $xpath = null, $ns_prefixes = null) {}
    public function C14NFile ($uri, $exclusive, array $with_comments, array $xpath = null, $ns_prefixes = null) {}
}
class DOMException extends Exception  {
    public $code;
}
class DOMStringList  {
        public function item ($index) {}
}
class DOMNameList  {
        public function getName ($index) {}
        public function getNamespaceURI ($index) {}
}
class DOMImplementationList  {
        public function item ($index) {}
}
class DOMImplementationSource  {
        public function getDomimplementation ($features) {}
        public function getDomimplementations ($features) {}
}
class DOMImplementation  {
    public function __construct(){}
    public function getFeature ($feature, $version) {}
	public function hasFeature ($feature, $version) {}
    public function createDocumentType ($qualifiedName = null, $publicId = null, $systemId = null) {}
    public function createDocument ($namespaceURI = null, $qualifiedName = null, DOMDocumentType $doctype = null) {}
}
class DOMNameSpaceNode  {
}
class DOMDocumentFragment extends DOMNode  {
    public function __construct () {}
    public function appendXML ($data) {}
}
class DOMDocument extends DOMNode  {
    public $actualEncoding;
    public $config;
    public $doctype;
    public $documentElement;
    public $documentURI ;
    public $encoding ;
    public $formatOutput ;
    public $implementation ;
    public $preserveWhiteSpace = true ;
    public $recover ;
    public $resolveExternals ;
    public $standalone ;
    public $strictErrorChecking = true ;
    public $substituteEntities ;
    public $validateOnParse = false ;
    public $version ;
    public $xmlEncoding ;
    public $xmlStandalone ;
    public $xmlVersion ;
    public function createElement ($name, $value = null) {}
    public function createDocumentFragment () {}
    public function createTextNode ($content) {}
    public function createComment ($data) {}
    public function createCDATASection ($data) {}
    public function createProcessingInstruction ($target, $data = null) {}
    public function createAttribute ($name) {}
    public function createEntityReference ($name) {}
    public function getElementsByTagName ($name) {}
    public function importNode (DOMNode $importedNode , $deep = null) {}
    public function createElementNS ($namespaceURI, $qualifiedName, $value = null) {}
    public function createAttributeNS ($namespaceURI, $qualifiedName) {}
    public function getElementsByTagNameNS ($namespaceURI, $localName) {}
    public function getElementById ($elementId) {}
    public function adoptNode (DOMNode $source) {}
    public function normalizeDocument () {}
    public function renameNode (DOMNode $node, $namespaceURI, $qualifiedName) {}
    public function load ($filename, $options = null) {}
    public function save ($filename, $options = null) {}
    public function loadXML ($source, $options = null) {}
    public function saveXML ($node = null , $options = null) {}
    public function __construct ($version, $encoding) {}
    public function validate () {}
    public function xinclude ($options = null) {}
    public function loadHTML ($source, $options = 0) {}
    public function loadHTMLFile ($filename, $options = 0) {}
    public function saveHTML (DOMNode $node = NULL) {}
    public function saveHTMLFile ($filename) {}
    public function schemaValidate ($filename, $options = null) {}
    public function schemaValidateSource ($source, $flags) {}
    public function relaxNGValidate ($filename) {}
    public function relaxNGValidateSource ($source) {}
    public function registerNodeClass ($baseclass, $extendedclass) {}
}
class DOMNodeList implements Traversable {
    public $length;
        public function item ($index) {}
}
class DOMNamedNodeMap implements Traversable {
    public function getNamedItem ($name) {}
    public function setNamedItem (DOMNode $arg) {}
    public function removeNamedItem ($name) {}
    public function item ($index) {}
    public function getNamedItemNS ($namespaceURI, $localName) {}
    public function setNamedItemNS (DOMNode $arg) {}
    public function removeNamedItemNS ($namespaceURI, $localName) {}
}
class DOMCharacterData extends DOMNode  {
    public $data;
    public $length;
    public function substringData ($offset, $count) {}
    public function appendData ($data) {}
    public function insertData ($offset, $data) {}
    public function deleteData ($offset, $count) {}
    public function replaceData ($offset, $count, $data) {}
}
class DOMAttr extends DOMNode
{
    public $name;
    public $ownerElement;
    public $schemaTypeInfo;
    public $specified;
    public $value;
    public function isId() {}
    public function __construct($name, $value) {}
}
class DOMElement extends DOMNode  {
    public $parentNode;
    public $firstChild;
    public $lastChild;
    public $previousSibling;
    public $nextSibling;
    public $schemaTypeInfo ;
    public $tagName ;
    public function getAttribute ($name) {}
    public function setAttribute ($name, $value) {}
    public function removeAttribute ($name) {}
    public function getAttributeNode ($name) {}
    public function setAttributeNode (DOMAttr $attr) {}
    public function removeAttributeNode (DOMAttr $oldnode) {}
    public function getElementsByTagName ($name) {}
    public function getAttributeNS ($namespaceURI, $localName) {}
    public function setAttributeNS ($namespaceURI, $qualifiedName, $value) {}
    public function removeAttributeNS ($namespaceURI, $localName) {}
    public function getAttributeNodeNS ($namespaceURI, $localName) {}
    public function setAttributeNodeNS (DOMAttr $attr) {}
    public function getElementsByTagNameNS ($namespaceURI, $localName) {}
    public function hasAttribute ($name) {}
    public function hasAttributeNS ($namespaceURI, $localName) {}
    public function setIdAttribute ($name, $isId) {}
    public function setIdAttributeNS ($namespaceURI, $localName, $isId) {}
    public function setIdAttributeNode (DOMAttr $attr, $isId) {}
    public function __construct ($name, $value, $uri) {}
    public function insertBefore (DOMNode $newnode , $refnode = null) {}
    public function replaceChild (DOMNode $newnode , DOMNode $oldnode ) {}
    public function removeChild (DOMNode $oldnode ) {}
}
class DOMText extends DOMCharacterData  {
    public $wholeText;
    public function splitText ($offset) {}
    public function isWhitespaceInElementContent () {}
    public function isElementContentWhitespace () {}
    public function replaceWholeText ($content) {}
    public function __construct ($value) {}
}
class DOMComment extends DOMCharacterData  {
    public function __construct ($value) {}
}
class DOMTypeinfo  {
}
class DOMUserDataHandler  {
    public function handle () {}
}
class DOMDomError  {
}
class DOMErrorHandler  {
    public function handleError (DOMDomError $error) {}
}
class DOMLocator  {
}
class DOMConfiguration  {
    public function setParameter ($name, $value) {}
    public function getParameter ($name) {}
    public function canSetParameter ($name, $value) {}
}
class DOMCdataSection extends DOMText  {
    public function __construct ($value) {}
}
class DOMDocumentType extends DOMNode
{
    public $publicId;
    public $systemId;
    public $name;
    public $entities;
    public $notations;
    public $internalSubset;
}
class DOMNotation  extends DOMNode{
    public $publicId;
    public $systemId;
}
class DOMEntity extends DOMNode  {
    public $publicId ;
    public $systemId ;
    public $notationName ;
    public $actualEncoding ;
    public $encoding ;
    public $version ;
}
class DOMEntityReference extends DOMNode  {
    public function __construct ($name) {}
}
class DOMProcessingInstruction extends DOMNode  {
    public $target;
    public $data;
    public function __construct ($name, $value) {}
}
class DOMStringExtend  {
    public function findOffset16 ($offset32) {}
    public function findOffset32 ($offset16) {}
}
class DOMXPath  {
    public $document;
    public function __construct (DOMDocument $doc) {}
    public function registerNamespace ($prefix, $namespaceURI) {}
    public function query ($expression, $contextnode = null) {}
    public function evaluate ($expression, $contextnode = null) {}
    public function registerPhpFunctions ($restrict = null) {}
}
