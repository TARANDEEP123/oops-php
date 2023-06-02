<?php
//An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.


//The child class method must be defined with the same name and it redeclares the parent abstract method
//The child class method must be defined with the same or a less restricted access modifier
//The number of required arguments must be the same. However, the child class may have optional arguments in addition
//Non abstract method should have body in abstract class
//All abstract method should be implemented in child class
abstract class ParentClass {
    abstract protected function prefixName($name);
    public function test1() {

    }
    abstract public function test3();
}

class c1 extends ParentClass  {
    protected function prefixName($name)
    {
        var_dump($name);
    }
}

class c2 extends ParentClass
{
    public function prefixName($name)
    {
        var_dump($name);
    }
}

// class c3 extends ParentClass
// {
//     private function prefixName($name)
//     {
//         var_dump($name);
//     }
// }
class c4 extends ParentClass
{
    protected function prefixName($name, $age=0)
    {
        var_dump($name,$age);
    }
}
?>