<?php
include_once './../dtb.php';

// echo '<pre>';
// print_r( $_GET );
// die();

$id = $_GET['id'];
$sql = "DELETE FROM oders_book WHERE `oders_book`.`id` = $id";
// THuc hien truy van
try {
    $conn->exec($sql);
    // CHuyển hướng về danh sách
    header("Location: list.php?msg=Xoa thanh cong");
} catch (Exception $e) {
    // CHuyển hướng về danh sách
    header("Location: list.php?msg=Xoa that bai");
}