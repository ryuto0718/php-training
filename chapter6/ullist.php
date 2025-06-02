<?php
    //親クラスの読み出し
    require_once("abslist.php");
    //リストクラス(ulによるリスト)
    class UlList extends AbsList{
        //リストの開始(実装)
        function startList(){
            echo "<ul>\n";
        }
        //リストの終了(実装)
        function endList(){
            echo "</ul>\n";
        }
    }
?>