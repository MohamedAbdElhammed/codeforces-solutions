<?php 

//  Pattern: for loop
for($i = 1; $i <= 20; $i++) {
    echo $i  . " ";
}

echo "<br>";

for($i = 20; $i >= 1; $i--) {
    echo $i . " ";
}

echo "<br>";

for($i = 0; $i <= 100; $i+=10) {
    echo $i  . " ";
}

echo "<br>";

// Pattern: sum

$sum = 0;
for($i = 1; $i <= 50; $i++) {
    $sum += $i;
}
echo "Sum: " . $sum;

echo "<br>";

$even = 0;
for($i = 1; $i <= 50; $i++) {
    if($i % 2 == 0) {
        $even += $i;
    }
}
echo "Sum of even numbers: " . $even;

echo "<br>";

$array =  [4, 8, 15, 16, 23, 42];
$count = 0;
foreach($array as $value) {
    $count += $value;
}
echo "Sum of array values: " . $count;
echo "<br>";

//  Pattern: counter

$numbers = [3, 12, 7, 25, 10, 18];
$counter = 0;
foreach($numbers as $value) {
    if($value >= 10) {
        $counter++;
    }
}
echo $counter;

echo "<br>";

$word = "banana";
$letterCount = 0;
for($i = 0; $i < strlen($word); $i++) {
    if($word[$i] == 'a') {
        $letterCount++;
    }
}
echo $letterCount;

echo "<br>";

$y = 0;
for($i = 1; $i <= 30; $i++) {
    if($i % 3 == 0) {
        $y++;
    }
}
echo $y;