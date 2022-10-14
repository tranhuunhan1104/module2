<?php
    // LIFO
    $objSplStack = new SplStack();

    // them cac phan tu vao danh sach
    $objSplStack ->push('tam');
    $objSplStack ->push('nhan');
    $objSplStack ->push('b.thang');
    $objSplStack ->push('x.thang');
    $objSplStack ->push('p.tam');


    // dua con tro ve vij tri dau
    $objSplStack ->rewind();

    // lay phan tu ra
    while($objSplStack->valid()){
        echo $objSplStack ->current();
    $objSplStack->next();
    echo'<br>';
    }
    // echo $objSplStack ->current();
    // $objSplStack->next();
    // echo'<br>';

    // echo $objSplStack ->current();
    // $objSplStack->next();
    // echo'<br>';


    echo '<pre>';
    print_r($objSplStack);
    die();
