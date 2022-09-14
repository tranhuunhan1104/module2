<?php
$array1 = array(1,2,3,4,5);
$array2 = array(6,7,8,9,10);
$result = [];
for($i = 0 ; $i < count($array1) ; $i ++ ){
    array_push($result,$array1[$i]);
}
for($j = 0 ; $j < count($array2) ; $j ++ ){
    array_push($result,$array2[$j]);
}
echo '<pre>';

print_r($result);
echo '</pre>';
?>