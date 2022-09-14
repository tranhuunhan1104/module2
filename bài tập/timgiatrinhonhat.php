<?php
// function getMin($array)
// {
   
//    $min = $array[0];
//    for ($i = 1; $i < count($array); $i++)
//        if ($min > $array[$i])
//            $min = $array[$i];
//     return $min;      
// }
 

// $array = array(1,0, 2, 3, 4, 5);
// echo('số nguyên tố nhỏ nhất trong mảng là :' .getMin($array));
function getMin($array)
{
   
   $min = $array[0];
   foreach($array as $key => $value){
        if($min > $value){
            $min = $value;
            return $min;
        }
   }  
}
 

$array = array(1, 2, 3, 4, 5,-88,0,222);
echo('số nguyên tố nhỏ nhất trong mảng là :' .getMin($array));
?>
