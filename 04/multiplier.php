<?php

$input = file_get_contents("input.txt");
preg_match_all('((mul)\((\d{1,3}),(\d{1,3})\))', $input, $multiplierFunctions);
$sum = 0;
for($i = 0; $i < count($multiplierFunctions[2]); $i++) {
    $sum += $multiplierFunctions[2][$i] * $multiplierFunctions[3][$i];
}

echo $sum . PHP_EOL;
