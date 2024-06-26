<?php

//  trait as class but it has multi inheretance
//you can not take an object from trait as abstract and interface

trait one
{
    public $o = 1;
    function eone()
    {
        echo "one <br>";
    }
}
trait two
{
    public $t = 2;
    function etwo()
    {
        echo "<br>two<br>";
    }
}
trait three
{
    public $th = 3;
    function ethree()
    {
        echo "<br>three <br>";
    }
}

// to inherite more than one class use keyword -> use trait1,trait2,......
class numbers
{
    use one, two, three;  //inherite from three traits
}

$n = new numbers;
echo $n->eone();
echo $n->o;
echo $n->etwo();
echo $n->t;
echo $n->ethree();
echo $n->th;
