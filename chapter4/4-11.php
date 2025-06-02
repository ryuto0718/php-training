<?php
    echo "配列\$ar1の初期化<br>";
    $ar1 = ["a","b","c","d","e"];
    print_r($ar1);
    echo "<br>\$ar2:1番目から2つの要素を切り取り(添え字番号から0)<br>";
    $ar2 = array_slice($ar1,1,2);       //要素の切り取り1
    print_r($ar2);
    echo "<br>\$ar3:1番目から2つの要素を切り取り(添え字の番号を保持)<br>";
    $ar3 = array_slice($ar1,1,2,true);  //要素の切り取り2
    print_r($ar3);
?>