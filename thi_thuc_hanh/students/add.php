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
$sql="SELECT * FROM `class`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name    = $_REQUEST['name'];
    $class    = $_REQUEST['class'];
    $birthday    = $_REQUEST['birthday'];
    $thongtin    = $_REQUEST['thongtin'];
    $gender    = $_REQUEST['gender'];
    $my_sql = "SELECT students.id, class.name_class
    FROM students
    INNER JOIN class ON students.id=class.id";
      $sql = "INSERT INTO `students`
      (`name`,`class`,`birthday`,`thongtin`,`gender`)
      VALUES
      ('$name','$class','$birthday','$thongtin','$gender') ";
    try {
        $conn->exec($sql);
        header("Location: list.php?msg=OK");
    } catch (Exception $e) {
        header("Location: list.php?msg=FAIL");
    }

}
?>
<h1>Thêm mới học sinh</h1>
<form action="" method="post">
    <table class="table">
        <tr>
            <th>name:</th>
            <th>class:</th>
            <th>birthday:</th>
            <th>thongtin: </th>
            <th>gender:</th>
        </tr>
        <tr>
            <th><input type="text" name="name" ></th>
            <th><select name="class" id="breed">
                    <?php if (isset($rows)) : ?>
                        <?php foreach ($rows as $row) { ?>
                            <option value="<?= $row->id ?>"><?= $row->name_class ?></option>
                        <?php  } ?>
                        <?php else : "";
                    endif; ?>
                </select><br></th>
            <th><input type="date" name="birthday" ></th>
            <th><input type="text" name="thongtin" ></th>
            <th><select name="gender" >
    <option value="nam">nam</option>
    <option value="nữ">nữ</option>
</select></th>
        </tr>
    </table>


 
    <button class="btn btn-warning" type="submit">Lưu</button>
    <a href="list.php" class="btn btn-danger">Huỷ</a>
</form>