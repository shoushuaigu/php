<?php
    $n1 = 123;
    $n2 = 123.123;
    $n3 = 123.789;
    echo intval($n2).'---'.intval($n3);
    echo '<hr>';
    echo round($n2).'---'.round($n3);
    echo '<hr>';
    echo intval(true);
    echo '<hr>';
    echo intval(false);
    echo '<hr>';
    echo round(true);
    echo '<hr>';
    echo round(false);
    echo '<hr>';
    var_dump(floatval(12.21));
    // 浮点数比较不能直接比，设定一个相对精度，相对此精度比较
    $a = 12.123456789;
    $b = 12.123456788;
    $c = 0.000000001;
    echo '<hr>';
    if(abs($a-$b)<=$c){
        echo '相等';
    }else{
        echo '不相等';
    }