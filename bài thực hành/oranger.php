<?php

include_once("../m2/Fruit.php");

class Orange extends Fruit
{

    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}
$objOrange = new Orange();
