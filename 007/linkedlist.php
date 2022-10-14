<?php
// nốt
    class Node{
        public $data;
        public $next = null ;

        public function __construct($ts_data)
        {
            $this->data = $ts_data;
        }
    }
    class Linkedlist{
        public $firstNode = null ;
        public function insert($elm){
            $node = new Node($elm);
            // echo'<pre>';
            // print_r($node);
            // die();
            if($this->firstNode == null){
                $this->firstNode = $node;
            }else{
                $currentNode = $this->firstNode;
                while($currentNode->next != null){
                    $currentNode = $currentNode->next;
                }
                $currentNode->next = $node;
            }
            // $this->firstNode = $node;
        }
    }
    $objLinkedlist = new Linkedlist();
    $objLinkedlist -> insert('tt');
    $objLinkedlist -> insert('n');
    $objLinkedlist -> insert('bt');
    $objLinkedlist -> insert('pt');
    $objLinkedlist -> insert('ht');

    echo'<pre>';
    print_r( $objLinkedlist);
    die();