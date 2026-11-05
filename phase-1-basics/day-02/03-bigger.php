<?php 
// 6 . 
function bigger(float $a,float $b) {
    if($a > $b ){
        return $a; 
    }else {
        return $b; 
    }
}
echo bigger(8, 3) . '<br>';
echo bigger(2, 9) . '<br>';