<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>例題3-1</title>
</head>
<body>
    <h1>文字列変数へのデータの追加</h1>
    <p>
        <?php
            //$sに初期値を代入
            $str = "Hello";
            $str .= "world";
            echo $str;
        ?>
    </p>
</body>
</html>