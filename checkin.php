<?php
// cau 1
// $age=1;
// if($age>=18){
//     echo'ban duoc uong bia';
// }


// // cau2
// $money = true;
// $age = 16;
// if($age == 18 && $money == true){
//     echo'ban duoc uong bia';
// }

// // cau3
// $money = true;
// $age = 18;
// if($age == 18 || $money == false){
//     echo'ban duoc uong bia';
// }

// // cau4
// $age = 17;
// if (!($age >= 18) ) {
//     echo "ban phai uong nuoc ngot";
// }

// // cau5
// $money = true;
// $cho_no = true;
// $quan_mo = true;
// if ($quan_mo == true && ($cho_no == true && $money == true)) {
//     echo'ban duoc nhau';
// }

// // cau6

// $money = true;
// $cho_no = true;
// $quan_mo = true;
// if ($quan_mo == false && ($cho_no == true && $money == true)) {
//     echo'ban duoc nhau';
// } else {
//    echo'ban phai ve nha';
// }

// // cau7
// $day = 4;
// if ( $day <= 6 && $day >= 2) {
//    echo'di lam';
// } else if ($day == 7 ){
//     echo'sinh hoat clb';
// }else{
//     echo'relax';
// }

// // cau8

// $favcolor = "";
// switch ($favcolor) {
// case "1":
// echo "co 31 ngay";
// break;
// case "2":
// echo "co 28 ngay";
// break;
// default:
// echo "co 30 ngay"; }


// // cau9

// $day = 5;
// switch ($day) {
//     case "$day == 2 || $day == 3 || $day == 4 || $day == 5 || $day == 6":
//         echo'di lam';
//         break;
//         case"$day==7":
//             echo'sinh hoat clb';
//             break;
    
//     default:
//     echo'relax';
        
// }

// // cau10

//     $age = 17;
//     echo($age >= 18)?'được uống bia':'uống rượu'



// //     cau11

//     $day = 7;
//     switch(true)
//     {
//         case ($day <= 6 && $day >=2):
//            echo'đi làm';
//         break;
//         case ($day == 7):
//            echo'sinh hoạt clb'; 
//         break;
//         default:
//            echo'relax';
//         break;
//     }

// //     cau12
//        for($i = 1 ; $i <= 5 ; $i ++){
//         echo $i;
//        }

// //     cau13 

//     for($i = 1 ; $i <= 10 ; $i ++){
//         echo'5 x '.$i.'='. 5*$i;
//         echo '<br>';
//     }

// //     cau14

//     for($i = 0 ; $i <= 100 ; $i++){
//         if ($i % 2 == 0) {
//             echo $i;
//             echo'<br>';
//         }

//     }

// //     cau15

//     for($i = 100 ; $i >= 1 ; $i --){
//         if ($i %2 == 1) {
//             echo $i;
//         echo'<br>';
//         }
        

//     }

// //     cau16
//         $sum = 0;
//     for($i = 1 ; $i <= 10 ; $i ++){
//        $sum = $sum + $i;

//     }
   
//     echo $sum;

// //     cau17


//     $i = 0;
//     while($i <= 5 ){
//         echo $i;
//         $i++;
//     }

// //     cau18

//     $i = 10 ;
//     while($i >= 1){
//         echo $i;
//         $i --;
//     }

// //     cau19

//     $i = 0;
//     do {
//         echo $i;
//     echo'<br>';
//         $i++;
//     } while ($i<6)

// //     cau20

//     $i = 10;
//     do {
//         echo $i;
//         echo'<br>';
//         $i --;
//     } while ( $i >= 5)

// //     cau21

//     for($i = 0 ; $i <= 10 ; $i ++){
//         if($i == 5){
//             break;
//       }
//         echo $i;
//     }

// //     cau22

//     for($i = 1 ; $i <= 5 ; $i++){
//         if ($i == 3) {
//             continue;
//         }
//         echo $i;
//     }



// //     cau23

//     for($i = 0 ; $i <= 10 ; $i ++){
//         if ($i % 2 == 1) {
//           continue;
//     }
//     echo $i;
// }



// //     cau24


//     echo "<table>";
// for ($i = 1; $i <= 8; $i ++){
//  echo "<tr>";
// for($j = 1; $j <= 3; $j ++){
//  echo "<td>" . $i . $j. "</td>";
// }
// echo "</tr>";
// }
// echo "</table>";


//     câu25

if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
 

    // luu vao bo nho , khai bao bien
    $sothunhat = $_REQUEST['sothunhat'];
    $sothuhai = $_REQUEST['sothuhai'];
    $pheptinh = $_REQUEST['pheptinh'];
    switch ($pheptinh) {
        case '+':
         $ketqua = $sothuhai + $sothunhat;
         echo $ketqua;

          break;
        case '-':
            $ketqua = $sothunhat - $sothunhai;
            echo $ketqua;

          break;
        case '*':
            $ketqua = $sothunhat * $sothuhai;
            echo $ketqua;


          break;
          case '/':
           if ($sothuhai == 0){
            echo ' looix roi ku em a';
           }
           else{
            $ketqua = $sothunhat / $sothuhai;
            echo $ketqua;
           }

            break;
       
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

<select id="cars" name="pheptinh">
  <option value="+">Cong </option>
  <option value="-">Tru </option>
  <option value="*">Nhan</option>
  <option value="/" selected>Chia</option>
</select>

    <br>
    <label for="">so thu hai</label>
    <input type="text" name="sothuhai" id="">
    <br>
    <input type="submit" value="Tinh">
</form>
</body>
</html>
