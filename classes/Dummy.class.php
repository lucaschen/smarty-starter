<?php
  abstract class Dummy {
    protected static $_mStaticMethodReturns = [];

    public static function __callStatic($name, $arguments) {
      return @self::$_mStaticMethodReturns[$name] ?: "";
    }

    public static function setStaticMethodReturn($name, $value) {
      self::$_mStaticMethodReturns[$name] = $value;
    }
  }
