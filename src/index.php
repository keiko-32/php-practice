<?php
// src/index.php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>はじめてのPHP</title>
</head>

<body>
    <h1>PHPの世界へようこそ</h1>
    <p>PHPを使って、動的なコンテンツを表示してみましょう。</p>
    <p>１＋１は、<?php echo 1 + 1; ?>です。</p>
    <p>現在の時刻は、 <?php echo date("Y年m月d日 H時i分s秒"); ?> です。</p>
</body>
<?php echo "こんにちは！"; ?>
<?php //"<h1>PHPの世界へようこそ</h1>"; ?>
<p>これはHTMLです。</p>
<?php
function greet($name)
{
    return "こんにちは、 " . $$name . "さん";
}
?>
<?php
//文字列を直接出力
echo "Hello,PHP!";
echo '<p>HTMLタグも、そのまま出力できます。</p>';
//数値や計算結果も出力可能
echo 123;
echo 10 + 5; //結果の「15」が出力される
?>
<?php
echo "最初の文";
echo "次の文";
?>
<?php
$today = "Monday";
echo $today;
?>

<?php
$name = "山田太郎";
//変数"age"に、数値 30 を代入
$age = 30;

echo "<p>$name</p>";
echo $age;

$age = 31;
echo $age;
?>

<?php
//配列の作成
$fruits = ['りんご', 'バナナ', 'みかん'];

//配列の要素にアクセス（番号は０から始まる）
echo "<p>$fruits[0]</p>"; //"りんご"が出力される
echo "<p>$fruits[1]</p>"; //"バナナ"が出力される
echo "<p>$fruits[2]</p>"; //"みかん"が出力される

//配列に要素を追加
$fruits[] = 'ぶどう';//末尾に追加される
echo $fruits[3]; //"ぶどう"が出力される
?>

<?php
//連想配列の作成
$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72
];

// キーを使って値にアクセス
echo $scores['国語']; // 80が出力される
echo $scores['数学']; // 95が出力される
echo $scores['英語']; // 72が出力される

//新しいキーと値を追加
$scores['理科'] = 88;
echo $scores['理科']; // 88が出力される
?>

<?php
//二次元配列の作成（商品リスト）
$products = [
    ['name' => 'ノートPC', 'price' => 80000],
    ['name' => 'マウス', 'price' => 3000],
    ['name' => 'キーボード', 'price' => 5000],
];

//最初の商品の名前を取得
echo $products[0]['name']; // "ノートPC”と出力される
//二番目の商品の価格を取得
echo $products[1]['price']; // "3000"が出力される
?>

<?php
$last_name = "山田";
$first_name = "太郎";

//ピリオドで連結
$full_name = $last_name . $first_name;
echo $full_name; // "山田太郎"と出力される

echo '<br>私の名前は' . $full_name . 'です。';

$name = '佐藤';
$age = 25;

//ダブルクォーテーション内で変数を展開
echo "<br>私の名前は、$name です。年齢は $age 歳です。"; // "私の名前は、佐藤です。年齢は25歳です。"と出力される

//シングルクォーテーションでは、変数展開は行われない
echo '<br>私の名前は、$name です。年齢は、$age 歳です。';
//出力：私の名前は、$nameです。年齢は$age歳です。
?>
<?php

//基本的な四則演算
$a = 10;
$b = 3;

echo "$a + $b = " . ($a + $b) . "<br>"; //13（加算）
echo "$a - $b = " . ($a - $b) . "<br>"; //7（減算）
echo "$a * $b = " . ($a * $b) . "<br>"; //30（乗算）
echo "$a / $b = " . ($a / $b) . "<br>"; //3.3333...（除算）
echo "$a % $b = " . ($a % $b) . "<br>"; //1 （剰余 : 10 ÷ 3の余り）
echo "$a ** $b = " . ($a ** $b) . "<br>"; //1000（べき乗 : 10の3乗）

?>

<?php

//ECサイトの合計金額計算
$price = 1500; //商品単価
$quantity = 3; //購入個数
$tax_rate = 0.1; //消費税率（10%）

//小計の計算
$subtotal = $price * $quantity;
echo "小計: " . $subtotal . "円<br>"; //小計: 4500円

//税込み価格の計算
$total = $subtotal * (1 + $tax_rate);
echo "税込合計: " . $total . "円"; //税込合計: 4950円

?>
</html>
