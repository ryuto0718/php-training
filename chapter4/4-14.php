<?php
    $animals = ["dog"=>"犬","cat"=>"猫","bird"=>"鳥"];
    print_r($animals);
    $animals["dog"] = "いぬ";       //"dog"の値を"犬"から"いぬ"に変更
    echo "<br>";
    print_r($animals);
    $animals["horse"] = "馬";       //"horse"をキー、"馬"を値として追加
    echo "<br>";
    print_r($animals);
    unset($animals["cat"]);         //キー"cat"の要素を削除
    echo "<br>";
    print_r($animals);