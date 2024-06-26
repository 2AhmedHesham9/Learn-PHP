<?php
include_once  "autoloader.php";
// $p=new home\person;  //using home\ to get the name space in person.php page
// $p->move();

 

$pet = new Pet();
// var_dump($p);
$pet->welcome();
$person =new person();
$person->move();