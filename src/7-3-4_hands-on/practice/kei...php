<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //おさらい：要素へのアクセス
    $fruits = ['りんご', 'バナナ',];
$fruits = ['りんご'];

 // キー1の要素を更新（バナナ → ぶどう）
    $fruits[1] = 'ぶどう';

    // 末尾に要素を追加
    $fruits[] = 'みかん<br>';
    $fruits = ['りんご', 'バナナ'];
array_push($fruits, 'みかん', 'ぶどう');

print_r($fruits);
// 出力: Array ( [0] => りんご [1] => バナナ [2] => みかん [3] => ぶどう )

?>
<?php

    $user =[ 'name' => '山田', 'age' => 30];
var_dump($user);
// 出力：
// array(2) {
// ["name"]=> string(6) "山田"
// ["age"]=> int(30)
//}

    ?>
    <?php
    $fruits1 = ['りんご', 'バナナ'];
    $fruits2 = ['みかん', 'ぶどう'];

    $all_fruits = array_merge($fruits1, $fruits2);

    print_r($all_fruits);
    // 出力： Array ( [0] => りんご [1] => バナナ [2] => みかん [3] => ぶどう )
    ?>
<?php
$user = ['name' => '山田', 'age' => 30];

if (array_key_exists('email', $user)){
    echo '<br>メールアドレスがあります';
} else{
    echo '<br>メールアドレスがありません';
}
// 出力： メールアドレスがありません
?>

<?php
$user = [
    ['name' => '山田', 'age' => 30],
    ['name' => '佐藤', 'age' => 25],
    ['name' => '鈴木', 'age' => 35],
];

// ユーザー情報の配列をループ処理
foreach ($user as $user) {
    echo '<br>名前: ' . $user['name'] . '、年齢: ' . $user['age'] . '歳<br>';
}

// 出力：
// 名前： 山田、年齢： 30歳
// 名前： 佐藤、年齢： 25歳
// 名前： 鈴木、年齢： 35歳
?>

<?php
$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72,
];

foreach ($scores as $subject => $score) {
    echo $subject . ': ' . $score. '点<br>';
}

// 出力：
// 国語： 80点
// 数学： 95点
// 英語； 72点
?>

</body>
</html>