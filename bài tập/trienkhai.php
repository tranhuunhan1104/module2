<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {

    $radius = $_REQUEST['radius'];
    $height = $_REQUEST['height'];
    $weidth = $_REQUEST['weidth'];
    $edge = $_REQUEST['edge'];
    $resize = $_REQUEST['tile'];
   
    interface ResizeAble
    {
        public const SIZE = 0;
        public function resize(float $precent);
    }
    class Circle implements ResizeAble
    {
        public function resize(float $precent)
        {
            return $this->circleArea()*(1+$precent/100);
        }
        public $radius = '';
        public function __construct($radius)
        {
            $this -> radius = $radius;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        public function getRadius()
        {
            return $this -> radius;
        }
        public function circleArea()
        {
            return $this -> radius* $this -> radius * 3.14;
        }
    }
    class Rectangle implements ResizeAble
    {
        public function resize(float $precent)
        {
            return $this->Area()*(1+$precent/100);
        }
        public $height = '';
        public $weidth = '';
        public function __construct($height, $weidth)
        {
            $this->height = $height;
            $this->weidth = $weidth;
        }
        public function setHeight($height)
        {
            $this->height = $height;
        }
        public function getHeight()
        {
            return $this->height;
        }
        public function setWeidth($weidth)
        {
            $this->weidth = $weidth;
        }
        public function getWeidth()
        {
            return $this->weidth;
        }
        public function Area()
        {
            return $this->height* $this->weidth;
        }
    }
    class Square implements ResizeAble
    {
        public function resize(float $precent)
        {
            return $this->squareArea()*(1+$precent/100);
        }
        public $edge = '';
        public function __construct($edge)
        {
            $this->edge=$edge;
        }
        public function setEdge($edge)
        {
            $this->edge= $edge;
        }
        public function getEdge()
        {
            return $this->edge  ;
        }
        public function squareArea()
        {
            return $this->edge*$this->edge;
        }
    }
    $objCircle = new Circle($radius);
    echo 'Diện tích ban đầu cẩu hình tròn là : '. $objCircle-> circleArea();
    echo '<br>'.'<br>'.'Diện tích sau khi được thay đổi của hình tròn là : '. $objCircle-> resize($resize);
    $objRectangle = new Rectangle($height, $weidth);
    echo '<br>'.'<br>'.'Diện tích ban đầu của hình chữ nhật là : '.$objRectangle->Area();
    echo '<br>'.'<br>'.'Diện tích sau khi được thay đổi của hình chữ nhật là : '.$objRectangle->resize($resize);
    $objSquare = new Square($resize);
    echo '<br>'.'<br>'.'Diện tích ban đầu của hình vuông là : '.$objSquare->squareArea();
    echo '<br>'.'<br>'.'Diện tích sau khi được thay đổi của hình vuông là : '.$objSquare->resize($resize);
}
?>
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triển khai interface ''Resizeable''cho các lớp hình học</title>
</head>
<body>
<form action="" method="post">
    <p>Nhập bán kính của hình tròn</p>
    <input type="text" name="radius" id="">
    <p> Nhập chiều dài của hình chữ nhật</p>
    <input type="text" name="height" id="">
    <p> Nhập chiều rộng của hình chữ nhật</p>
    <input type="text" name="weidth" id="">
    <p> nhập cạnh của hình vuông</p>
    <input type="text" name="edge" id="">
    <p> nhập tỉ lệ cần thay đổi </p>
    <input type="text" name="tile" id="">
   <br>
    <input type="submit" v alue="Login">
</form> 
    
           