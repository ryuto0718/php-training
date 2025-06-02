<?php
    $n = [5,3,2];       //配列
    $size = count($n);  //配列の大きさの取得
    $sum = 0;           //合計地の初期値に0を代入
    //配列の値を表示しながら合計を計算
    for($i = 0; $i < $size; $i++){
        $sum += $n[$i];
        echo "\$n[{$i}]=$n[$i]<br>";
    }
    $avg = $sum / $size;    //平均の計算
    echo "合計：{$sum} 平均：{$avg}";
?>