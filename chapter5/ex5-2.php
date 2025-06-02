<?php
    function match_zip($zip){
        if(preg_match("/^[0-9]/",$zip) == 1){
            echo "{$zip}は0以上の整数です。<br>";
        }else{
            echo "{$zip}は0以上の整数ではありません。<br>";
        }
    }
    match_zip(0);
    match_zip(100);
    match_zip(-1);
    match_zip(-4);
?>