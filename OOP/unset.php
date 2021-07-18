<?php

class student{
    public $course = "PHP";
    private $firstname;
    private $lastname;

    public function setName($fname, $lname){
        $this->firstname = $fname;
        $this->lastname = $lname;

    }
    public function __unset($property)
    {
        unset($this ->$property);

    }
}

$test = new student();
$test->setName("uttam","roy");
unset($test->firstname);
print_r($test);

// unset($test->course);
// echo $test->course;


?>



