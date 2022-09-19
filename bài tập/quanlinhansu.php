<?php
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $hoten = $_REQUEST['hoten'];
    $ngaysinhngaysinh = $_REQUEST['date'];
    $diachi = $_REQUEST['diachi'];
    $congviec = $_REQUEST['congviec'];
session_start();
class NhanVien{
    public $Hoten = '';
    public $NgaySinh = '';
    public $DiaChi ='' ;
    public $ViTriCongViec = '';
    public function __construct($Hoten , $NgaySinh , $DiaChi , $ViTriCongViec){
        $this->Hoten = $Hoten;
        $this->NgaySinh = $NgaySinh;
        $this->DiaChi = $DiaChi;
        $this->ViTriCongViec = $ViTriCongViec;
    }
    public function getInfo(){
        return [
            "Hoten" => $this->getHoten(),
           
            "NgaySinh"=>$this->getNgaySinh(),
            "DiaChi"=>$this->getDiaChi(),
            "ViTriCongViec"=>$this->getViTriCongViec()
        ];
    }
    public function getHoten(){
        return $this->Hoten;
    }
    public function getNgaySinh(){
        return $this->NgaySinh;
    }
    public function getDiaChi(){
        return $this->DiaChi;
    }
    public function getViTriCongViec(){
        return $this->ViTriCongViec;
    }
}
$objNhanVien= new NhanVien($hoten , $ngaysinhngaysinh , $diachi, $congviec);
echo '<pre>';
print_r ($objNhanVien);
echo '</pre>';
   }
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí nhân sự</title>
</head>
<body>
<form action="" method="post">
    <p>nhập họ tên</p>
    <input type="text" name="hoten" id="">
    <p>nhập ngày sinh</p>
    <input type="date" name="date" id="">
    <p>Nhập địa chỉ</p>
    <input type="text" name="diachi" id="">
    <p>nhập vị trí công việc</p>
    <input type="text" name="congviec" id="">
    <input type="submit" v alue="Login">
</form>
