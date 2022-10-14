<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $string = $_REQUEST['email'];

    


    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern, $string)) {
        echo 'Định dạng tài khoản của bạn hợp lệ';
    } else {
        echo 'Định dạng tài khoản của bạn không hợp lệ';
    }
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate account</title>
</head>
 <form action="" method="post">
    <p>Nhập tài khoản người dùng</p>
    <input type="text" name="email" id="">
    
    <input type="submit" v alue="Login">
</form>