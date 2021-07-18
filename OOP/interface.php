<?php

interface one{

function sum($a , $b);

}

interface two{
    
    function sub($c , $d);
    
    }

class three implements one,two{

    public function sum($a , $b){
        echo "sum result: " . $a + $b;
    }

    public function sub($c , $d){
        echo "sub result: " . $c - $d;
    }
}

$test = new three();
$test->sum(20,25);
echo "<br>";
$test->sub(50,20);
?>