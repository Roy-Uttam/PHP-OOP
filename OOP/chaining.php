<?php


class abc{

    public function first(){
        echo "this is first function <br>";

        return $this;
    }

    public function second(){
        echo "this is second function <br>";
        return $this;
    }
    public function third(){
        echo "this is third function <br>";
        
    }
    


}


$chain = new abc();
$chain->first()->second()->third();


?>