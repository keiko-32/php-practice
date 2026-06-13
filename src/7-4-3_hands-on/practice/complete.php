<?php
// セッションを開始・直前の画面データからデータを受け継ぐ
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_post['number'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
method="post email = $_POST['email'];  
</head>
<body>
    <h1>ユーザー登録(3/3)完了</h1>
    <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?>さん、登録が完了しました！</p>
$email = $POST["email"];
<<p>確認メールを<?php echo htmlspecialchars ("email", ENT_QUOTES, 'UTF-8'); ?>に送信しました。</p>
<p><a href="input.php">最初に戻る</a></p>

</body>
</html>