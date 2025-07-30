<!DOCTYPE html>
<html lang="ja">

    <head>
     <meta charset="UTF-8">
     <title>PHP基礎5章課題</title>
    </head>

    <body>
        <p>
            <?php 
            // $score1~$score10にそれぞれテストの点数を代入 
            $score1 = 80;
            $score2 = 60;
            $score3 = 55;
            $score4 = 40;
            $score5 = 100;
            $score6 = 25;
            $score7 = 80;
            $score8 = 95;
            $score9 = 30;
            $score10 = 60;

            // 変数$total_scoreに10人分のテストの合計点を代入
            $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

            // 変数$average_scoreにテストの平均点を代入
            $average_score = $total_score / 10;

            // 変数$average_scoreを画面に出力
            echo $average_score;

            ?>
        </p>
    </body>


    </html>
