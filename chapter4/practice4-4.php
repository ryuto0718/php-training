<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>配列からリストを作る</title>
</head>
<body>
    <h1>配列からリストを作る</h1>
    <?php
        $a = ["日本","アメリカ","中国"];
        foreach($a as $value){
            echo "<li>" . $value . "</li>";
    }
?>
</body>
</html>