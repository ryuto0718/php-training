<?php
    function min_number($n1,$n2){
        if($n1 < $n2){
            return $n1;
        }
        return $n2;
    }
    $a = 4;
    $b = 3;
    $min = min_number($a,$b);
    echo "\$a = {$a}<br> \$b = {$b}<br>";
    echo "{$a}と{$b}のうち最小のものは($min)です。<br>";