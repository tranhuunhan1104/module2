<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $abc = $_REQUEST['number'];
    $count = 0;

    for ($i = 2; $i <= $abc; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo $i;
            echo '<br>';
        }
        $count = 0;
    }
}

// if ( $_SERVER['REQUEST_METHOD']== 'POST') {
//     $number = $_REQUEST['number'];
//  $count = 0;  
//  $a = 2; 
// while ($count < $number){
// $flag = true;

//     for(  $i=2; $i< $a;$i++){
//         if($a%$i ==0){
//             $flag = false;
//         }

//     }
//     if($flag){
//         echo $a;
//         echo '<br>';
//         $count++;
//     }
//     $a++;
// }
// }
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
        <label for="">nhập số</label>
        <input type="text" name="number" id="">
        <br>
        <input type="submit" v alue="Login">
    </form>
</body>

</html>