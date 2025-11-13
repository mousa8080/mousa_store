<?php 
class ServesContener
{

   protected static $contener=[];
   public static function bind($name,$instance){
    self::$contener[$name]=$instance;
   }
   public static function make($name){
    return self::$contener[$name];
   }


}
