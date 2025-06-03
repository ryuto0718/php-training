<?php
    try{
        //(1)接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        //(2)挿入するデータを作成
        $id = 3003;
        $name = "山崎聡";
        $grade = 3;
        //(3)SQLクエリ作成
        $stmt = $db->prepare("INSERT INTO student VALUES(?,?,?);");
        $stmt->bindParam(1,$id,PDO::PARAM_INT);
        $stmt->bindParam(2,$name,PDO::PARAM_STR);
        $stmt->bindParam(3,$grade,PDO::PARAM_INT);
        //(4)SQLクエリ実行
        $res = $stmt->execute();
        //(5)切断
        $db = null;
    }catch(PDOException $e){
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>