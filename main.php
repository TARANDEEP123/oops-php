<?php
class Person 
{
    public $name;
    public $age;
    protected $address;

    public function __construct($name,$age,$address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }
}


class Employee extends Person {
    public function __construct() 
    {
        //Call the parent class constructor
        parent::__construct('test',24,'Here');
        
    }
}
$e1 = new Employee();
var_dump($e1->getAddress());

$p1 = new Person('Taran',28,'Raja Saree Center,Gola bazaar');
// var_dump($p1->address);
// echo $p1->address;
var_dump($p1->getAddress());

//If you dont want to inherit the class or function use final keyword
?>