<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>郵便番号の確認</title>
</head>
<body>
    <h1>郵便番号の確認</h1>
    <p><b>郵便番号を入力してください</b></p>
    <form action="practice5-3.php" method="POST">
    <input type="text" name="name" placeholder="例) 101-0051">
    <br>
    <p>
        <?php
        if(isset($_POST["name"])){
            $n = $_POST["name"];
            if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$n) == 1){
                echo "<p>{$n}は郵便番号です。<br></p>";
            }else if($n === ""){
                echo "<p>値を入力してください<br></p>";
            }else{
                echo "<p>{$n}は郵便番号ではありません。<br></p>";
            }
        }
        ?>
        <input type="submit" value="確認">
    </p>
    </form>
</body>
</html>