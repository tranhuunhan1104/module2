<?php
    //Container: Lớp chưa dữ liệu
    class ArrayList {
        // thuộc tính
        private $elements = [];

        // Lấy về một phần tử
        public function get($index){
            if(isset($this->elements[$index])){
                return $this->elements[$index];
            }
            return false;
        }
        // them mot phan tu
        public function add($elements){
            return array_push($this->elements, $elements);
        }
        // xoa mot phan tu
        public function removeByIndex($index){
            return array_splice($this->elements,$index,1 );
        }
        //  lay ve so luong phan tu
        public function size(){
            return count($this->elements);
        }
        // tim kiem phan tu
        public function find($elements){
            return array_search($elements, $this->elements);
        }
        // kiem tra rong
        public function isEmpty(){
            if( count ($this->elements)==0){
                return true;
            }else{
                return false;
            }
        }

    }
    $objArraylist = new Arraylist();
    $objArraylist->add('thao tam');
    $objArraylist->add('thang');
    $objArraylist->add('tt');
    $objArraylist->add('nhan');
    $objArraylist->add('phong tam');
    $objArraylist->add('xuan thang');
   
    // xoa
    $objArraylist->removeByIndex(2);
    echo'<pre>';
    print_r( $objArraylist);
    echo'</pre>';
    echo  $objArraylist->find('nhan');
    echo  $objArraylist->get(3);
    echo  $objArraylist->size();
    

