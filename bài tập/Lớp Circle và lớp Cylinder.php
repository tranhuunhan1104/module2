<?php
      if ( $_SERVER['REQUEST_METHOD']== 'POST') {
        // in du lieu ra
        // echo '<pre>';
        // print_r($_REQUEST);
        // echo '</pre>';
    
        // luu vao bo nho , khai bao bien
        $radius = $_REQUEST['radius'];
        $color = $_REQUEST['color'];
        $height = $_REQUEST['height'];
    
    class Circle {
        public $radius = '';
        public $color = '';

        public function __construct($radius,$color )
        {
            $this -> radius = $radius;
            $this -> color = $color;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this -> radius;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this -> color;
        }
        public function area(){
            return $this -> radius* $this -> radius * 3.14;
        }
    }
    class Cylinder extends Circle{
        public $height = '';
        public function setHeight($height){
            $this->height = $height;
        }
        // public function getHeight(){
        //     return $this -> height;
        // }

        public function volume(){
            return $this -> area() *$this->height;
        }

    }

    $objCylinder = new Cylinder( $radius, $color );
    echo 'Diện tích hình tròn là : '.$objCylinder ->area();
    echo'<br>';
    $cylinder = new Cylinder($radius,$color);
    $cylinder ->setHeight( $height );
    echo 'Thể tích hình trụ là : '.$cylinder ->volume();
}
      ?>
<form action="" method="post">
    <p> nhập bán kính </p>
    <input type="text" name="radius" id="">
    <p> nhập màu</p>
    <input type="text" name="color" id="">
    <p> nhập chiều cao</p>
    <input type="text" name="height" id="">
   <br>
    <input type="submit" v alue="Login">
</form> 



