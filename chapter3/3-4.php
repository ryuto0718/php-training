<?php
    $variable = 0.25;           //小数を代入
    var_dump($variable);
    echo "<br>";
    $variable = "PHP";          //文字列を代入
    echo "<br>";
    var_dump($variable);
    echo "<br>";
    $variable = true;           //論理値を代入
    var_dump($variable);
    echo "<br>";
    $variable = null;           //nillを代入
    var_dump($variable);
    echo "<br>";
    unset($variable);           //unset関数で$variableを消去
    # var_dump($variable);
?>