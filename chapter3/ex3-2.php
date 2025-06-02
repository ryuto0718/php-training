<?php
    $a = 0;
    echo "水の温度{$a}度<br>";
    if($a >= 100){
        echo "水蒸気(気体)です。";
    }else if($a <= 0){
        echo "氷(個体)です。";
    }else{
        echo "水(液体)です";
    }
?>