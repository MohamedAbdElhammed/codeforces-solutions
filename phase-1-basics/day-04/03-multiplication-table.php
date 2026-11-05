<?php
// 12 . 
function multiplicationTable(int $n) {
    if($n < 1) {
        echo "Invalid number";
    }else {
        for($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n *  $i) . "<br>"; 
        }
    }
}
multiplicationTable(3);