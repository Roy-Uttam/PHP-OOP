<?php

trait hello{
    public function sayhello(){
        echo "hello everyone";
    }

    public function sayhi(){
        echo "Hi everyone";
    }

}
trait hi{
    public function saybye(){
        echo "Bye everyone";
    }
}

class test{
    use hello,hi;
}

// class test2{
//     use hi;
// }

$ctest = new test();
// $ctest2 = new test2();

$ctest->sayhello();
echo "<br>";
$ctest->sayhi();
echo "<br>";
$ctest->saybye();

?>