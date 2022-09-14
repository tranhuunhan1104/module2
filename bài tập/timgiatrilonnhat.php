<?php
function getMax($a)
{
    
    $max = $a[0];
   
   
   foreach($a as $value){
        if($max < $value){
            $max = $value;
           
        }
   }  
   return $max;
}
 

$a = array(1, 44, 5, 6, 68, 9);

echo('số nguyên tố lớn nhất trong mảng là :' .getMax($a));

?>
