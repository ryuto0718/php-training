<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>セッションの活用2</title>
</head>
<body>
    <h1>セッションの値の確認</h1>
    <?php
        session_start();        //
        echo "<p>セッションID：" . session_id() . "</p>";
        echo "<p>設定した値：{$_SESSION["data"]}</p>";
    ?>
    <a href="6-8_1.php">トップへ</a>
</body>
</html>