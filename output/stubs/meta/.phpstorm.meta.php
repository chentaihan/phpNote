<?php
namespace PHPSTORM_META {
  function override($callable, $override) {
    return "override $callable $override";
  }
  function map($map) {
    return "map $argNum $map";
  }
  function type($argNum) {
    return "type $argNum";
  }
  function elementType($argNum) {
    return "elementType $argNum";
  }
  override(\array_shift(0), elementType(0));
  override(\array_reverse(0), elementType(0));
  override(\array_pop(0), elementType(0));
  override(\array_filter(0), type(0));
  override(\array_reduce(0), elementType(0));
  override(\current(0), elementType(0));
  override(\reset(0), elementType(0));
  override(\end(0), elementType(0));
  override(\prev(0), elementType(0));
  override(\next(0), elementType(0));
  override(\iterator_to_array(0), type(0));
}
