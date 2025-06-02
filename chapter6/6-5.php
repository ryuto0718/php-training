<?php
    class Car{
        private $serial = 0;        //製造番号(インスタンスプロパティ)
        private static $carNumber = 0;      //生産台数(静的プロパティ)
        //コンストラクタ
        function __construct(){
            self::$carNumber++;     //静的メンバの値をインクリメント
            $this->serial = self::$carNumber;       //idを決める
        }
        //自動車の製造番号の表示(インスタンスメソッド)
        function showSerial(){
            echo "&nbsp;&nbsp;製造番号:{$this->serial}<br>";
        }
        //自動車の生産台数を求める(静的メソッド)
        static function showCarNumber(){
            $number = self::$carNumber;
            echo "生産台数:{$number}<br>";
        }
    }
    //自動車の生産台数の表示
    Car::showCarNumber();
    //1台まで自動車の生産
    $car1 = new Car();
    $car1->showSerial();
    //自動車の生産台数の表示
    Car::showCarNumber();
    //3台目までの自動車の生成
    $car2 = new Car();
    $car2->showSerial();
    $car3 = new Car();
    $car3->showSerial();
    //自動車の生産台数の表示
    Car::showCarNumber();
?>