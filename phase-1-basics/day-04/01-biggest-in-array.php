<?php 
// 10 . 
$nums = [-8, -3, -15]; 
$biggest = $nums[0];
foreach($nums as $num) {
    if($num > $biggest) {
        $biggest = $num; 
    }
}
echo $biggest . '<br>';
