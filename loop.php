<style>
table{
    border:1px solid #999;
    padding:10px;
}

table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;    
}
table tr:nth-child(1),table td:nth-child(1){
    background:#bbb;
}

</style>

<?php

//for loop

//for($i=0;$i<10;$i++)
/*for($i=0;$i<10;$i=$i+1){

    for($j=0;$j<10;$j=$j+1){

        echo "hello" . $i ."-". $j ."<br>";
         ."<br>"
    }
    
}
echo "<table border='1'><br />";
for($i=1;$i<=9;$i++){

    echo "<tr>";
    for($j=1;$j<=9;$j++){


        echo "<td>". ($i . "x" . $j . "=" .($i * $j)). "</td>";
        
    }
    echo "</tr>";
}
 echo "</table>"*/

 echo "<table border='1'><br />";
 
 for($i=0;$i<=9;$i++){
        
     for($j=0;$j<=9;$j++){
        
        if($i == 0 && $j == 0){
            echo "<tr><td>" . " " . "</td>";
        }
        elseif($i == 0 && $j >0){
            echo "<td>" . ($i + $j) . "</td>";            
        }
        elseif($i > 0 && $j > 0){            
            echo "<td>" . ($i * $j) . "</td>";
        }
         
         
     }
    
     echo "</tr>";
 }
  echo "</table>";

  echo "<table border='1'>";
for($i=0;$i<10;$i=$i+1){
    //判斷第一列第一格是否要空白
    if($i==0){
        echo "<tr><td></td>";
    }else{
        echo "<tr><td>".$i."</td>";
    }
    for($j=1;$j<=9;$j++){
        //判斷第一列如何呈現
        if($i==0){
            echo "<td>" . $j ."</td>";
        }else {
            echo "<td>" . ($i * $j) ."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

  
?>



