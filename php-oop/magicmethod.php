<?php

class person
{

    
    //1 constructor run automatic when you make an object
    function __construct()
    {
        echo "start constructor <br>";
    }

    // private 
    function name($n)
    {
        echo "Hola " . $n;
    }

    // 3 __call method check if the method exist in class or not and if method is private

    function __call($name, $proberty)
    {
        echo "this function (" . $name . ") does not exist ";
        print_r($proberty);
    }

    // 4 magic function __get() check if the property is exist in class or not 

    function __get($name)
    {
        echo "this var get() " . $name . " does not exist in class";
    }

    // 5 magic function __set() work if property has a value then you want to echo it and check if the property is exist in class or not 

    function __set($name, $value)
    {
        echo "this var set() " . $name  . " does not exist in class to add color " .$value;
    }



    //2 destructor run automatic when you make an object and do all methods in class
    function __destruct()
    {
        echo " <br>end with destructor";
    }
}
$p = new person();
$p->name("Atsh."); // function is private
echo '<hr>';
$p->naame("Atsh", "ahmed");  //function write wrong
echo '<hr>';
$p->color = "red"; // function __set() will work because you add a value
echo '<hr>';
echo $p->color;  // function __set() will work becuase you want to echo prperty does not exist