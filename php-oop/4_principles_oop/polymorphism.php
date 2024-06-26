<?php
// polymorphism ->in PHP refers to the ability of objects to take on different forms 
// and exhibit different behaviors while sharing a common 
// Real life example of polymorphism, a person at the same time can have different characteristic.
//  can not take an object from interface 
//  using interface instead of class
//  using implements instead of extendes
//  you can multi inherite from more than interface (class)
//  interface does not take variable
//  interface can take variables in parametars of function


interface color
{
    // public $color="blue";
    public function animalColor();
}

interface Animal
{
    public function makeSound();
    public function move();
}

class Dog implements Animal, color
{
    public function makeSound()
    {
        return "Woof!";
    }

    public function move()
    {
        return "Running on four legs.";
    }
    public function animalColor()
    {
        return "black";
    }
}

// Implement Cat class implementing Animal interface
class Cat implements Animal, color
{
    public function makeSound()
    {
        return "Meow!";
    }

    public function move()
    {
        return "Walking stealthily.";
    }
    public function animalColor()
    {
        return "white";
    }
}

// Implement Bird class implementing Animal interface
class Bird implements Animal, color
{
    public function makeSound()
    {
        return "Chirp!";
    }

    public function move()
    {
        return "Flying in the sky.";
    }
    public function animalColor()
    {
        return  "yellow";
    }
}



// Create instances of different animal classes
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();


// Array of animals
$animals = [$dog, $cat, $bird];

// Function to interact with animals
function interactWithAnimals($animals)
{
    foreach ($animals as $animal) {
        echo "Animal says: " . $animal->makeSound() . "<br>";
        echo "Animal moves by: " . $animal->move() . "<br>";
        echo "Animal color is: " . $animal->animalColor() . "<br><br>";
    }
}

// Call function to interact with animals
interactWithAnimals($animals);
