<?php 
// أكبر رقم في مصفوفة
$nums =[3,9,2,7]; 
$max = $nums[0]; 
foreach ($nums as $num) {
    if($num > $max) {
        $max = $num;
    }
}

echo $max;
echo "<br>";

// مجموع عناصر المصفوفة
$num = [3, 9, 2, 7]; 
$sum = 0; 
foreach ($num as $value) {
    $sum += $value;
}
echo $sum; 
echo "<br>";

// عكس المصفوفة
$reversed = [1, 2, 3, 4];
$result = [];
for($i = count($reversed) - 1; $i >= 0; $i--){
    $result[] = $reversed[$i];
}
print_r($result);

?>