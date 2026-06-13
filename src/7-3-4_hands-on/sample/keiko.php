<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $_POSTの中身を確認する （デバック用）
var_dump($_post);
// array(1) {
//  ["username"]=>
//  string(9) "山田 太郎"
//}

// "username"というキーで、データを取り出す
$username = $_POST["username"];

echo "こんちは、" / $username . "さん！";
//こんにちは、山田 太郎さん！
?>

</body>
</html>