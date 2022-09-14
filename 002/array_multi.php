<?php
$tusach = [
    ['toan','li','hoa'],
    ['van','su','dia'],
];
echo $tusach[0][1];

// them
$tusach[0][3]='sinh';
// 
array_push($tusach[1],'anh');
echo '<pre>';
print_r($tusach);
echo '</pre>';