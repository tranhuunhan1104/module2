<?php
$username = 'root';
$password = '';
$database = 'thi_m2';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (\Exception $e) {
    echo $e->getMessage();
    die();
}