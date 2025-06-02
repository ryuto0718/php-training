<?php
    //計算クラス(足し算・引き算しかできない)
    class Calc{
        //数値1
        protected $num1;
        //数値2
        protected $num2;
        //値の設定
        function setNumbers($num1,$num2){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        //足し算の結果表示
        function add(){
            $ans = $this->num1 + $this->num2;
            echo "{$this->num1} + {$this->num2} = {$ans}<br>";
        }
        //引き算の結果取得  
        function sub(){
            $ans = $this->num1 - $this->num2;
            echo"{$this->num1} - {$this->num2} = {$ans}<br>";
        }
    }


    //拡張計算クラス(掛け算・割り算もできる)
    class CalcEx extends Calc{
        //掛け算の結果表示
        function mul(){
            $ans = $this->num1 * $this->num2;
            echo "{$this->num1} x {$this->num2} = {$ans}<br>";
        }
        //割り算の結果取得
        function div(){
            if($this->num2 != 0){
                $ans = $this->num1 / $this->num2;
                echo "{$this->num1} ÷ {$this->num2} = {$ans}<br>";
                
            }else{
                echo "{$this->num1} ÷ {$this->num2} は計算できません";
            }
        }
    }
    //インスタンスの生成
    $calc = new CalcEX();       //CalcEXクラスのインスタンス生成
    //値の設定
    $calc->setNumbers(12, 2);
    //加減乗除の計算の実行
    $calc->add();       //加算  (Calcクラスのメソッド)
    $calc->sub();       //減算  (Calcクラスのメソッド)
    $calc->mul();       //乗算  (CalcEXクラスのメソッド)
    $calc->div();       //徐算  (CalcEXクラスのメソッド)
?>