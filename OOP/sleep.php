<?php

class student{

    public $course = 'php';

    private $firstName;
    private $lastName;

    public function setName($fname,$lname){
        $this->firstName = $fname;
        $this->lastName = $lname;

    }

    public function __sleep()
    {
        return array('firstName','lastName');
    }

}

$obj = new student();
$obj->setName("uttam","Roy");


$srl = serialize($obj);
echo $srl;


?>