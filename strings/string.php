<?php

$string ="i love php language " ;
#substr()

        // echo substr($string,0); //take string and the index you want to start from.
        // echo substr($string,0,6); //take string and the index you want to start from and index you want to end.
        // echo substr($string,-8); //take string and the -index you want to start from and index you want to end.




# strlen()

         // echo strlen($string);

# str_repalce()

        // echo str_replace('php','laravel',$string); //take three parameters 1- char you want to delete 2-char you want to replace 3-string


# trim()

        // var_dump(  ($string));  //delete extra spaces  
        // var_dump( trim ($string));  //delete extra spaces  
        
 
# strpos ()

        // echo strpos($string,'e'); //take string and char

# strtolower () 

        //   echo strtolower($string);
#strtoupper ()

        //   echo strtoupper($string);

#ucwords        //capitalize first letter of any word in a sentense

        // echo ucwords($string );
?>


<!-- <?php
$x = 'kinjal';
echo "Length of string is: ".strlen($x);
echo "<br>Count of word: ".str_word_count($x);
echo "<br>Reverse the string: ".strrev($x);
echo "<br>Position of string: ".strpos('Have a nice day!','nice');  //2 argument
echo "<br>String replace: ".str_replace('good','nice','have a good day!');  //3 argument
echo "<br>String convert to uppercase: ".strtoupper($x);
echo "<br>String convert to lowercase: ".strtolower($x);
echo "<br>convert first character into uppercase: ".ucfirst('good day');
echo "<br>convert first character into lowercase: ".lcfirst('Good noon');
echo "<br>convert first character of each word into uppercase: ".ucwords('keep going on!');
echo "<br>Remove space from left side: ".ltrim("        hi..");
echo "<br>Remove space from right side: ".rtrim("hello          ");
echo "<br>Remove both side of space: ".trim("       keep learning       ");
echo "<br>string encrypted with MD5: ".md5($x);
echo "<br>Compare both string: ".strcoll('Hello','Hello')."<br>".strcmp('kinjal',$x);
echo "<br>Return part of string: ".substr('Hello Everyone',2);
$str = addcslashes("Hello World!","W");
echo($str); 
echo(bin2hex("Hello World!"));  //hexdicimal
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
$str = "Hello zWWorld!";
echo count_chars($str,3); //sort and remove dublicate char
$arr = array('Hello','World!','Beautiful','Day!');
echo join("-",$arr); // collect words and put (-)between them

echo ord("h")."<br>"; //Return the ASCII value of "h":
echo str_repeat("Wow",13); //Repeat the string "Wow" 13 times:
print_r(str_split("Hello")); //Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
echo strrchr("Hello world! nice day","world"); //Search a string for "world", and return all characters from this position to the end of the string:
?> -->