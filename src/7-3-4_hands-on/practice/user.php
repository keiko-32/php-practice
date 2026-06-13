<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class user
    {
        public string $name;
        public int $age;

        // コンストラクタを定義する
        public function __construct(string $name, int $age)
        {
            // 引数で受け取った値を、プロパティに設定する
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce(): string
        {
            return "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。";
        }
         // 成人かどうか判定するメソッド
       public function isAdult(): bool
        {
            return $this->age >= 18;
        }
    }
// main.php

    echo "<h1><br>ユーザー管理プログラム</h1>";
    echo "<h2>自己紹介</h2>";

    $user1 = new User("田中 太郎", 25);
    $user2 = new User("佐藤 花子", 17);
    $user3 = new User("鈴木 一郎", 30);

    $users = [$user1, $user2, $user3];


// インスタンス生成と同時に、プロパティが初期化されている
    echo $user1->introduce(). "<br>";
// "こんにちは、私は田中太郎です。25歳です。"が出力される
    echo $user2->introduce(). "<br>";
    // "こんにちは、私は佐藤 花子です。17歳です。"が出力される
    echo $user3->introduce(). "<br>";
    // "こんにちは、私は鈴木 一郎です。30歳です。 "が出力される

echo "<h2>成人判定</h2>";
    //  結果を表示する
    foreach ($users as $user) {
        echo $user->name . "さんは" . ($user->isAdult() ? "成人です。<br>" : "未成年です。<br>");
// "田中 太郎さんは成人です。" "佐藤 花子さんは未成年です。" "鈴木 一郎さんは成人です。"
    }
    

?>
</body>
</html>
