<?php
$original_price = 5000;
$discount_rate = 0.20;

$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "割引後価格：".$final_price."円<br>";


$number = 7;
if ($number % 2 == 0){
    echo "{$number}は偶数です<br>";
} else{
    echo "{$number}は奇数です<br>";
}


$age = 25;
$is_member = true;
$is_student = false;

//条件１：18歳以上かつ会員
if($age >= 18 && $is_member){
    echo"割引が適用されます<br>";
}

//条件2：65歳以上または学生
if($age >=65 || $is_student){
    echo "シニア・学生割引が適用されます<br>";
}

$score = 100;
echo "初期スコア: {$score}点<br>";
$score += 50;
echo "ボーナス後: {$score}点<br>";
$score -= 30;
echo "ダメージ後: {$score}点<br>";
$score *= 2;
echo "最終スコア: {$score}点<br>";
?>
