<?php
    class Point{
        public $x = '';
        public $y = '';
        public function __construct($x,$y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function setX( $x){
            $this->x =  $x;
        }
        public function getX(){
            return $this->x;
        }
        public function setY( $y){
            $this->y =  $y;
        }
        public function getY(){
            return $this->y;
        }
        public function setXY($xy){
            $this->x*$this->y = $xy;
        }
        public function getXY(){
            return [$this->x*$this->y];
        }
    }
    class MoveablePoint extends Point {
        public $xSpeed = '';
        public $ySpeed = '';
        public function __construct($x,$y,$xSpeed,$ySpeed)
        {
            parent::getX();
            parent::getY();
            $this->x = $x;
            $this->y = $y;
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;

        }
        public function setXSpeed($xSpeed){
            $this->xSpeed = $xSpeed;
        }
        public function getXSpeed(){
            return $this->xSpeed;
        }
        public function setYSpeed($ySpeed){
            $this->ySpeed = $ySpeed;
        }
        public function getYSpeed(){
            return $this->ySpeed;
        }
        public function getSpeed(){
            return [$this->xSpeed* $this->ySpeed] ;
        }
        public function move(){
            return [$this->x*$this->y*$this->xSpeed* $this->ySpeed] ;
        }
    }
    $objPoint = new Point(5,6);
    $objMoveablePoint = new MoveablePoint(5,6,7,8);
    print_r($objMoveablePoint->move());