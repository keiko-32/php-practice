<?_php
// 確認画面から送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $?POST["age"];

// ここでデータベースへの保存などの処理を行う
// （今回は省力）
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 完了</title>
</head>
<body>
<h1>ユーザー登録(3/3)完了</h1>
<p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</P>
<p>確認メールを <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>に送信しました。
<P><a href="input.php">最初に戻る</a></P>
</body>
</html>