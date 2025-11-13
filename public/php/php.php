<?php

/**
 * Summary of namespace 
 * name spase  there is global name space and private name space 
 * global name space is :  we represent it by \ and call this name space  direct her name this function or class 
 * private name space is : we represent it by \A\ example or \B\ example as example we call this her name name space like (use B\Person ;)or use function B\hello; or (use const B\LARAVEL;)
 */

namespace A;
use A\B\Person;
use Facade;
use ServesContener;
use function \A\B\hello;
use const \A\B\LARAVEL;

include __DIR__ . "/autoload.php";

$person=new Person("John", Person::MALE, 25, "USA");
ServesContener::bind('person',$person);
Facade::setName('ahmed');
echo "Name: " . Facade::getName() . "<br>";




exit();
//________________________________________
$person = new \A\B\Person("John", \A\B\Person::MALE, 25, "USA");
//________________________________________

if($person instanceof \B\Person){
    echo " yes  instance of \A\B\Person";
}

echo "<br>";
//________________________________________
$personB = new \B\Person("noha",     \B\Person::FEMALE, 25, "EGYPT");
//________________________________________
echo "<br>";
echo "<br>";
hello();
//________________________________________
// $person2 = new \B\Person("noha",     \B\Person::FEMALE, 25, "EGYPT");
//________________________________________
$person->setName("AHMED")->setGender(\A\B\Person::FEMALE)->setAge(20)->setCountry("Mansura");
//________________________________________
echo \B\Person::$country;
//________________________________________
echo "<br>";
//________________________________________
echo \B\Person::FEMALE;
//________________________________________
echo "<br>";
//________________________________________
echo \B\Person::MALE;
echo "<pre>";
print_r($person);
echo "</pre>";
//________________________________________
echo "<pre>";
print_r($personB);
echo "</pre>";
//________________________________________

//