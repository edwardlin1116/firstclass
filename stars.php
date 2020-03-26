<style>

*{
    font-family:"Courier new";
}
</style>

<?php
//直角三角形

for($i=0;$i<5;$i++){

    for($j=0;$j<($i+1);$j++){

        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

//倒直角三角形

for($i=0;$i<5;$i++){

    for($j=0;$j<(5-$i);$j++){

        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

for($i=5;$i>0;$i--){

    for($j=0;$j<$i;$j++){

        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

//正三角形

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";//not break space
    }
    
    for($j=0;$j<($i*2+1);$j++){
        
        echo "*"; 
        }

    echo "<br>";
    
}

echo "<hr>";

//菱形

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";//not break space
    }
    
    for($j=0;$j<($i*2+1);$j++){
        
        echo "*"; 
        }    
    if($i<5){

    }

    echo "<br>";
    
}

for($i=3;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
        echo "&nbsp;";//not break space
    }
    
    for($j=0;$j<($i*2+1);$j++){
        
        echo "*"; 
        }    
    if($i<5){

    }

    echo "<br>";
    
}

echo "<hr>";

//解法二

for($i=0;$i<9;$i++){
    //利用判斷式來決定t的值，再用t的值來決定空白及星星的數量
    if($i<=4){

        $t=$i;
    }
    else{
        $t=8-$i;
    }
    //印空白
    for($k=0;$k<(4-$t);$k++){
        echo "&nbsp;";//not break space
    }
    //印星星
    for($j=0;$j<($t*2+1);$j++){
        
        echo "*"; 
    }    
    //斷行
    echo "<br>";
    
}



//矩形



//內含對角線的矩形




?>