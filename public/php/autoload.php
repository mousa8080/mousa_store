<?php

namespace A\B\C;

class Autoloader
{
    public static  function register($classname)
    {
        include __DIR__ . "/" . $classname . ".php";
    }
}
//if static name class SPL_autoload_register(['Autoloader','register']); 
//else not static name class SPL_autoload_register([$a,'register']); 
// $a =new Autoloader();
// SPL_autoload_register([$a,'register']); 
SPL_autoload_register([Autoloader::class, 'register']); 
/*
__call back function
1-> $a object from class Autoloader
2-> register method from class Autoloader
3-> SPL_autoload_register([1->$a,'2->register']);
*/