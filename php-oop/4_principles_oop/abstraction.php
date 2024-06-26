<?php

// ABSTRACTION: It is a process of hiding
// implementation details and showing only
// functionality to the user. Abstraction lets
// you focus on what the object does instead of how it does it.

//  rules  

// abstract as a rules you give him definitions 
// can not take an object from abstract class 
//  abstract functions does not have a body
//  if any class inherite from abstact class you must use an abstract functions with any body 
//  you can not make a property abstract 
//  you can use function without abstract but if you want to use you must inherte abtract class to another becuse you can not take object from it

// abstract class
abstract class car
{
    public $speed = 120;
    abstract function move();
    abstract function speed();

    public  function color($col)
    {
        echo $col;
    }
}

// create class bmw inherte from abstract class car
class BMW extends car
{

    // if you do not use this function move() you will get an error
    function move()
    {
        echo "BMW Move on ";
    }

    function speed()
    {
        echo $this->speed  ;
    }
}

// Take an object from BMW

$bmw = new BMW();
$bmw->move();     //abstract function 
$bmw->speed();   ///abstract function 
$bmw->color(" color is red ");  //public function 
