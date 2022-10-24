<?php
include_once './../dtb.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE `students`.`id` = $id";
try {
    $conn->exec($sql);
    header("Location: list.php?msg=Xoa thanh cong");
} catch (Exception $e) {
    header("Location: list.php?msg=Xoa that bai");
}