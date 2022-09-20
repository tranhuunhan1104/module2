<?php
    class Shape {
        public $side1 ;
        public $side2 ;
        public $side3 ;
        public function __construct($side1,$side2,$side3)
        {
            $this->a = $side1;
            $this->h = $side2;
            $this->c = $side3;
        }
        public function setA($side1){
            $this->a = $side1;
        }
        public function getA(){
            return $this->a ;
        }
        public function setH($side2){
            $this->h = $side2;
        }
        public function getH(){
            return $this->h ;
        }
        public function setC($side3){
            $this->c = $side3;
        }
        public function getC(){
            return $this->c ;
        }
        public function getPerimeter() {
            return $this->a + $this->h + $this->c;
        }
    }
    class Triangle extends Shape {
        public $height='';
        public function __construct($side1,$side2,$side3,$height)
        {
            $this->a = $side1;
            $this->h = $side2;
            $this->c = $side3;
            $this->height=$height;
        }
        public function setHeight($height){
            $this->height=$height;
        }
        public function getHeight(){
            return $this->height;
        }
        public function  getArea(){
            return ($this->a* $this->h)/2;
        }
    }
    
    $objShape = new Shape(4,5,6);
    $objTriangle = new Triangle(4,5,6,7);
    echo 'Chu vi hình tam giác là : '.$objTriangle->getPerimeter();
    echo '<br>';
    echo 'Diện tích hình tam giác là : '.$objTriangle-> getArea();
    
    