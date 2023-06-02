<?php 
class Test {
    public static function welcome() {
        var_dump("Hereeee");
    }

    public function t1() {
        self::welcome();
    }
}


class Test1
{
    public function t2()
    {
        Test::welcome();
    }
}


Test::welcome();
$t1= new Test();
$t1->t1();
$t2 = new Test1();
$t2->t2();




?>