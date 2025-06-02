<?php
    //自動車クラスの読み出し
    require_once("car.php");
    //インスタンスの生成
    $car1 = new Car();
    $car2 = new Car();
    //ナンバー、スピードの設定
    $car1->number = "あ12-34";
    $car1->speed = 50;
    //自動車の走行と停止
    $car1->drive();
    $car1->stop();
    //ナンバー、スピードの設定
    $car2->number = "い56-78";
    $car2->speed = 40;
    //自動車の走行と停止
    $car2->drive();
    $car2->stop();
?>
