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


    public function __wakeup()
    {
        echo "this is wakeup <br>";
    }


}

$obj = new student();
$obj->setName("uttam","Roy");


$srl = serialize($obj);
$uns =unserialize($srl);
print_r($uns);



?>