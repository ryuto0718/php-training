<?php
    //自動車クラス
    class Car{
        //スピードのプロパティ
        public $speed;
        //ナンバーのプロパティ
        public $number;
        //コントラクタ
        function __construct($number){
            $this->number = $number;
            echo "「{$this->number}」のインスタンス生成<br>";
        }
        //走行メソッド
        function drive($speed){
            $this->speed = $speed;
            echo "「{$this->number}」が{$this->speed}km/hで走行<br>";
        }
        //停車メソッド
        function stop(){
            echo "「{$this->number}」が停車<br>";
            $this->speed = 0;
        }
    }
    //インスタンスの生成
    $car1 = new Car("あ12-34");
    $car2 = new Car("い56-78");
    //自動車の走行と停車
    $car1 -> drive(50);
    $car1 -> stop();
    $car2 -> drive(40);
    $car2 -> stop();
?>