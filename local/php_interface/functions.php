<?
Class GarbageStorage{
   private static $storage = array();
   public static function set($name, $value){ self::$storage[$name] = $value;}
   public static function get($name){ return self::$storage[$name];}
}
