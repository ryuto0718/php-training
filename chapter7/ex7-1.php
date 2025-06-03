<?php
    try{
        //(1)接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        $grade = 3;
        //(3)SQLクエリ作成
        $stmt = $db->prepare("DELETE FROM school.student WHERE grade = ?");
        $stmt->bindParam(1,$grade,PDO::PARAM_INT);
        //(4)SQLクエリ実行
        $res = $stmt->execute();
        //(5)切断
        $db = null;
    }catch(PDOException $e){
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>