<?php

namespace B;

use A\B\Person as personA;
// use Info;

function hello()
{
    echo "hello b <br>";
}

const LARAVEL = "LARAVEL B"; //NAMESPACE B
class Person extends personA implements Human
{
    // use Info;
    const MALE = 'M';
    const FEMALE = 'F';
    public $name;
    protected $gender;
    private $age;
    public static $country;

    public function __construct($name, $gender, $age, $country)
    {
        echo __CLASS__;
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        self::$country = $country;
    }

    public static function setCountry($country,$city=null)
    {
        parent::setCountry($country);
        static::$country = $country;

    }



    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }
}
