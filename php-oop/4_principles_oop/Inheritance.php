<?php

// INHERITANCE: It is used to define the
// relationship between two classes. When a
// child class acquires all properties and
// behaviors of parent class known as inheritance.
// Child class can reuse all the codes written
// in parent class. It provides the code reusability.


### Access modifiers -> public , private , protected 
// public -> accessible by parent and child classes
// private -> accessible in parent and not by child classes
// protected -> accessible in parent and in child classes
// don't forget that (private,protected) can use in the same class and child class
// it means not accessible by instance(object) to access you must make setter and getter

class Doctor
{
    protected $name;
    public $age = 40;
    private $phone;
    protected $position;
    private $salary;

    public function __construct($name, $age, $phone, $position, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
        $this->position = $position;
        $this->salary = $salary;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this->phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getmessage()
    {
        echo "hello i'm a doctor class <br>";
    }
}

class student extends Doctor
{
    public $Sname;
    public $Sage;
    public function __construct()
    {
        $this->Sname = "student ahmed";
        $this->Sage = "null";
    }
}

$doctor = new  Doctor("Ahmed", 21, "01111111111", "CS", 20000);
$doctor->age;  //public property
$doctor->getmessage();
echo $doctor->getPhone();
echo '<br>';
// $doctor->position;  ##error -> protected
// $doctor->salary;  ##error -> private 

echo $doctor->getName();
$doctor->setName("     =>      AH new name");
echo $doctor->getName();
echo '<br>';

### take an object from the student
// now student have access for all methods in doctor class and any public variable
$studnt = new student();

echo $studnt->Sname;
echo '<br>';
echo $studnt->age; //extends from doctor class
echo '<br>';
$studnt->setName(" Ahmed"); //extends from doctor class
$studnt->setPhone("0101010010"); //extends from doctor class
echo $studnt->getPhone();
echo '<br>';
echo $studnt->getmessage();  //extends from doctor class
