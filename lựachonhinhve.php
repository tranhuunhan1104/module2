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
        <select id="cars" name="luachon">
            <option value="+">hình chữ nhật </option>
            <option value="-">hình tam giác cạnh góc vuông ở botton-left</option>
            <option value="*">hình tam giác cạnh góc vuông ở top-left </option>
        </select>
        <br>
        <input type="submit" value="chạy ngayy đii">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // in du lieu ra


    // luu vao bo nho , khai bao bien
    $luachon = $_REQUEST['luachon'];

    switch ($luachon) {
        case '+':
            $str = '';
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    if ($i == 1 || $i == 5 || $j == 1 || $j == 10) {
                        $str .= "*";
                    } else {
                        $str .= "&nbsp" . "&nbsp";
                    }
                }
                $str .= "<br>";
            }
            echo $str;
            break;
        case '-':
            $str = '';
            for ($i = 0; $i <= 10; $i++) {
                echo "<br>";
                for ($j = 0; $j < $i; $j++) {
                    echo "*" . " ";
                }
            }
            break;
        case '*';
            $str = '';
            for ($i = 10; $i >= 1; $i--) {
                echo "<br>";
                for ($j = 1; $j <= $i; $j++) {
                    echo "*" . " ";
                }
            }
    }
}

?>