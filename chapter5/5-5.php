<?php


    //文字列の設定
    $str = "HTMLとPHPの学習";
    echo "\$str=「{$str}」<br><br>";


    //文字列の長さを求める(mb_strlen関数)
    $length = mb_strlen($str);
    echo "\$strの長さは{$length}文字です。<br>";


    //文字列の５文字目から３文字目切り取る(mb_substr関数)
    $sub = mb_substr($str,5,3);
    echo "\$strを5文字目から3文字目切り取ると「{$sub}」です.<br>";


    //文字列の中から「学習」を検索(mb_strpos関数)
    $srch = "学習";
    $result = mb_strpos($str, $srch);
    echo "「{$srch}」は、\$strの{$result}文字目に含まれます。<br>";


    //文字列をHTMLからWebに置き換える(str_replac)
    $srch = "HTML";
    $replace = "Web";
    $result = str_replace($srch,$replace,$str);
    echo "\strの「{$srch}」を「{$replace}」にすると「{$result}」になります。<br>";
?>