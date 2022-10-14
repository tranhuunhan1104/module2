<h1>Edit san pham</h1>
<form action="index.php?controller=order&page=update&id=<?php echo $item->SOHOADON;?>" method="post">
MAKHACHHANG: <input type="text" value = "<?php echo $item->MAKHACHHANG;?>" name="MAKHACHHANG"> <br>
MANHANVIEN: <input type="text" value = "<?php echo $item->MANHANVIEN;?>" name="MANHANVIEN"> <br>
NGAYDATHANG: <input type="text" value = "<?php echo $item->NGAYDATHANG;?>" name="NGAYDATHANG"> <br>
NGAYGIAOHANG: <input type="text" value = "<?php echo $item->NGAYGIAOHANG;?>" name="NGAYGIAOHANG"> <br>
NGAYCHUYENHANG: <input type="text" value = "<?php echo $item->NGAYCHUYENHANG;?>" name="NGAYCHUYENHANG"> <br>
NOIGIAOHANG: <input type="text" value = "<?php echo $item->NOIGIAOHANG;?>" name="NOIGIAOHANG"> <br>
    <button type="submit">Lưu</button>
</form>