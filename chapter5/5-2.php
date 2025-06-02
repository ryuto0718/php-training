<?php
//最大値を取得する関数
    function max_number($n1,$n2){
        if($n1 > $n2){
            //$n1のほうが大きければ$n1を返す
            return $n1;
        }
        //そうでなければ$2を返す
        return $n2;
    }


    //指定した数だけ★マークを表示する関数
    function stars($n){
        for($i = 0;$i < $n; $i++){
            echo "★";
        }
        echo "<br>";
        return; //戻り値がないのでreturnだけで終了
    }


    //「HelloPHPとだけ表示する関数」
    function hello(){
        echo "HelloPHP<br>";
        return;
    }


    //max_number関数の呼び出し
    echo "*** max_number関数 ***<br>";
    $num1 = 4;
    $num2 = 3;
    $max = max_number($num1,$num2);
    echo "{$num1}と{$num2}のうち大きいのは{$max}です。<br>";


    //stars関数の呼び出し
    echo "*** stars関数 ***<br>";
    stars(5);
    stars(7);


    //hello関数の呼び出し
    echo "*** hello関数 ***<br>";
    hello();
?>