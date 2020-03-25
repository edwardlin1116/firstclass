<?php
//if 判斷式

$score=50;

if($score>=70){
    echo "及格";
}
else{
    echo "不及格";
}
echo "<hr>";

//判斷成績

$score=70;
echo "成績：";
echo "<br>";
echo "等級：";

if($score>=90){
    echo "A";
}
elseif($score>=75){
    echo "B";
}
elseif($score>=60){
    echo "C";
}
else{
    echo "D";
}

//巢狀判斷式
echo "<br>";
if($score>=90){
    echo "A";
}
else{
    if($score>=75){
        echo "B";
    }
    else{
        if ($score>=60) {
            echo "C";
        } else {
            echo "D";
        }
        
    }
}


?>