<?php
include_once './../dtb.php';

$sql = "SELECT * FROM `oders_book` ";
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
            <th>students_id  </th>
            <th>date_borrow</th>
            <th>date_pay</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
        <tr>
            <td><?= $row->id; ?></td>
            <td><?= $row->students_id; ?></td>
            <td><?= $row->date_borrow; ?></td>
            <td><?= $row->date_pay; ?></td>
            <td>
                <a href="show.php?id=<?= $row->id; ?>">Xem</a> |
                <a href="edit.php?id=<?= $row->id; ?>">Sửa</a> |
                <a href="delete.php?id=<?= $row->id; ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>