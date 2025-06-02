<?php
    function showStrs($num,$str){
        for($i = 1;$i <= $num;$i++){
            echo "$str<br>";
        }
    }
    showStrs(5,"HelloPHP");
?>