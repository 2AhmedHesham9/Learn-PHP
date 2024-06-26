<?php

//function full name

function name($fname,$age)
{
    echo "Ahmed hesham";
    echo '<br>';
    return $fname .' '. $age;
}


//how to invoke the functions (call)

// name();
// echo name();
// echo name("Ahmed ",20);


//some functions

          

            // function sum($num1=null,$num2=null)
            // {
            //     if(is_numeric($num1) && is_numeric($num2))
            //     {
            //         return $num1 + $num2;
            //     }
            //     return "Accept just numbers";
            // }
            // echo sum( 4,4 );

            
            //function with array

                                                    // function add(array $numbers)
                                                    // {
                                                    //     $sum=0;
                                                    //     foreach($numbers as $num)
                                                    //     {
                                                    //         $sum+=$num;
                                                    //     }
                                                    //     return $sum;
                                                    // }
                                                    // echo add([1,2,3,4,5,5]);



        //  function func_get_args()  //take any number of arguments

                        function add()
                        {
                            $sum=0;
                            // func_get_args()[1];
                            foreach(func_get_args() as $num)
                            {
                                // $sum+=$num;
                                echo $num;
                                echo '<br />';
                            }
                            // return $sum;
                        }
                        echo add("1,2,3,4,5",5,5,4,"H",1);

?>