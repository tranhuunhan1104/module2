<?php
    // FIFO
    $objSplQueue = new SplQueue();

    $objSplQueue->enqueue('tt');
    $objSplQueue->enqueue('bt');
    $objSplQueue->enqueue('n');
    $objSplQueue->enqueue('ht');
    $objSplQueue->enqueue('pt');

    $objSplQueue ->dequeue();


    $objSplQueue ->rewind();

    while($objSplQueue->valid()){
        echo $objSplQueue ->current();
    $objSplQueue->next();
    echo'<br>';
    }

    echo'<pre>';
    print_r($objSplQueue);
    die();