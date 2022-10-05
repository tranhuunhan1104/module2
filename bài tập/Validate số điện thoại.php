
    <?php


    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        // in du lieu ra
        // echo '<pre>';
        // print_r($_REQUEST);
        // echo '</pre>';
    
        // luu vao bo nho , khai bao bien
        $string = $_REQUEST['sdt'];
    
        
    
    
        $pattern = '/^\([0-9]{2,2}\)+\-+\(0+[0-9]{9,9}\)$/';
        if (preg_match($pattern, $string)) {
            echo 'SỐ ĐIỆN THOẠI CỦA BẠN HỢP LỆ';
        } else {
            echo 'SỐ ĐIỆN THOẠI CỦA BẠN KHÔNG HỢP LỆ';
        }
    }
    ?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VALIDATE SỐ ĐIỆN THOẠI</title>
    </head>
     <form action="" method="post">
        
       <p> Số điện thoại hợp lệ cần đạt theo mẫu sau:</p>
        <h4> . (xx)-(0xxxxxxxxx)<br>
            . x là ký tự số <br>
            . Không chứa các ký tự đặc biệt</h4>
            <p>Nhập số điện thoại của người dùng</p><br>
        <input type="text" name="sdt" id="">
        
        <input type="submit" v alue="Login">
    </form>