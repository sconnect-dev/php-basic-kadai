<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];

function sort_2way(array $array, bool $order) {
    
    // ソート方向を判定
    if ($order === TRUE) {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順ソート（値でソート）
        
    //  配列$orderの値を1つずつ順番に出力する
        foreach ($array as $value) {
        echo $value . "<br>";
    }      
    }
    else {
        echo "降順にソートします。<br>";
        rsort($array); // 降順ソート（値でソート）
    
        //  配列$orderの値を1つずつ順番に出力する
        foreach ($array as $value) {
        echo $value . "<br>";
    }
    }
}

sort_2way($nums, TRUE);   // 昇順
sort_2way($nums, FALSE);  // 降順

?>
</p>
</body>

</html>