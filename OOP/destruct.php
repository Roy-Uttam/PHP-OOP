<?php


class abc{

    public function __construct()
    {
        echo "this is construct function <br>";
    }
    public function second(){
        echo "this is normal function <br>";
    }
    public function __destruct()
    {
        echo "this is Destruct function <br>";
    }
    


}


$test = new abc();

$test->second();

?>