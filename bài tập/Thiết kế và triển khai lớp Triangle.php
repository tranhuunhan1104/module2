<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $canhday = $_REQUEST['canhday'];
    $canhbenb = $_REQUEST['canhbenb'];
    $canhbenc = $_REQUEST['canhbenc'];
    $chieucao = $_REQUEST['chieucao'];
    class Shape
    {
        public $side1 ;
        public $side2 ;
        public $side3 ;
        public function __construct($side1, $side2, $side3)
        {
            $this->a = $side1;
            $this->h = $side2;
            $this->c = $side3;
        }
        public function setA($side1)
        {
            $this->a = $side1;
        }
        public function getA()
        {
            return $this->a ;
        }
        public function setH($side2)
        {
            $this->h = $side2;
        }
        public function getH()
        {
            return $this->h ;
        }
        public function setC($side3)
        {
            $this->c = $side3;
        }
        public function getC()
        {
            return $this->c ;
        }
        public function getPerimeter()
        {
            return $this->a + $this->h + $this->c;
        }
    }
    class Triangle extends Shape
    {
        public $height='';
        public function __construct($side1, $side2, $side3, $height)
        {
            $this->a = $side1;
            $this->h = $side2;
            $this->c = $side3;
            $this->height=$height;
        }
        public function setHeight($height)
        {
            $this->height=$height;
        }
        public function getHeight()
        {
            return $this->height;
        }
        public function getArea()
        {
            return ($this->a* $this->h)/2;
        }
    }


    $objShape = new Shape($canhday, $canhbenb, $canhbenc);
    $objTriangle = new Triangle($canhday, $canhbenb, $canhbenc, $chieucao);
    echo 'Chu vi hình tam giác là : '.$objTriangle->getPerimeter();
    echo '<br>';
    echo 'Diện tích hình tam giác là : '.$objTriangle-> getArea();
}
    ?>
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lớp Circle và lớp Cylinder</title>
</head>
<body>
<form action="" method="post">
    <p> nhập cạnh đáy</p>
    <input type="text" name="canhday" id="">
    <p> nhập cạnh bên b</p>
    <input type="text" name="canhbenb" id="">
    <p> nhập cạnh bên c</p>
    <input type="text" name="canhbenc" id="">
    <p> nhập chiều cao</p>
    <input type="text" name="chieucao" id="">
   <br>
    <input type="submit" v alue="Login">
</form> 
    