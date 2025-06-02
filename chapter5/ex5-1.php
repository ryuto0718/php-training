<?php 
    function add($a,$b){
        return $a + $b;
    }
    function sub($a,$b){
        return $a - $b;
    }
    $a = 2;
    $b = 3;
    
    echo "\$a = {$a}<br>\$b = {$b}<br>";
    echo '$a + $b =' . add($a,$b) . "<br>";
    echo '$a - $b =' . sub($a,$b);
?>
        