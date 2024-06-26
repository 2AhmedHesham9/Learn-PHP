<?php
class Person
{

    // Properties and methods 

        // public $info ="MY name is Ahmed";
        private $name;
        private $age;


    // creat a defult constractor
        function __construct()
        {
            $this->name = "AHMED";
            $this->age = 20;
        }


    // creat a parametrazid constractor

            //  function __construct($newname,$newage) {
            //     $this->name=$newname;
            //     $this->age=$newage;
            // }


        
    // Encapsulation work wiht privite properties 

    //  create getter and setter 
            public function getname()
                {
                    return $this->name;
                }

                public function setname($newname) //set privite property to make it as public
                {
                    $this->name = $newname;
                    return $this->name;
                }
            public function getage()
                {
                    return $this->age;
                }

                public function setage($newage) //set privite property to make it as public
                {
                    $this->age = $newage;
                    return $this->age;
                }


            
    // create a static property and method

            public static $drinkingage = 21;

            //with static method we use self:: insted of $this->
            public static function setdrinkingage($newdrinkingage)
            {
                self::$drinkingage = $newdrinkingage;
            }

    // create const property you can not override the value and  you can call with self::
            // const does not take $
            const con = "const Value";

            public static function echocon()
            {
                echo self::con;
            }


    // creat a desstractor

            public function __destractor()
            {
            }
}


// ==================================================================================================== 

    // take an object from this Person class use Unparameterized Constructor
        $object = new Person();
        // $object->setname("ATSH");
        echo ($object->getname()); 
        echo ($object->getage()); 
        echo '<br>';
    
// ==================================================================================================== 

    // take an object from this Person class use parameterized Constructor
    //  don't forget to call parameterized constructor remove comment in class
        $object = new Person("ATSH",21);
        // echo ($object->getage()); 
        // echo ($object->getname()); 
        echo '<br>';
// ==================================================================================================== 
    $newobject = new Person() ;
    // unset($newobject); // this as destruactor  it make new object undefined 
    // echo ($newobject->getname());  //make $name type protected or public to inherite  the name
// ==================================================================================================== 

// ==================================================================================================== 

        // you can not override a const value
        $object->con = "345";
        $object->echocon();
// ==================================================================================================== 

// ==================================================================================================== 

    // to print static variable or method
    echo '<br>';
    echo Person::$drinkingage; //before setmethod
    Person::setdrinkingage(23);
    // echo Person::$drinkingage; //after set method
// ==================================================================================================== 
