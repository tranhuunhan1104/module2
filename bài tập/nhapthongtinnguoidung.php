<?php
function loadRegistrations($fileName)
{
    $jsonData = file_get_contents($fileName);
    return json_decode($jsonData, true);
}

function saveDataJSON($fileName, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
    
        $arrData = loadRegistrations($fileName);
      
        array_push($arrData, $contact);
     
        $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
        
        file_put_contents($fileName, $jsonData);
        echo "Lưu dữ liệu thành công!";
    }
     catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}

$usernameErr = null;
$emailErr = null;
$phoneErr = null;
$username = null;
$email = null;
$phone = null;
 if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['sdt'];
    $hasError = false;
    if (empty($_REQUEST['username'])){
        echo 'Bạn chưa nhập tên đăng nhập !!';
        echo'<br>';
        $hasError = true;
    }
    if (empty($_REQUEST['email'])){
        echo 'Bạn chưa nhập email !!';
        echo'<br>';
        $hasError = true;
    } 
    if (empty($phone)) {
        echo" Số điện thoại không được để trống!";
        echo'<br>';
        $hasError = true;
    }

    if (!$hasError) {
        saveDataJSON("gamali.json", $username, $email, $phone);
        $username = null;
        $email = null;
        $phone = null;
    }
}

?>
<form action="" method="post">
    <p>Tên đăng nhập</p>
    <input type="text" name="username" id="">
    <p>Email</p>
    <input type="text" name="email" id="">
    <p>SDT</p>
    <input type="text" name="sdt" id="">
    <input type="submit" v alue="Login">
</form>