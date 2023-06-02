<!-- 
Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
All methods in interface should be implementd in child class
Classes can implement an interface while inheriting from another class at the same time -->

<?php 
interface Animal
{
    public function makeSound();
    //public function test();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}

$animal = new Cat();
$animal->makeSound();



?>