<?php
    try{
        //(1)接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        //(2)挿入するデータを作成
        $id = 1001;
        $name = "山口太郎";
        //(3)SQLクエリ作成
        $stmt = $db->prepare("UPDATE school.student SET name=? WHERE id=?;");
        $stmt->bindParam(1,$id,PDO::PARAM_INT);
        $stmt->bindParam(2,$name,PDO::PARAM_STR);
        //(4)SQLクエリ実行
        $res = $stmt->execute();
        //(5)切断
        $db = null;
    }catch(PDOException $e){
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>