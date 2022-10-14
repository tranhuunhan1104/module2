<?php
    include_once("..//m2//Animal.php");
    class Tiger extends Animal{
        public function makeSound(){
            return "Tiger: roarrrrr!";
        } 
    }
    $objTiger = new Tiger();