<?php
function enchant_broker_init () {}
function enchant_broker_free ($broker) {}
function enchant_broker_get_error ($broker) {}
function enchant_broker_set_dict_path ($broker, $name, $value) {}
function enchant_broker_get_dict_path ($broker, $name) {}
function enchant_broker_list_dicts ($broker) {}
function enchant_broker_request_dict ($broker, $tag) {}
function enchant_broker_request_pwl_dict ($broker, $filename) {}
function enchant_broker_free_dict ($dict) {}
function enchant_broker_dict_exists ($broker, $tag) {}
function enchant_broker_set_ordering ($broker, $tag, $ordering) {}
function enchant_broker_describe ($broker) {}
function enchant_dict_check ($dict, $word) {}
function enchant_dict_suggest ($dict, $word) {}
function enchant_dict_add_to_personal ($dict, $word) {}
function enchant_dict_add_to_session ($dict, $word) {}
function enchant_dict_is_in_session ($dict, $word) {}
function enchant_dict_store_replacement ($dict, $mis, $cor) {}
function enchant_dict_get_error ($dict) {}
function enchant_dict_describe ($dict) {}
function enchant_dict_quick_check ($dict, $word, array &$suggestions = null) {}
define ('ENCHANT_MYSPELL', 1);
define ('ENCHANT_ISPELL', 2);
?>
