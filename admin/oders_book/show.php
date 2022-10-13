<?php
include_once './../dtb.php';

// echo '<pre>';
// print_r( $_GET );
// die();

$id = $_GET['id'];

// Debug gia tri lay xuong
// var_dump($id);
$sql = "SELECT * FROM `oders_book` WHERE id = $id ";
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
        <td> date_borrow </td>
        <td> <?php echo $row->date_borrow;?> </td>
    </tr>
    <tr>
        <td> date_pay </td>
        <td>  <?php echo $row->date_pay;?> </td>
    </tr>
    <tr>
        <td> students_id </td>
        <td>  <?php echo $row->students_id;?> </td>
    </tr>
   
</table>