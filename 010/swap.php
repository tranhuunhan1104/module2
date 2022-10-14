<?php
    // $book = ['văn','sử','địa'];

    // $temp = $book[1];
    // $book[1] = $book[0];
    // $book[0] = $temp;
    // echo '<pre>';
    // print_r($book);



    // NỔI BỌT
    // $arr = [5,8,6,34,22,40,11,18,23,44];

    // $a= count($arr)-1;

    // for($i = 0 ; $i < $a ; $i++){

    //     for($j = $a ; $j > $i ; $j--){

    //         if($arr[$j] < $arr[$j-1]){

    //             $temp = $arr[$j-1];

    //             $arr[$j - 1] = $arr[$j];

    //             $arr[$j] = $temp;

    //         }
    //     }
    // }
    // echo'<pre>';
    // print_r($arr);




        // CHÈN
    // $arr = [5,8,6,34,22,40,11,18,23,44];

    // $a= count($arr);

    // for($i = 1 ; $i < $a ; $i++){

    //     $j = $i-1;

    //     $temp = $arr[$i];

    //     while($temp < $arr[$j] && $j >= 0 ){
            
    //         $arr[$j+1] = $arr[$j];

    //         $j--;
    //     }

    //     $arr[$j+1] = $temp;
    // }


    //  echo'<pre>';
    //  print_r($arr);




// CHỌN
//     $numbers = [5,8,6,34,22,40,11,18,23,44];

    
//     for( $i = 0 ; $i < count($numbers); $i++ ){
//         $min = $i;
//         for( $j = $i + 1; $j < count($numbers); $j++  ){
//             if( $numbers[$j] < $numbers[$min]  ){
//                 $min = $j;
//             }
//         }
//         $temp = $numbers[$min];
//         $numbers[$min] = $numbers[$i];
//         $numbers[$i] = $temp;
//     }
    
//     echo '<pre>';
//     print_r($numbers);
//     die();
// echo'<pre>';
// print_r($arr);



    $numbers = [5,8,6,34,22,40,11,18,23,44];

        
    for( $i = 0 ; $i < count($numbers); $i++ ){
        $max = $i;
        for( $j = $i + 1; $j < count($numbers); $j++  ){
            if( $numbers[$j] > $numbers[$max]  ){
                $max = $j;
            }
        }
        $temp = $numbers[$max];
        $numbers[$max] = $numbers[$i];
        $numbers[$i] = $temp;
    }

    echo '<pre>';
    print_r($numbers);
    die();
    echo'<pre>';
    print_r($arr);
    
