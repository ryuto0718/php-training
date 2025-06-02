<?php
    $a = 10;
    $b = "10";

    if($a == $b){
        echo '$a == $bです。';
    }else{
        echo '$a == $bではありません。';
    }
    echo "<br>";

    if($a === $b){
        echo '$a === $bです。';
    }else{
        echo '$a === $bではありません。';
    }
?>