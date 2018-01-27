<?php
function shm_attach ($key, $memsize = null, $perm = 0666) {}
function shm_remove ($shm_identifier) {}
function shm_detach ($shm_identifier) {}
function shm_put_var ($shm_identifier, $variable_key, $variable) {}
function shm_has_var ($shm_identifier, $variable_key) {}
function shm_get_var ($shm_identifier, $variable_key) {}
function shm_remove_var ($shm_identifier, $variable_key) {}
?>
