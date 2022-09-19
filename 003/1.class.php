<?php

class conmeo{
    // thuoc tinh
    public $name = '';
    public $gender = false;
    public $color = '';
    public function __construct($ts_name , $ts_gender , $ts_color){
        $this ->name = $ts_name;
        $this ->gender = $ts_gender;
        $this ->color = $ts_color;

    }
   
    // phuong thuc 
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this -> name;
    }
    public function setGender($gender){
        $this ->gender = $gender;
    }
    public function getGender(){
        return $this -> gender;
    }
    public function setColor($color){
        $this -> color = $color;
    }
    public function getColor(){
        return $this -> color;
    }
}

    // khoi tao doi tuong
    $objectconmeo = new conmeo($ts_name , $ts_gender , $ts_color);

    // thiet lap gia tri cua thuoc tinh name ,gender , color
    $objectconmeo -> setName('miu');
    $objectconmeo -> setGender('male');
    $objectconmeo -> setColor('black');

      $objectconmeo ->getName();
      $objectconmeo ->getGender();
      $objectconmeo ->getColor();
    // in doi tuong

    echo '<pre>';
    print_r ($objectconmeo);
    echo '</pre>';


        // truy cap thuoc tinh
        echo '<br>'.$objectconmeo->name;
        echo '<br>'.$objectconmeo->color;
        echo '<br>'.$objectconmeo->gender;
    // class person{
    //     public $name = '';
    //     public $age = '';
    //     public function __construct($ts_name , $ts_age){
    //         $this ->name = $ts_name;
    //         $this ->age = $ts_age;
    
    //     }

    //     public function sayHello(){
    //         return'hello';
    //     }
    //     public function getAge(){
    //         return'';
    //     }
    //     public function getName(){
    //         return $this -> name;
    //     }
    // }


    // $objectperson = new person('nhan', 18);
    // echo'<pre>';
    // print_r ($objectperson);
    // echo'</pre>';

    //       // truy cap thuoc tinh
    //         echo '<br>'.$objectperson->name;
    //         echo '<br>'.$objectperson->age;
    