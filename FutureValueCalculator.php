<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $InventmentAmount = $_REQUEST['luongtiendautubandau'];
    $YearlyInterestRate = $_REQUEST['laixuatnganhang'];
    $NumberofYears = $_REQUEST['sonamgui'];
}
$ketqua = $InventmentAmount + ($InventmentAmount * ($YearlyInterestRate / 100)) * $NumberofYears;
echo $ketqua;





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p> Lượng tiền đầu tư ban đầu </p>
        <input type="text" name="luongtiendautubandau" id="">
        <p>lãi xuất ngân hàng</p>
        <input type="text" name="laixuatnganhang" id="">
        <p>số năm gửi</p>
        <input type="text" name="sonamgui" id=""><br>
        <input type="submit" value="tinh">

    </form>
</body>

</html>