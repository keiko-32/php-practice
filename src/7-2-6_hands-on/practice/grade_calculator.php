<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo '<h1>成績判定システム</h1>'; // 文字が大きく表示される

    echo '<h2>【個別成績】</h2>'; // 個別成績と出力される

    // 学生データを連想配列でつくる
    $students = [
        ['name' => '田中太郎', 'score' => 85],
        ['name' => '佐藤花子', 'score' => 92],
        ['name' => '鈴木一郎', 'score' => 78],
        ['name' => '高橋美咲', 'score' => 65],
        ['name' => '伊藤健太', 'score' => 58],// 不合格
    ];

    function evaluate(int $score): string
    {
        if ($score >= 90) {
            $grade ="A";
            $status = "優秀";
        } elseif ($score >= 80) {
            $grade ="B";
            $status = "良好";
        } elseif ($score >= 70) {
            $grade ="C";
            $status = "普通";
        } elseif ($score >= 60) {
            $grade = "D";
            $status = "要努力";
        } else {
            $grade = "F";
            $status ="不合格";
        }
}


        // 変数の初期化
        $passCount = 0;  // 合格者数
        $failCount = 0;  // 不合格者数

        foreach ($students as $student) {
            if ($student["score"] >= 60) {    // 合格判定
                $passCount++;
            } else { //不合格判定
                $failCount++;
            }
        }


        // 平均点
        $total_score = 0;
        foreach ($students as $student) {
            $total_score += $student["score"];
        }
        $average = $total_score / count($students);

        echo "合格者数 : {$passCount}人\n";
        echo "不合格者数 : {$failCount}人\n";
        echo "平均点 : {$average}\n";

        
?>
</body>
</html>