<?php
$input = '0912345678,0905111222,0978444333,0942345678';
$numbers = explode(',',$input);

// $numbers = ['0912345678','0905111222','0978444333','0942345678'];
$vinas = [];
$mobis = [];
$vietels = [];
foreach( $numbers as $number ){
    $pattern = '/^091/';//Bắt đầu 091
    $pattern = '/^(091|094)/';//Bắt đầu 091 Hoặc 094
    if (preg_match($pattern, $number)) {
        // array_push($vinas,$number);
        $vinas[] = $number;
    }

    $pattern = '/^(090|092)/';
    // Kiem tra -> push vao mobis

    $pattern = '/^(097|096)/';
    // Kiem tra -> push vao vietels



}




// $email = 'Nguyen_van_a@gmail.com';
$string = '+84.555.666.777 ';


$pattern = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if (preg_match($pattern, $string)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}






$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
print('<pre>');
preg_match_all($pattern, $subject, $matches);
print_r($matches);
print('</pre>');




$ip = "192.168.1.1";
$iparr = preg_split ("/\./", $ip);
print "$iparr[0] <br />";
print "$iparr[1] <br />" ;
print "$iparr[2] <br />" ;
print "$iparr[3] <br />" ;
