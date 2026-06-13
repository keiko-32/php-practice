<?php

//データを取り出す
$name= $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>処理結果</title>
</head>

    <form action="complete.php" method="post">
  <input type="hidden" name="token">


<h1>ユーザー登録(2/3)確認</h1>

<h3>以下の内容で登録します。よろしいですか？</h3>
<p>お名前:<?php  echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?></p>
<p>メールアドレス:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?></p>
<p>年齢：<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8');?>歳</p>

<!--戻るボタン-->
<label><button type="history.back()">戻る</button></label>



<!--登録するのボタン-->
<label><button type="submit">登録する</button></label>

</form>

<?php
// フォームから送信されたデータをうけとる
$name = $_POST["name"];

//ここでデータベースへの保存などの処理を行う

//処理が完了したら、完了画面にリダイレクト

exit;

?>
</body>
</html>