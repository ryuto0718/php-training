<?php
    //リスト生成クラス(抽象クラス)
    abstract class AbsList{
        //リストの開始(抽象メソッド)
        abstract function startList();
        //リストの終了
        abstract function endList();
        //リストの生成メソッド
        function show($array){
        $this->startList();
        foreach($array as &$value){
            echo "<li>" .$value. "</li>\n";
        }
        $this->endList();
    }
}
?>