<?php
// ResizeAble : khả năng cho phép điều chỉnh kích thươcs
interface ResizeAble
{
    // hằng số
    const SIZE = 0;

    // pttt : resize

    function resize();
}
interface Fillcolor
{
    // pttt : fill
    function fill();
}
abstract class Hinhhoc
{
    abstract function tinhDientich();
    abstract function tinhChuvi();
}
class Hinhvuong extends Hinhhoc implements ResizeAble,Fillcolor
{
    public function tinhDientich()
    {
    }
    public function tinhChuvi()
    {
    }
    public function resize(){

    }
    public function fill(){
        
    }
}
