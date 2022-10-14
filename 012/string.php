<?php
$name = 'nguyen van a';
$msg = "xin chao $name";
echo $msg;

/*
    các hàm xử lí chuỗi :

    tìm kiếm và xử lí các bài tập sau:
    1. chuyển chuỗi tôi, yêu, lập, trình sang mảng ['tôi','yêu','lập','trình']


    2. chuyển mảng ['tôi','yêu','lập','trình'] sang chuỗi tôi yêu lập trình


    3. từ chuỗi tôi yêu lập trình sang tôi yêu codegym



    4. từ chuỗi tôi yêu codegym, kiểm tra kí tự codegym có nằm trong chuôi hay không ?


     */
$name = 'toi, yeu, lap, trinh';
echo '<pre>';
print_r( explode(', ', 'toi, yeu, lap, trinh'));



$str = ['toi','yeu','lap','trinh'];
$str1 = implode(' ', $str);
echo $str1;
echo '<br>';



$result = str_replace(['lap trinh'], ['codegym'],  'toi yeu lap trinh');
echo $result;
echo '<br>';



$str = 'toi yeu codegym';
$char = 'codegym';
$pos = strpos($str, $char);
if ($pos == true) {
    echo "kí tự '" . $char . "' tồn tại trong chuỗi";
}
