<?php
/*
• enqueue(): thêm (hay lưu trữ) một phần tử vào trong hàng đợi.
• dequeue(): xóa một phần tử từ hàng đợi. • peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này
• isEmpty(): Kiểm tra rỗng
  peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này
• isFull(): kiểm tra xem hàng đợi đã đầy hay chưa.
*/
        class Queue
        {
            protected $element = [];
            protected $limit;

            public function __construct($limit)
            {
                $this->limit = $limit;
            }
            // đưa phần tử vào cuối mảng
            public function enqueue($elm)
            {
                if($this->isFull() == false){
                    array_push($this->element, $elm);
                }else{
                    echo'Queue is full';
                }
                
            }
            // xóa phần tử ở đầu mảng
            public function dequeue()
            {
                if($this->isEmpty() == false){
                    array_shift($this->element);
                }else{
                    echo 'Queue is empty';
                }
                
            }
            // lấy phần tử đầu mảng
            public function peek()
            {
                if($this->isEmpty() == false){
                    return current($this->element);
                }else{
                    echo 'Queue is empty';
                }
                
            }
            public function isEmpty()
            {
                if (count($this->element) == 0){
                    return true;
                 }else{
                     return false;
                 }
            }
            public function isFull()
            {
                if (count($this->element) == $this->limit){
                    return true;
                 }else{
                     return false;
                 }
            }
        }
        $objQueue = new Queue(3);
        $objQueue->enqueue('van');
        $objQueue->enqueue('su');
        $objQueue->enqueue('dia');
        // $objQueue->enqueue('toan');
        echo '<pre>';
        print_r($objQueue);
        echo '</pre>';
