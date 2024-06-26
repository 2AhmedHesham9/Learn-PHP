<?php

// ENCAPSULATION: We can hide direct access
// to data by using private key and we can access
// private data by using *|* getter and setter method *|*



class person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct()
    {
        $this->firstName = "Ahmed";
        $this->lastName = "Heshm";
        $this->age = 21;
    }
    // to access private data out of class use encapsulation method Setter and getter methods

    // for first name  
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName(string $fname)
    {
        $this->firstName = $fname;
        return $this->firstName;
    }
    // for last name
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName(string $lname)
    {
        $this->lastName = $lname;
        return $this->lastName;
    }
    // for age
    public function getage()
    {
        return $this->age;
    }
    public function setage(int $age)
    {
        $this->age = $age;
        return $this->age;
    }
}


// we have a problem when you take an instance(object) and first thing is use for example
// (getFirstName or getLastName, .... )it will return nothing
// so i will use *_* unparameterized constractor *_* to set a default values

$person = new person();

echo $person->getFirstName(); //return the default value ahmed
echo '<br>';
// $person->firstName;  // it returns error message  because it is private property

$person->setFirstName("ATSH");
echo $person->getFirstName();
echo '<br>';
$person->setLastName("Hesham");
echo $person->getLastName();
echo '<br>';

$person->setage(21);
echo $person->getage();
