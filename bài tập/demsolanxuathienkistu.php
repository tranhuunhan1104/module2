<?php


   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $string = $_REQUEST['username1'];
    $nhap = $_REQUEST['nhap'];
    $count = 0;
   for($i = 0 ; $i < strlen($string) ; $i ++){
            if($string[$i] == $nhap ){
                $count++;
            }
   }
   echo $count;
   }
  
?>
<form action="" method="post">
    <p>nhập kí tự<p>
    <input type="text" name="nhap" id="">
   
    <p>nhập chuỗi <p>
    <input type="text" name="username1" id="">
   
    <input type="submit" v alue="Login">
</form>
