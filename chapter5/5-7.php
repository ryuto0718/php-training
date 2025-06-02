<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>フォームサンプル(1)</title>
</head>
<body>
    <h1>入力された値</h1>
    <table>
        <tr>
            <th>名前：</th>
            <td><?php echo $_GET["name"];?></td>
        </tr>
        <tr>
            <th>性別：</th>
            <td><?php echo $_GET["sex"];?></td>
        </tr>
    </table>
    <a href="5-7.html">入力フォームに戻る</a>
</body>
</html>