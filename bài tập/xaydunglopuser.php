<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // luu vao bo nho , khai bao bien
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $rolex = $_REQUEST['rolex'];
 class user {
    protected $name = '';
    protected $email = '';
    public $role = '';
    public function __construct($ts_name ,$ts_email,$ts_role )
    {
        $this->name = $ts_name ;
        $this->email = $ts_email;
        $this->role = $ts_role;
    }
    public function getInfo(){
        return $this -> name;
    }
    public function isAdmin(){
        
        if($this-> role == 1){
            echo 'là admin';
        }
        else{
            echo 'là người dùng bình thường';
        }
    }
 }
 $objuser = new user($username, $email ,  $rolex);
 echo $objuser -> getInfo();
 echo '<br>';
 $objuser -> isAdmin();
}

 ?>
 <form action="" method="post">
    <p>Nhập tên người dùng</p>
    <input type="text" name="username" id="">
    <p>Email</p>
    <input type="text" name="email" id="">
    <p>Nhập rolex </p>
    <input type="text" name="rolex" id="">
    <input type="submit" v alue="Login">
</form>
 

