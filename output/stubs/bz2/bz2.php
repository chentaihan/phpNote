<?php
function bzopen ($filename, $mode) {}
function bzread ($bz, $length = 1024) {}
function bzwrite ($bz, $data, $length = null) {}
function bzflush ($bz) {}
function bzclose ($bz) {}
function bzerrno ($bz) {}
function bzerrstr ($bz) {}
function bzerror ($bz) {}
function bzcompress ($source, $blocksize = 4, $workfactor = 0) {}
function bzdecompress ($source, $small = 0) {}
