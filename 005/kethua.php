<?php
    
    class Cha {
        public $name = 'nguyen van a';

        public function car(){
            echo'<br> xe cua cha';
        }
        public final function house(){
            echo'<br> nha cua cha';
        }
    }
    class Con extends Cha {
        public function car(){
            parent::car();
            echo 'xe cua con';
        }
        public function getName(){
            return $this -> name;
        }


    }
    $ojbcon = new Con ();
    $ojbcon -> car();
    echo '<br>';
    $ojbcon -> house();
    echo '<br>';
    echo $ojbcon -> getName();
