<?php
    class Point2d{
        public $x = '';
        public $y = '';
        public function __construct($x,$y)
        {
            $this ->x = $x;
            $this ->y = $y;
        }
        public function setX($x){
            $this ->x = $x;
        }
        public function getX(){
            return $this -> x;
        }
        public function setY($Y){
            $this ->y = $Y;
        }
        public function getY(){
            return $this -> y;
        }
        public function setXY($XY){
            $this ->x * $this ->y = $XY;
        }
        public function getXY(){
            return  [$this ->x *$this ->y];
        }

    }
    class Point3d extends Point2d {
        public $z = '';
        public function __construct($x,$y,$z)
        {
            parent::getX();
            parent::getY();
            $this -> z = $z;
            $this ->x = $x;
            $this ->y = $y;
        }
        public function setZ($Z){
            $this ->z = $Z;
        }
        public function getZ(){
            return $this -> z;
        }
        public function setXYZ($XYZ){
            $this ->x * $this ->y * $this ->z = $XYZ;
        }
        public function getXYZ(){
            return [$this->getX() *$this->getY() * $this->z];
        }
    }
    $objPoint2d = new Point2d(5,6);
    $objPoint3d = new Point3d(5,6,7);
    print_r($objPoint3d->getXYZ());