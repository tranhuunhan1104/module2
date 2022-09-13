<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $ProductDescription = $_REQUEST['ProductDescription'];
    $ListPrice = $_REQUEST['ListPrice'];
    $DiscountPercent = $_REQUEST['DiscountPercent'];
    $DiscountAmount = $ListPrice * $DiscountPercent * 0.1 ;
    echo $DiscountAmount ;  
    echo '<br>';
    echo $ProductDescription;
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
  <label for="">ProductDescription</label><br>
  <input type="text"  name="ProductDescription"><br>
  <label for="">ListPrice</label><br>
  <input type="text"  name="ListPrice" ><br>
  <label for="">DiscountPercent</label><br>
  <input type="text"  name="DiscountPercent"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>