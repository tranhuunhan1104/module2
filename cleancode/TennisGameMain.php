<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $nhapdiemm1 = $_REQUEST['m1'];
    $nhapdiemm2 = $_REQUEST['m2'];

    include('TennisGame.php');

    $tennisGame = new TennisGame();

    $tennisGame->getScore('player1', 'player2', $nhapdiemm1, $nhapdiemm2);

    echo $tennisGame;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cleancode</title>
</head>
<body>
<form action="" method="post">
    <p>Nhập điểm tay vợt 1</p>
    <input type="text" name="m1" id="">
    <p>Nhập điểm tay vợt 2</p>
    <input type="text" name="m2" id="">
    <input type="submit" v alue="Login">
</form>
</body>