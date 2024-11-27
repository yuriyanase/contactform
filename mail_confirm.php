<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="style.css"> 
    <title>お問い合わせフォームを作る</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらでよろしいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
        </p>
        <p>名前
        <br>
        <?php echo $_POST['name'];?>
        </p>
        <p>メールアドレス
        <br>
        <?php echo $_POST['mail'];?>
        </p>
        <p>年齢
        <br>
        <?php echo $_POST['age']."歳";?>
        </p>
        <p>コメント
        <br>
        <?php echo $_POST['comments'];?>
        </p>

        <div class="buttons">
            <form action="index.html">
                <input type="submit" class="button1" value="戻って修正する" />
            </form>
        </div>
            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する" />
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name" />
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail" />
                <input type="hidden" value="<?php echo $_POST['age'];?>" name="age" />
                <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments" />
    </div>

</body>




</html>