<?php
    //郵便番号の判定を行う関数
    function match_zip($zip){
        if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$zip) == 1){
            echo "{$zip}は郵便番号です。<br>";
        }else{
            echo "{$zip}は郵便番号ではありません。<br>";
        }
    }
    //文字列が郵便番号かどうかを調べる
    match_zip("101-0051");
    match_zip("171-0022");
    match_zip("1710022");
    match_zip("03-6837-4600");
?>