<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>
<body>
<h1>ユーザー登録(1/3)入力</h1>
<form action="confirm.php" method="post">

    <p>
        <!--名前の入力欄-->
        <label>お名前：<input type="text" id="name" name="name" required></label>

<!--メールアドレスの入力欄-->
        <la><br>メールアドレス：<input type="email" id="email" name="email" required></label>

        <!--年齢の入力欄-->
 <label><br>年齢： <input type="number" id="age" name="age" min="0" required></label>
    </p>
    <button type="submit">確認画面へ</button>
</form>

</body>
</html>