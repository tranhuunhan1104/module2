<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $usd = $_REQUEST['usd']; 
    $ketqua = $usd * 23000 ;
}
echo 'Số tiền chuyển đổi thành VND là :'.$ketqua;
?>
<form action="" method="post">
    <p>nhập USD<p>
    <input type="text" name="usd" id="">
    <br>
    <input type="submit" value="tinh">
    
   
</form>