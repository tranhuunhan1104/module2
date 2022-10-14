<?php
    class Dancer{
        public $name;
        public $gender;

        public function __construct($name,$gender)
        {
            $this->name = $name;
            $this->gender = $gender;
        }


    }


    $maleQueue = new SplQueue();
    $maleQueue->enqueue(new Dancer('bt','male'));
    $maleQueue->enqueue(new Dancer('nhan','male'));
    $maleQueue->enqueue(new Dancer('linh','male'));
    $maleQueue->enqueue(new Dancer('xt','male'));
    $maleQueue->enqueue(new Dancer('pt','male'));


    $femaleQueue = new SplQueue();
    $femaleQueue->enqueue( new Dancer('duy','female'));
    $femaleQueue->enqueue( new Dancer('huyen','female'));
    $femaleQueue->enqueue( new Dancer('t tam','female'));
    $femaleQueue->enqueue( new Dancer('p thao','female'));


    $maleQueue->rewind();
    $femaleQueue->rewind();

    // echo'<pre>';
    // print_r($maleQueue);
    // echo'</pre>';
    // echo'<br>';
    // echo'<pre>';
    // print_r($femaleQueue);
    // die();


    $pairs = [];
    $female_waiting = [];
    $male_waiting = [];
    while ( $maleQueue->valid() || $femaleQueue->valid() ){
        if( $maleQueue->valid() && $femaleQueue->valid() ){
            $pairs[]= [
                'male' => $maleQueue->current(),
                'female' => $femaleQueue->current(),
            ];
            $maleQueue->next();
            $femaleQueue->next();
        }else if(!$maleQueue->valid()){
            $female_waiting[] = $femaleQueue->current();
            $femaleQueue->next();
            
        }elseif(!$femaleQueue->valid() ){
            $male_waiting[] = $maleQueue->current();
            $maleQueue->next();
        }
    }
    echo'<pre>';
    print_r($pairs);
    print_r($female_waiting);
    print_r($male_waiting);

    

