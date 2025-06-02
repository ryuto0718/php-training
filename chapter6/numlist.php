<?php
    //親クラスの読み出し
    require_once("abslist.php");
    //リストクラス(ulによるリスト)
    class NumList extends AbsList{
        //リストの開始(実装)
        function startList(){
            echo "<ol>\n";
        }
        //リストの終了(実装)
        function endList(){
            echo "</ol>\n";
        }
    }
?>