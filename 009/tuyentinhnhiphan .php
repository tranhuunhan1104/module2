<?php
// TUYEN TINH
 
function findMin($arr): int
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}






$nums = [-2, 0, 5, 7, 9, -5, 30, 100];

foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;
die();




//  NHI PHAN

    $find = 23;
    $numbers = [2,5,8,12,16,23,38,56,72,91];
    //          0 1 2  3  4  5  6  7  8  9

    // tìm vị trí
    // $index = array_search(23,$numbers);
    // var_dump($index);
    // die();



    $L = 0;
    $R = count($numbers)-1;
    while($L <= $R){
        $M = floor(($L + $R)/2);//4
        //$numbers[$M] = 16
        if($numbers[$M]> $find){
            $R = $M - 1;
        }elseif($numbers[$M]<$find){
            $L = $M + 1;
        }else{
            echo 'Tìm ra '.$find.'Tịa vị trí '.$M;
            break;
        }
    }
    die();

/*
L = 5
R = 9
*/
    $M = floor(($L + $R)/2);//7
    //$numbers[$M] = 56
    if($numbers[$M]> $find){
        $R = $M - 1;
    }elseif($numbers[$M]<$find){
        $L = $M + 1;
    }else{
        echo 'Tìm ra '.$find.'Tịa vị trí '.$M;
    }
/*
L = 5
R= 6
*/
    $M = floor(($L + $R)/2);//5
    //$numbers[$M] = 23
    if($numbers[$M]> $find){
        $R = $M - 1;
    }elseif($numbers[$M]<$find){
        $L = $M + 1;
    }else{
        echo 'Tìm ra '.$find.'Tịa vị trí '.$M;
    }




$numbers= [1,4,5,6,7,8,3];
        // 0 1 2 3 4 5 6
$find = 8 ;
foreach ($numbers as $key => $value){
        // $key 0 1 2 3 4 5 6
        // $value 1,4,5,6,7,8,3
        if($value == $find){
            echo 'Tìm thấy '.$find.'ở vị trí '.$key;
        }
}







