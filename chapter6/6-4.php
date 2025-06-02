<?php
    class Person{
        //名前
        private $name;
        //$nameのセッター
        function setName($name){
            $this->name = $name;
        }
        //$nameのゲッター
        function getName(){
            return $this->name;
        }
    }
    //インスタンスの生成
    $p = new Person();
    $p->setName("山田太郎");
    echo "名前：{$p->getName()}";
?>