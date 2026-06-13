<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class User
{
    // プロパティ
    public string $name;
    public int $age;

    //コンストラクタを定義
    public function __construct(string $name, int $age)
    {
        echo "Userインスタンスが生成されました!<br>";

        // 引数で受け取った値を、プロパティに設定する

        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return " こんにちは、私の名前は" . $this->name . "です。年齢は" . $this->age . "歳です。";
    }
}

$user1 = new User("山田 太郎", 30);
// " Userインスタンスが生成されました！"が出力される

// インスタンス生成と同時に、プロパティが初期化されている
echo $user1->introduce(); // こんにちは、私の名前は山田 太郎です。年齢は30歳です。"
?>
</body>
</html>