<?php 
$nums = [14, 3, 27, 9, 21]; 
$min = $nums[0]; 
foreach($nums as $num) {
    if($num <  $min ) {
        $min = $num; 
    }
}
echo "Min: " . $min ;