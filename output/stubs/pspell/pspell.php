<?php
function pspell_new ($language, $spelling = null, $jargon = null, $encoding = null, $mode = 0) {}
function pspell_new_personal ($personal, $language, $spelling = null, $jargon = null, $encoding = null, $mode = 0) {}
function pspell_new_config ($config) {}
function pspell_check ($dictionary_link, $word) {}
function pspell_suggest ($dictionary_link, $word) {}
function pspell_store_replacement ($dictionary_link, $misspelled, $correct) {}
function pspell_add_to_personal ($dictionary_link, $word) {}
function pspell_add_to_session ($dictionary_link, $word) {}
function pspell_clear_session ($dictionary_link) {}
function pspell_save_wordlist ($dictionary_link) {}
function pspell_config_create ($language, $spelling = null, $jargon = null, $encoding = null) {}
function pspell_config_runtogether ($dictionary_link, $flag) {}
function pspell_config_mode ($dictionary_link, $mode) {}
function pspell_config_ignore ($dictionary_link, $n) {}
function pspell_config_personal ($dictionary_link, $file) {}
function pspell_config_dict_dir ($conf, $directory) {}
function pspell_config_data_dir ($conf, $directory) {}
function pspell_config_repl ($dictionary_link, $file) {}
function pspell_config_save_repl ($dictionary_link, $flag) {}
define ('PSPELL_FAST', 1);
define ('PSPELL_NORMAL', 2);
define ('PSPELL_BAD_SPELLERS', 3);
define ('PSPELL_RUN_TOGETHER', 8);
?>
