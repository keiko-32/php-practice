<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 商品情報の定義
$product_name = "ノートパソコン";
$price = 80000; // 商品単価
$quantity = 2; //購入数量
$tax_rate = 0.1; // 消費税率（10％）

// 計算処理
$subtotal = $price *$quantity; // 価格×数量
$tax_amount = $subtotal * $tax_rate; // 小計×税率
$total = $subtotal + $tax_amount; // 小計＋消費税額

// 結果の表示
echo "商品名: " . $product_name . "<br>"; //ノートパソコンが出力される
echo "単価: " .  number_format($price) . "円" . "<br>"; //80000円が出力される
echo "数量:" . $quantity . "個<br>"; //2が出力される
echo "小計: " . $subtotal . "円<br>";
echo "消費税(10%): " . $tax_amount . "円<br>"; //16000円が出力される
echo "<strong>合計金額: " . $total . "円</strong><br>"; //176000円が出力される


?>


</body>
</html>