<?php
    try{
        //(1)接続
        $db = new PDO('mysql:host=localhost;dbname=school','root','root');
        //(2)SQLクエリ作成
        $stmt = $db->prepare("SELECT * FROM student;");
        //(3)SQLクエリ実行
        $res = $stmt->execute();
        if($res){
            //(4)該当するデータを取得
            $all = $stmt->fetchAll();
            foreach($all as$loop){
                //(5)結果を表示
                echo "id&nbsp;=&nbsp;" . $loop["id"];
                echo "&nbsp;name&nbsp;=&nbsp;" . $loop["name"];
                echo "&nbsp;grade&nbsp;=&nbsp;" . $loop["grade"] ."<br>";
            }
        }
        //切断
        $db = null;
    }catch(PDOException $e){
        echo "データベース接続失敗<br>";
        echo $e->getMessage();
    }
?>