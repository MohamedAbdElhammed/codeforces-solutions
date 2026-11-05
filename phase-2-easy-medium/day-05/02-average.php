<?php
$scores = [60, 90, 75, 40, 85];
$sum = 0;
foreach ($scores as $score) {
    $sum += $score;
}
$average = $sum / count($scores);
echo $average . '<br>';

$count = 0;
foreach ($scores as $score) {
    if($score > $average) {
        $count++;
    }
}
echo $count;