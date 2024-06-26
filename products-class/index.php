<?php

class product
{
    protected $id = 0;
    protected $name;
    protected $description;
    protected $price;
    protected $quantity;

    function incrimentid()
    {
        $this->id = $this->id + 1;
        //   echo $this->id;
    }

    function setname($name)
    {
        $this->name = $name;
    }
    function getname()
    {
        return $this->name;
    }


    function setdescription($description)
    {
        $this->description = $description;
    }
    function getdescription()
    {
        return $this->description;
    }

    function setprice($price)
    {
        $this->price = $price;
    }
    function getprice()
    {
        return $this->price;
    }
    function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }
    function getquantity()
    {
        return $this->quantity;
    }
}

// class inventory
class inventory extends product
{


    function addProduct($proname, $prodescrip, $proprice, $proquant)
    {
        // $this->id= $this->incrimentid();
        $this->name = $proname;
        $this->description = $prodescrip;
        $this->price = $proprice;
        $this->quantity = $proquant;
    }
    function delete($products, $idd)
    {
        unset($products[$idd]);
        return array_values($products);
    }

    function display($products)
    {

        for ($this->id; $this->id < count($products); $this->id++) {
            $products[$this->id]->id = $this->id;
            echo '<pre>';
            print_r($products[$this->id]);
            echo '</pre>';
        }
    }
}

// creat objects as array
$products = array();
$products[0] = new inventory;
$products[1] = new inventory;
$products[2] = new inventory;
$products[3] = new inventory;
$products[4] = new inventory;




// add prouduct
$products[0]->addProduct("pro0", "des0", 123, 3);
$products[1]->addProduct("pro1", "des1", 123, 1);
$products[2]->addProduct("pro2", "des2", 777, 2);
$products[3]->addProduct("pro3", "des3", 777, 3);
$products[4]->addProduct("pro4", "des4", 777, 4);




// update values
$products[0]->setname("IPHONE");
$products[0]->setdescription("IPHONE 13pro max");
$products[0]->setprice(20000);
$products[0]->setquantity(8);





// to display all products

$products = array_values($products);  // make array equal to new array
echo '<hr>' . " <h1>Before delete</h1>";
$despro = new inventory;
$despro->display($products);




//  delete then display
echo '<hr>' . "<h1>After delete</h1>";
$delpro = new inventory;
// focus on name of product becuase when you delete the id rearranged from 0
$products = $delpro->delete($products, 2);
$delpro->display($products);
