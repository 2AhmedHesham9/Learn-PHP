<?php


class person
{

    function __call($name, $proberty)
    {
        if ($name == 'name') {
            if (count($proberty) == 1) {
                return $this->name1($proberty[0]);
            } else if (count($proberty) == 2) {
                return $this->name2($proberty[0], $proberty[1]);
            }
        }
    }

    function name1($n)
    {
        echo $n;
    }
    function name2($n, $f)
    {
        echo $n . ' ' . $f;
    }
}


$p = new person;

echo $p->name("Ahmed");   // as you call function name1()
echo '<br>';
echo $p->name("Ahmed", "Hesham");    // as you call function name2()
echo '<br>';
