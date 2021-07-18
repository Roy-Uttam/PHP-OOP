<?php

class student{

public $course;
private $firstName;
private $lastName;
private $detail = ['name'=>'uttam' , 'age'=>'25'];

public function setName($fname, $lname){

    $this->firstName = $fname;
    $this->lastName = $lname;
}

public function __isset($name)
{
    echo isset($this->detail[$name]);
    
}


}

$test = new student();
// echo isset($test->name);
echo isset($test->city);


?>