<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
     
        echo "<h3>Employee profile</h3>";
        echo "employee name: " . $this->name . "<br>";
        echo "employee age: " . $this->age . "<br>";
        echo "employee salary: " . $this->salary . "<br>";
    }

}

class manager extends employee{
    public $extra = 2000;
    public $totalsalary;

function info(){
     $this->totalsalary = $this->salary + $this->extra;

    echo "<h3>Manager</h3>";
    echo "employee name: " . $this->name . "<br>";
    echo "employee age: " . $this->age . "<br>";
    echo "employee salary: " . $this->totalsalary . "<br>";
}
}

$e1 = new employee("uttam", 20 , 10000);
$e2 = new manager("Roy", 25 , 10000);

$e1->info();
$e2->info();


?>