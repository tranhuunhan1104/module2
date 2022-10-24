<?php
include_once './../dtb.php';

// echo '<pre>';
// print_r( $_GET );
// die();

$id = $_GET['id'];

// Debug gia tri lay xuong
// var_dump($id);
$sql = "SELECT * FROM `class` WHERE id = $id ";
// Debug cau SQL
// var_dump($sql);

//truyen cau truy van vao
$stmt = $conn->query($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();

// Debug dữ liệu trả về
// echo '<pre>';
// print_r( $row );
// die();
?>
<table border="1">
    <tr>
        <td> name_class </td><br>
        <td> <?php echo $row->name_class;?> </td>
    </tr>
</table>