<?php
include_once './../dtb.php';

$id = $_GET['id'];
// Debug gia tri lay xuong
// var_dump($id);
$sql = "SELECT * FROM `category` WHERE id = $id ";
// Debug cau SQL
// var_dump($sql);

//truyen cau truy van vao
$stmt = $conn->query($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();
// Debug dữ liệu trả về


// Kiem tra nguoi dung da gui du lieu di
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // Debug du lieu dc gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Lấy dữ liệu gửi lên
    $name_category    = $_REQUEST['name_category'];
    $sql = "UPDATE `category` 
        SET 
            `name_category` = '$name_category' 
            
        WHERE `category`.`id` = $id";
    // Debug sql
    // var_dump($sql);
    // die();

    // THuc hien truy van
    try {
        $conn->exec($sql);
        // CHuyển hướng về danh sách
        header("Location: list.php?msg=OK");
    } catch (Exception $e) {
        // CHuyển hướng về danh sách
        header("Location: list.php?msg=FAIL");
    }
}

?>
<h1>Thêm mới sản phẩm</h1>
<form action="" method="post">
name_category: <input type="text" name="name_category" value="<?= $row->name_category;?>" > <br>
    <button type="submit">Lưu</button>
</form>