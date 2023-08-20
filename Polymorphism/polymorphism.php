<?php

class Animal{
    public function makeSound(){
        return "animal sound!";
    }
}

class Cat extends Animal{
    public function makeSound()
    {
        return "Meow! </br>";
    }
}

class Mouse extends Animal{
    public function makeSound()
    {
        return "Cheo! </br>";
    }
}

class Cow extends Animal{
    public function makeSound()
    {
        return "HamBaa! </br>";
    }
}

$cat = new Cat();
echo $cat->makeSound(); // Meow!

$mouse = new Mouse();
echo $mouse->makeSound(); // Cheo!

$cow = new Cow();
echo $cow->makeSound(); // HamBaa!
