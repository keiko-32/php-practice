<?php
// 入力データを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録(2/3)確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>

    <table border="1">

    <tr>
        <th>お名前</th>
        <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
</tr>
<tr>メールアドレス</th>
<td><?php echo htmlspecilchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
</table>


<th>年齢</th>
<td><?php echo htmlspecialchars($age, ENT_QUITES, 'UTF-8'); ?>歳</td>
</tr>
</table>


<!-- 確認画面から完了画面へのデータを渡すためのフォーム -->
<form action="complete.php" method="post">
    <!-- hidden属性で、データを隠して送信 -->
     <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,,ENT_QUOTES, 'UTF-8'); ?>">
     input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
     <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">

<p>
    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit">登録する</button>
</P>
</form>
</body>
</html>
