<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $product_name ="ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    $subtotal = $price * $quantity ; // 小計を計算
    $tax_amount = $subtotal * $tax_rate; // 消費税率を計算
    $total = $subtotal + $tax_amount; // 税込金額を計算
    
    echo "商品名：" .$product_name;// 商品名：ノートパソコンと出力される
    echo "<br>単価：" . number_format($price) . "円"; // 単価：80000円と出力される
    echo "<br>数量：" .number_format ($quantity) . "個"; // 数量：2個と出力される
    echo "<br>小計：" . number_format ($subtotal) . "円";  //小計：160000円と出力される
    echo "<br>消費税(10%)：" . number_format ($tax_amount) . "円"; // 消費税（10％）：16000円と出力される
    echo "<br><strong>合計金額：" . number_format ($total) . "円</strong>"; // 合計金額：176000円と出力される
    ?>
</body>
</html>()