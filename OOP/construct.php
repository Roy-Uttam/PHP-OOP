<?php


class person{
    public $name;
    public $age;
    public $email;


    function __construct($name, $age, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        
    }

    function show(){
        echo $this->name . $this->age . $this->email . "<br>";
    }

}


$p1 = new person("uttam", 24 , "royuttam553@gmail.com");
$p2 = new person("Roy", 30 , "roy@gmail.com");

$p1->show();
$p2->show();


class person2{
    public $name1;
    public $age1;
    public $salary1;

    function __construct($name1,$age1,$salary1)
    
    {
        $this->name1 = $name1;
        $this->age1 = $age1;
        $this->salary1 = $salary1;
        
    }

    function show1(){

        
        echo $this->name1 . $this->age1 . $this->salary1 ."<br>";


        


    }
}

$p3 = new person2("roy", 48 , "roy@gmail.com");
 
$p3->show1();





?>
