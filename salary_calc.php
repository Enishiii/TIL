<?php

echo '初任給を入力してください。（年収）' . PHP_EOL;
$salary = trim(fgets(STDIN));

echo '昇給率を入力してください（0〜100の半角英数字）' . PHP_EOL;
$salary_increase_rate = trim(fgets(STDIN));
$salary_increase_rate = $salary_increase_rate / 100 + 1;

for ($i = 1; $i <= 10; ++$i) {
    echo $i . '年目の給料は' . $salary . '円です。' . PHP_EOL;
    echo '手取りは' . $salary * 0.75 . '~' . $salary * 0.85 . '円です。' . PHP_EOL;
    $salary = $salary * $salary_increase_rate;
}
