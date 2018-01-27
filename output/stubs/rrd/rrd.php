<?php
function rrd_error() {}
function rrd_create($filename, $options) {}
function rrd_fetch($filename, $options) {}
function rrd_first($file, $raaindex = 0) {}
function rrd_graph($filename, $options) {}
function rrd_info($filename) {}
function rrd_last($filename) {}
function rrd_lastupdate($filename) {}
function rrd_restore($xml_file, $rrd_file, $options = array()) {}
function rrd_tune($filename, $options) {}
function rrd_update($filename, $options) {}
function rrd_version() {}
function rrd_xport($options) {}
function rrd_disconnect() {}
class RRDCreator {
    public function addArchive($description) {}
    public function addDataSource($description) {}
    public function __construct($path, $startTime='', $step=0) {}
    public function save() {}
}
class RRDGraph {
    public function __construct($path) {}
    public function save() {}
    public function saveVerbose() {}
    public function setOptions($options) {}
}
class RRDUpdater {
    public function __construct($path) {}
    public function update($values, $time='') {}
}
