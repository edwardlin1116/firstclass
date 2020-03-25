<?php
    //宣告一個變數
    $a=1;
    echo $a;
    echo "<br>";
    $a=2.1;
    echo $a;
    echo "<br>";
    print($a);
    echo "<br>";

    $studentInSchool="yes";
    

    /*
    宣告一個常數
    常數不可以變更
    */
    define("PI",3.14);
    echo PI;
    echo "<br>";
    echo PI*2*10;

    //運算子!
    $a=false;
    echo $a;
    echo "<hr>";
    echo !$a;

    //運算子 ++   => $b=$b+1;
    echo "<hr>";
    $b=1;
    echo $b++;
    echo "<hr>";
    echo $b+1;
    echo "<hr>";

    //算術運算值 +, -, *, /
    $a=2;
    $b=4;
    echo $a+$b;
    echo "<hr>";

    //字串運算 2
    $a=2;
    $b="a";
    echo $a;
    echo "<br>";
    echo $b;
    $c=$a . $b;
    $d=$a + $b;
    echo "<hr>";
    echo $c;
    
    echo $d;
    echo "<hr>";

    //三元運算子
    $a=5;
    $b=2; 

    echo ($a>0)?"很貴":"免費";

    echo "<hr>";

    if($a>0){
        echo "很貴";
    }else{
        echo "免費";
    }

?>
