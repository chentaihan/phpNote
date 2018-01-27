<?php
define("PASSWORD_DEFAULT", 1);
define("PASSWORD_BCRYPT", 1);
function password_get_info ($hash) {}
function password_hash ($password, $algo, $options = null) {}
function password_needs_rehash ($hash, $algo, $options = null) {}
function password_verify ($password, $hash) {}
