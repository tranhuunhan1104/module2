<?php   
    include_once("../m2/Animal.php");
    include_once("../m2/Edible.php");

    class Chicken extends Animal implements Edible
    {
        public function makeSound(): string
        {
            return "Chicken: cluck-cluck!";
        }
    
        public function howToEat(): string
        {
            return "could be fried";
        }
    }
    $ojbChicken = new Chicken();