<?php



class Facade
{
   protected static $container='person';
   public static function __callStatic($name, $args){
    $person=ServesContener::make(self::$container);
    return $person->$name(...$args); //... argumanet defernces
   }
   public function __get($name){

   }
   public function __set($name,$value){

   }
   public function __tostring(){
      return "hello";

   }
}
