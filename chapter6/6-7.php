<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>リストの生成</title>
</head>
<body>
    <h1>都道府県のリスト</h1>
    <?php
        require_once("ullist.php");
        //UlListクラスのインスタンスの生成
        $ls = new UlList();
        //$ls = new AbsList();
        $data = ["東京都","大阪府","愛知県"];
        $ls->show($data);
    ?>
</body>
</html>