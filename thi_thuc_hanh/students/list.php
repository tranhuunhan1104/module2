<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
include_once './../dtb.php';

$sql = "SELECT * FROM `students` ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
$sql = "SELECT students.*, class.name_class as class_name FROM students join class on students.class= class.id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
?>
<h1>Danh sách học sinh</h1>
<a class="btn btn-info"  href="add.php">Thêm mới</a>
<?php if( isset( $_GET['msg'] )  && $_GET['msg'] == 'OK' ):?>
<p>Them thanh cong</p>
<?php endif;?>
<table class="table" border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>name </th>
            <th>class </th>
            <th>birthday</th>
            <th>thongtin</th>
            <th>gender</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
        <tr>
            <td><?= $key+1; ?></td>
            <td><?= $row->name; ?></td>
            <td><?= $row->class_name ; ?></td>
            <td><?= $row->birthday; ?></td>
            <td><?= $row->thongtin; ?></td>
            <td><?= $row->gender; ?></td>
            <td>
                
                <a class="btn btn-warning" href="edit.php?id=<?= $row->id; ?>">Sửa</a> |
                <a class="btn btn-danger" href="delete.php?id=<?= $row->id; ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>