<?php
include_once './../dtb.php';
// echo' <pre>';
// print_r($_GET);
// die();
$id =$_GET['id'];
//debug giá trị lấy xuống
// var_dump(id);
$sql = "SELECT * FROM `students` WHERE id = $id";
//debug câu sql
var_dump($sql);
//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();
//debug dữ liệu trả về
// echo' <pre>';
// print_r($row);
// die();

?>
<table border="1">
    <tr>
        <td> HỌC SINH  </td>
        <td> <?php echo $row->name;?> </td>
        <td> <?php echo $row->class;?> </td>
        <td> <?php echo $row->address;?> </td>
        <td> <?php echo $row->email;?> </td>
        <td> <?php echo $row->image;?> </td>
    </tr>

</table>