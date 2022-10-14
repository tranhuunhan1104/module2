<?php
    class Stack{
        protected $element = [];
        protected $limit;

        public function __construct($limit)
        {
            $this->limit=$limit;
        }
        // hàm thêm phần tử
        public function push($elm){
            if($this->isFull() == false){
                array_unshift($this->element, $elm);
            }else{
                echo 'Stack is full';
            }
            
        }
        // hàm xóa phần tử đầu mảng
        public function pop(){
            if($this->isEmpty() == false){
                 array_shift($this->element);
            }else{
                return 'Stack is empty';
            }
          
        }
        // hàm trả về phần tử đầu mảng
        public function peek(){
            if($this->isEmpty() == false){
                return current($this->element);
            }else{
                return 'Stack is empty';
            }
            
        }

        public function isEmpty(){
            if (count($this->element) == 0){
               return true;
            }else{
                return false;
            }
        }

        public function isFull(){
            if (count($this->element) == $this->limit){
                return true;
             }else{
                 return false;
             }
         
        }
    }
    $objStack = new Stack(3);
    $objStack->push('van');
    $objStack->push('su');
    $objStack->push('dia');

    echo  $objStack->pop();


    echo'<pre>';
    print_r($objStack);
    die();