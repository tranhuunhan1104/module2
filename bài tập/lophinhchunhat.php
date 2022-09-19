<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   
    $chieudai = $_REQUEST['chieudai'];
    $chieurong = $_REQUEST['chieurong'];


class Rectangle
{
    public $width = '';
    public $height = '';

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // tinh dien tich
    public function getArea(): int
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    public function getPerimeter(): int
    {
        return (($this->width + $this->height) * 2);
    }

    public function display(): string
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$objRengtangle = new Rectangle($chieudai,$chieurong);

echo 'Diện tích hình chữ nhật là : '.$objRengtangle -> getArea();
echo '<br>'.'Chu vi hình chữ nhật là : '.$objRengtangle -> getPerimeter();
echo '<br>'. $objRengtangle -> display();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lớp hình chữ nhật</title>
</head>
<body>
<form action="" method="post">
    <p>Nhập chiều dài</p>
    <input type="text" name="chieudai" id="">
    <p>Nhập chiều rộng</p>
    <input type="text" name="chieurong" id="">
    <input type="submit" v alue="Login">
</form>
</body>