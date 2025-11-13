<?php
namespace A\B;
use Info;
// SPR-4 ->  OUTOLOAD -> namespace reprecnt the same structure of the follders  like this folder we here this folder is A\B

define('ahmedmousa',true);//global NAME SPACE NOT NAME SPASCE A OR B
const LARAVEL="LARAVEL A";//NAME SPACE A JUST 
function hello(){
    echo "hello <br>";
}
class Person 
{
    use Info;
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
    
    public static function setCountry($country)
    {
        self::$country = $country;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
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
