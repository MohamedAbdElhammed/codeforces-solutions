<?php 
// 9 . 
$grades = [85, 42, 67, 30, 91]; 

foreach ($grades as $grade) {
    if ($grade >= 50) {
        echo $grade . ": Pass<br>";
    } else {
        echo $grade . ": Fail<br>";
    }
}