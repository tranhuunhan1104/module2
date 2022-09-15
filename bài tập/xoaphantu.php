<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $username = $_REQUEST['giatri'];
   $array = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
    if (in_array( $username, $array)) {
        echo "Tìm thấy giá trị ".$username. " !!" ;
        echo'<br>';
        echo 'vị trí của phần tử đó trong mảng là : '.$key = array_search($username, $array)."<br>";
        unset($array[$username ]);
        print_r( $array);
    }}
  
    
?> 

<form action="" method="post">
    <p>nhập giá trị cần tìm</p>
    <input type="text" name="giatri" id="">
    <input type="submit" v alue="Login">
</form>
</html>