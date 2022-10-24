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

$id = $_GET['id'];
$sql = "SELECT * FROM `students` WHERE id = $id ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row = $stmt->fetch();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_REQUEST['name'];
    $class    = $_REQUEST['class'];
    $birthday   = $_REQUEST['birthday'];
    $thongtin   = $_REQUEST['thongtin'];
    $gender   = $_REQUEST['gender'];
    $sql = "UPDATE `students` 
        SET 
            `name` = '$name',
            `class` = '$class',
            `birthday` = '$birthday',
            `thongtin` = '$thongtin',
            `gender` = '$gender'
        WHERE `students`.`id` = $id";
    try {
        $conn->exec($sql);
        header("Location: list.php?msg=OK");
    } catch (Exception $e) {
        header("Location: list.php?msg=FAIL");
    }
}

?>
<h1>Chỉnh sửa thông tin học sinh</h1>
<form action="" method="post">
    <table class="table">
        <tr>
            <th>name:</th>
            <th>class:</th>
            <th>birthday: </th>
            <th>thongtin:</th>
            <th>gender: </th>
        </tr>
        <tr>
            <td><input class="form-control" type="text" name="name" value="<?= $row->name; ?>"></td>
            <td><input class="form-control" type="text" name="class" value="<?= $row->class; ?>"></td>
            <td><input class="form-control" type="date" name="birthday" value="<?= $row->birthday; ?>"> </td>
            <td><input class="form-control" type="text" name="thongtin" value="<?= $row->thongtin; ?>"> </td>
            <td><input class="form-control" type="text" name="gender" value="<?= $row->gender; ?>"> <br></td>
        </tr>
    </table>




    <button class="btn btn-info" type="submit">Lưu</button>
</form>