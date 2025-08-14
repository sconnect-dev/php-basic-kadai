<?php
$vegetables_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

//  配列$vegetables_dataの値を1つずつ順番に出力する
        foreach ($vegetables_data as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
?>