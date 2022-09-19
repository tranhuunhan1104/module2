<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xây dựng lớp FANFAN</title>
</head>
<body>
<?php
define("SLOW",1);
define("MEDIUM",2);
define("FAST",3);
class Fan {
    public $speed = SLOW;
    private  $on = false;
    private $radius = 5;
    private $color = "blue";
    public function __construct($speed,$radius,$on,$color){
        $this-> speed = $speed;
        $this-> radius =$radius;
        $this ->on =$on;
        $this ->color =$color;
    }
    public function setSpeed($ts_speed) {
      $this->speed = $ts_speed;
    }
    public function getSpeed() {
       return $this->speed;
    }
    public function setOn($ts_on) {
        $this ->on =$ts_on;
    }
    public function getOn() {
        return $this->on;
    }
    public function setRadius($ts_radius) {
      $this->radius = $ts_radius;
    }
    public function getRadius() {
        return $this->radius;
    }
    public function setColor($ts_color) {
        $this->color = $ts_color;
    }
    public function getColor() {
        return $this->color;
    }
    public function toString(){
        if($this->getOn()==true){
            return $this->speed.$this->color.$this->radius."fan is on";
        }
        if($this->getOn()==false) {
            return $this->speed.$this->color.$this->radius."fan is off";
        }
    }
}
$Fan1 = new Fan(SLOW,5,false,"blue");
echo $Fan1 ->toString();
// $Fan1->speed=FAST;
$Fan1->setOn(true);
// echo $Fan1->getOn();
echo "<br>";
echo $Fan1 ->toString();