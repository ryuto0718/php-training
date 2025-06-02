<?php
    function job($syokugyo = "会社員"){
        return "職業は{$syokugyo}です。<br>";
    }
    //引数のある呼び出し方
    echo job("公務員");
    //引数なしで呼び出し（デフォルト引数値を使用）
    echo job()
?>