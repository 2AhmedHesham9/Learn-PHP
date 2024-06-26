<?php

include_once "../includes/autoloader.php";
// require_once "person.php"; //to get the class person from page person.php use name space



class Pet
{


    public  function welcome()
    {
        echo "welcome ya Cat";
    }
}


$person = new person(); //her using autoloader.php
// $person =new home\Person();  //her using namespace home from person.php
// $person->move();


// $p=new Pet;
// var_dump($p);
// $p->welcome();
