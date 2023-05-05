<?php

$salary = 4500000;
for ($i = 1; $i <= 10; ++$i) {
    echo $i . '年目の給料は' . $salary . '円です。' . PHP_EOL;
    $salary = $salary * 1.1;
}
