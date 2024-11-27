<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");

$sql = "insert into contactform (name, mail, age, comments) values (?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="style.css"> 
    <title>お問い合わせフォームを作る</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらでよろしいでしょうか？
            <br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>

</html>