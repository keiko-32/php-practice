<!DOCTYPE html>
<html lang="ja
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 関数の定義
    function sayHello()
    {
        echo "こんにちは!<br>";
}

    // 関数の呼び出し
    sayHello(); //こんにちは！"が出力される
    sayHello(); //もう一度呼び出せる

    ?>

    <?php
    // 引数 $name を受け取る関数
    function sayHelloTo($name)
    {
        echo "こんにちは、 " . $name . "さん!<br>";
    }

//関数を呼び出す際に、引数を渡す
sayHelloTo("山田"); // "こんにちは、山田さんが出力される
sayHelloTo("佐藤"); // "こんにちは、佐藤さん！"が出力される
?>

<?php
// ２つの数値を受け取り、その合計を返す関数
function add($a,$b)
{
    $sum = $a + $b; // 引数を使って計算
    return $sum; // 計算結果を返す
}

// 関数の戻り値を、変数 $result に代入する
$result = add(3, 5); //3と5を渡すと、合計の8が返される

echo $result; // 8が出力される;
echo add(10, 20); //"30"が出力される

function testReturn()
{
    return "ここで処理は終わり";
    echo "この行は実行されません";

}

echo testReturn(); // ここでが出力される
?>


</body>
</html>