<?php
include_once './../dtb.php';

$sql = "SELECT * FROM `books` ";
// echo $sql; die();

//truyen cau truy van vao
$stmt = $conn->query($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();
?>
<h1>Danh sách các loại sách sẽ được cho thuê</h1>
<a href="add.php">Thêm mới</a>
<?php if( isset( $_GET['msg'] )  && $_GET['msg'] == 'OK' ):?>
<p>Them thanh cong</p>
<?php endif;?>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>category_id </th>
            <th>name</th>
            <th>price</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->category_id; ?></td>
            <td><?= $row->name; ?></td>
            <td><?= $row->price; ?></td>
            <td>
                <a href="show.php?id=<?= $row->id; ?>">Xem</a> |
                <a href="edit.php?id=<?= $row->id; ?>">Sửa</a> |
                <a href="delete.php?id=<?= $row->id; ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>