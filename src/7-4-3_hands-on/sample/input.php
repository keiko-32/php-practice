<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <h1>ユーザー登録(1/3) 入力</h1>


    <!--アクション属性で送信先を"confirm.php"に指定-->
    <!--POSTメソッドを使用-->
    <form action="confirm.php" method="post">

    <p>
        <label>お名前：</label>  <!--名前を入力-->
        <input type="text" name="name" required> <!--名前を入力-->
    </p>
    <p>
        <label>メールアドレス：</label>
        <input type="email" name="email" required><!--メールアドレスを入力-->

        <label>年齢：</label>
        <input type="number" name="age" min="0" max="120" required><!--年齢を入力-->
    </p>
    <button type="submit">確認画面へ</button>  <!--確認画面ボタン-->
    </form>

</body>
</html>