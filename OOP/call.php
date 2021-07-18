<?php

class student{
    public $first_name;
    public $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;

        
    }

    public function __call($method, $args)
    {
        echo "this is a private or non-exsting function: $method ";
        print_r($args);

    }



}

$test = new student();
$test->setName("uttam", "Roy");



?>