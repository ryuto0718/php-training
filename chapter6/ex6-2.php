<?php
    class City{
        //名前
        private $name;
        //県
        private $prefecture;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
        function setPrefecture($prefecture){
        $this->prefecture = $prefecture;
    }
    function getPrefecture(){
        return $this->prefecture;
    }
}
    //インスタンスの生成
    $c = new City();
    //プロパティも値の設定
    $c->setName("横浜市");
    $c->setPrefecture("神奈川県");
    //プロパティの値の取得
    echo "{$c->getName()}は{$c->getPrefecture()}にあります。<br>";
?>