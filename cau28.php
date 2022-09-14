<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
 

    // luu vao bo nho , khai bao bien
    $sothunhat = $_REQUEST['sothunhat'];
    $sothuhai = $_REQUEST['sothuhai'];
    $pheptinh = $_REQUEST['pheptinh'];
    if($sothunhat!="" && $sothuhai!=""){
        switch ($pheptinh) {
            case '+':
                $ketqua = $sothunhat + $sothuhai;
                echo $ketqua;
                break;
                case '-':
                    $ketqua = $sothunhat + $sothuhai;
                    echo $ketqua;
                    break;
                    case '*':
                        $ketqua = $sothuhai * $sothunhat;
                        echo $ketqua;
                        break;
                        case '/':
                            if ($sothuhai == 0){
                                echo 'error!!';
                               }
                               else{
                                $ketqua = $sothunhat / $sothuhai;
                                echo $ketqua;
                               }
                            break;
                        } 
    }else{
        echo 'nhập đầy đủ 2 số';
    }
}
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
    <label for="">so thu nhat</label>
    <input type="text" name="sothunhat" id="">
    <br>

    <select id="" name = "pheptinh">
        <option value="+">cong </option>
        <option value="-"> tru </option>
        <option value="*"> nhan </option>
        <option value="/" selected>chia </option>
    </select>
    <br>
    <label for="">so thu hai</label>
    <input type="text" name="sothuhai" id="">
    <br>
    <input type="submit" value="Login">
</form>
               