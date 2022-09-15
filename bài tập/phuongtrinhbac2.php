<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ts_a = $_REQUEST['nhapa'];
    $ts_b = $_REQUEST['nhapb'];
    $ts_c = $_REQUEST['nhapc'];

class  QuadraticEquation
{
    // thuộc tính
    public $a = '';
    public $b = '';
    public $c = '';
    public function __construct($ts_a, $ts_b, $ts_c)
    {
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }
    public function setA($a)
    {
        $this->a = $a;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getB()
    {
        return $this->b;
    }
    public function setC($c)
    {
        $this->c = $c;
    }
    public function getC()
    {
        return $this->a;
    }
    public function getDiscriminant(){
        return ($this->b*$this->b)-4* $this->a* $this->c;
    }
    public function getRoot1 (){
        $delta = $this->getDiscriminant();
        if ($delta > 0) {
           $x1 = (-$this ->b - (sqrt($delta))/($this ->a * 2));
           $x2 = (-$this ->b + (sqrt($delta))/($this ->a * 2));
           echo 'phương trình có nghiệm X1 =' . $x1;
           echo 'phương trình có nghiệm X2 =' . $x2;
           

        } else if( $delta == 0) {
            $x = (- $this -> b)/2*$this->a;
            echo 'phương trình có nghiệm chung X = '.$x;
        }else{
            echo 'phương trình vô nghiệm';
        }
        
    }
  

}
$quadraticEquation = new QuadraticEquation($ts_a , $ts_b , $ts_c);
$quadraticEquation->getRoot1();
}
?>
<form action="" method="post">
    <p>nhập a
    <p>
        <input type="text" name="nhapa" id="">
    <p>nhập b
    <p>
        <input type="text" name="nhapb" id="">
    <p>nhập c
    <p>
        <input type="text" name="nhapc" id="">
        <input type="submit" v alue="Login">
</form>