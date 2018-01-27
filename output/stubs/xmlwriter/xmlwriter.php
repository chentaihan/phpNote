<?php
class XMLWriter  {
	public function openURI ($uri) {}
	public function openMemory () {}
	public function setIndent ($indent) {}
	public function setIndentString ($indentString) {}
	public function startComment () {}
	public function endComment () {}
	public function startAttribute ($name) {}
	public function endAttribute () {}
	public function writeAttribute ($name, $value) {}
	public function startAttributeNS ($prefix, $name, $uri) {}
	public function writeAttributeNS ($prefix, $name, $uri, $content) {}
	public function startElement ($name) {}
	public function endElement () {}
	public function fullEndElement () {}
	public function startElementNS ($prefix, $name, $uri) {}
	public function writeElement ($name, $content = null) {}
	public function writeElementNS ($prefix, $name, $uri, $content = null) {}
	public function startPI ($target) {}
	public function endPI () {}
	public function writePI ($target, $content) {}
	public function startCData () {}
	public function endCData () {}
	public function writeCData ($content) {}
	public function text ($content) {}
	public function writeRaw ($content) {}
	public function startDocument ($version = '1.0', $encoding = null, $standalone = null) {}
	public function endDocument () {}
	public function writeComment ($content) {}
	public function startDTD ($qualifiedName, $publicId = null, $systemId = null) {}
	public function endDTD () {}
	public function writeDTD ($name, $publicId = null, $systemId = null, $subset = null) {}
	public function startDTDElement ($qualifiedName) {}
	public function endDTDElement () {}
	public function writeDTDElement ($name, $content) {}
	public function startDTDAttlist ($name) {}
	public function endDTDAttlist () {}
	public function writeDTDAttlist ($name, $content) {}
	public function startDTDEntity ($name, $isparam) {}
	public function endDTDEntity () {}
	public function writeDTDEntity ($name, $content, $pe, $pubid, $sysid, $ndataid) {}
	public function outputMemory ($flush = true) {}
	public function flush ($empty = true) {}
}
function xmlwriter_open_uri ($uri) {}
function xmlwriter_open_memory () {}
function xmlwriter_set_indent ($indent) {}
function xmlwriter_set_indent_string ($indentString) {}
function xmlwriter_start_comment ($xmlwriter) {}
function xmlwriter_end_comment ($xmlwriter) {}
function xmlwriter_start_attribute ($name) {}
function xmlwriter_end_attribute ($xmlwriter) {}
function xmlwriter_write_attribute ($name, $value) {}
function xmlwriter_start_attribute_ns ($prefix, $name, $uri) {}
function xmlwriter_write_attribute_ns ($prefix, $name, $uri, $content) {}
function xmlwriter_start_element ($name) {}
function xmlwriter_end_element ($xmlwriter) {}
function xmlwriter_full_end_element ($xmlwriter) {}
function xmlwriter_start_element_ns ($prefix, $name, $uri) {}
function xmlwriter_write_element ($name, $content = null) {}
function xmlwriter_write_element_ns ($prefix, $name, $uri, $content = null) {}
function xmlwriter_start_pi ($target) {}
function xmlwriter_end_pi ($xmlwriter) {}
function xmlwriter_write_pi ($target, $content) {}
function xmlwriter_start_cdata ($xmlwriter) {}
function xmlwriter_end_cdata ($xmlwriter) {}
function xmlwriter_write_cdata ($content) {}
function xmlwriter_text ($content) {}
function xmlwriter_write_raw ($content) {}
function xmlwriter_start_document ($version = '1.0', $encoding = null, $standalone = null) {}
function xmlwriter_end_document ($xmlwriter) {}
function xmlwriter_write_comment ($content) {}
function xmlwriter_start_dtd ($qualifiedName, $publicId = null, $systemId = null) {}
function xmlwriter_end_dtd ($xmlwriter) {}
function xmlwriter_write_dtd ($name, $publicId = null, $systemId = null, $subset = null) {}
function xmlwriter_start_dtd_element ($qualifiedName) {}
function xmlwriter_end_dtd_element ($xmlwriter) {}
function xmlwriter_write_dtd_element ($name, $content) {}
function xmlwriter_start_dtd_attlist ($name) {}
function xmlwriter_end_dtd_attlist ($xmlwriter) {}
function xmlwriter_write_dtd_attlist ($name, $content) {}
function xmlwriter_start_dtd_entity ($name, $isparam) {}
function xmlwriter_end_dtd_entity ($xmlwriter) {}
function xmlwriter_write_dtd_entity ($name, $content, $pe, $pubid, $sysid, $ndataid) {}
function xmlwriter_output_memory ($flush = true) {}
function xmlwriter_flush ($empty = true) {}
