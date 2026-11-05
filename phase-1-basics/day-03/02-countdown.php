<?php 
// 8 . 
function countdown(int $n) {
    if ($n < 1) {
        echo "Please enter a number 1 or greater";
        return;
    }

    for($i = $n; $i >= 1; $i--) {
        echo $i . ' ';
    }
}
countdown(5);
