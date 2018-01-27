<?php
abstract class SplType {
    const __default = null;
    public function __construct ($initial_value = self::__default, $strict = true ){ }
}
class SplInt extends SplType {
    const __default = 0 ;
}
class SplFloat extends SplType {
    const __default = 0 ;
}
class SplEnum extends SplType {
    const __default = null ;
    public function getConstList ($include_default = false) {}
}
class SplBool extends SplEnum {
    const __default = false ;
    const false = false ;
    const true = true ;
}
class SplString extends SplType {
    const __default = 0 ;
}
