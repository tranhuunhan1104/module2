<?php
  class Student {
    protected $name;
    public $age;
    public $gender;

    public function __construct( $ts_name, $ts_age, $ts_gender ){
        $this->name = $ts_name;
        $this->age = $ts_age;
        $this->gender = $ts_gender;
    }
    public function showinfo(){
        echo 'hi '.$this ->name;
    }
}
// khoi tao doi tuong
$objStudent = new Student ('nguyen van a',20,'male');

// truy cap phuong thuc
$objStudent ->  showinfo();


echo '<pre>';
print_r($objStudent);
echo'</pre>';

// truy cap thioc tinh - outside

// echo '<br>'.$objStudent ->name;
