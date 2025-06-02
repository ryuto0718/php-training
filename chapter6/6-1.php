<?php
    //自動車クラスの読み出し
    require_once("car.php");
    //インスタンスの生成
    $car = new Car();
    //ナンバー、スピードの設定
    $car->number = "あ12-34";
    $car->speed = 50;
    //自動車の走行と停止
    $car->drive();
    $car->stop();
?>