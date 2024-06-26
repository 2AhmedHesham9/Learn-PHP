<?php
if(isset($_COOKIE['username']))
{
    $name=$_COOKIE['username'];
}
else{
    $name="Guest";
}
echo 'Hello ' . $name;
?>  