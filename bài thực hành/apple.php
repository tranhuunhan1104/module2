<?php
    include_once("../m2/Edible.php");
    class Apple extends Fruit
    {
        public function howToEat(): string
        {
            return "Apple could be slided";
        }
    }
    $objApple = new Apple();