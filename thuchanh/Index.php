<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $radius1 = $_REQUEST['radius1'];
    $radius2 = $_REQUEST['radius2'];

    include "ComparableCircle.php";

    $circleOne = new ComparableCircle('$radius1', $radius1);
    $circleTwo = new ComparableCircle('circleTwo', $radius2);
    $test = $circleOne->compareTo($circleTwo);
    echo('Kết quả so sánh : <br><br>');
    echo $test;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triển khai interface 'Comparable' cho các lớp hình học</title>
</head>
<body>
<form action="" method="post">
    <p>Nhập bán kính của hình tròn 1</p>
    <input type="text" name="radius1" id="">
    <p> Nhập bán kính của hình tròn 2</p>
    <input type="text" name="radius2" id="">
   <br>
    <input type="submit" v alue="Login">
</form> 
    