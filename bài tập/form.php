<?php
    // dung var_dump de in ra khi chua biet kieu du lieu
    // echo '<pre>';
    // print_r( $_SERVER );
    // echo '</pre>';
    // ktra nguoi dung da gui du lieu di
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    echo 'ten dang nhap la : '.$username;
    echo '<br>';
    echo 'mat khau la :'.$password;

    
    
   }

?>
<form action="" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password</label>
    <input type="text" name="password" id="">
   <br>
    <input type="submit" v alue="Login">
</form>