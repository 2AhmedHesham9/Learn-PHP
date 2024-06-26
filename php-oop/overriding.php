<?php

//==========================================================================================================//
// Function overriding is a type of polymorphism in which we redefine the member
// function of a class which it inherited from its base class

// means if i declare a function call move in CAR class 
// then Make anoter class BMW extends CAR and redeclare the move function but with another implementation
// if i take n instance from bmw and call the move function then it will be called from bmw class
// this is the meaning of overriding

// NOTE: if you want to make function not override use keyword (final)
//==========================================================================================================//

//==========================================================================================================//
// overloading does not avilable in PHP language

    // Method overloading is providing two separate methods in a class 
    // with the same name but different arguments, while the method return type 
    // may or may not be different, which allows us to reuse the same method name.

    ## Example -> declare sum(int x,int y) function
        // if you declare another function has the same name but different arguments sum(int x,double y , int z)
        //this is the meaning of overloading
 //==========================================================================================================//
class car
{
    function move($n)
    {
        echo $n ;
    }
// using keyword *_* final *_* -> can not make you override in another class
    final function speed($s)
    {
        echo $s;
    }
}
class bmw extends car
{

    function move($n)
    {
        echo 5 + $n;
    }

    // you try to override to function speed but you can not because in car class it use keyword **final**

    // function speed($s)
    // {
    //     echo 5 + $s;
    // }
}

$b = new bmw;
$b->move(3);
// $b->speed(2);
