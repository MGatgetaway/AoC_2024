<?php

$input = file_get_contents("input.txt");
preg_match_all('((mul)\((\d{1,3}),(\d{1,3})\))', $input, $multiplierFunctions);
$sum = 0;
for($i = 0; $i < count($multiplierFunctions[2]); $i++) {
    $sum += $multiplierFunctions[2][$i] * $multiplierFunctions[3][$i];
}

echo 'sum:' . $sum . PHP_EOL;

preg_match_all("/((don't\(\).*)|(do\(\).*))?((mul)\((\d{1,3}),(\d{1,3})\))/", $input, $multipliersWithDo);
$doSum = 0;
$doMultiply = true;
var_dump(count($multipliersWithDo[0]));
var_dump(count($multipliersWithDo[1]));
var_dump(count($multipliersWithDo[2]));
var_dump(count($multipliersWithDo[3]));
var_dump(count($multipliersWithDo[4]));
var_dump(count($multipliersWithDo[5]));
var_dump(count($multipliersWithDo[6]));
    for($i = 0; $i < count($multipliersWithDo[6]); $i++) {
    if(!empty($multipliersWithDo[2][$i])){
        $doMultiply = false;
    } elseif(!empty($multipliersWithDo[3][$i])){
        $doMultiply = true;
    }

    if($doMultiply) {
        $doSum += $multipliersWithDo[6][$i] * $multipliersWithDo[7][$i];
    }
}

echo 'do-sum:' . $doSum . PHP_EOL;