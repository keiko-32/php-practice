<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $original_price = 5000; // 元の価格
    $discount_rate = 0.20; // 割引率 (20%)
    $discount_amount = $original_price * $discount_rate; // 割引額を計算
    $final_price = $original_price - $discount_amount; // 割引後の価格
    echo "割引後の価格: {$final_price}円<br>";

    $number = 7; // 偶数か奇数を判定

    if($number %2 == 0) {
        echo "{$number}は偶数です";
    } else{
        echo "{$number}は奇数です";
    }
    ?>

    <?php
    $age = 25; // 年齢を判定
    $is_member = true;
    $is_student = false;

    // 条件1: 18歳以上かつ会員
    if($age > 18 && $is_member) {
        echo "割引が適用されます<br>";
    }

// 条件2: 65歳以上または学生
    if($age >= 65 || $is_student) {
        echo "シニア・学生割引が適用されます<br>";

    }
?>

<?php
$score = 100; // 点数を判定
echo "初期スコア: {$score}<br>";

$score += 50; //ボーナスステージクリア
echo "ボーナス後: {$score}点<<br>";

$score -= 30; //ダメージ
echo "ダメージ後: {$score}点<br>";

$score *=2;  //2倍アイテム
echo "最終スコア: {$score}点<br>";
?>
</body>
</html>