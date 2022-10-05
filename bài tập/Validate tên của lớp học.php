<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $string = $_REQUEST['email'];




    $pattern = '/^[C|A|P]+[0-9]{4,4}[G|H|I|K|L|M]$/';
    if (preg_match($pattern, $string)) {
        echo 'TÊN LỚP CỦA BẠN HỢP LỆ ';
    } else {
        echo 'TÊN LỚP CỦA BẠN KHÔNG HỢP LỆ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate tên của lớp học</title>
</head>
<form action="" method="post">
    <p>Nhập tên lớp học của người dùng</p>
    <input type="text" name="email" id="">

    <input type="submit" v alue="Login">
</form>