<?php
    //連想配列の場合
    $a = ["apple"=>"りんご","banana"=>"バナナ","orange"=>"オレンジ"];
    foreach ($a as $key=>$value){
        echo $key . ":" . $value . "<br>";
    }
    echo "<br>";
    //添字配列の場合
    $a = ["犬","猫","サル"];
    foreach($a as $key=>$value){
        echo $key . ":" . $value . "<br>";
    }
?>