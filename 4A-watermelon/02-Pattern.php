<?php 
// Pattern: Max , Min 

$numbers = [-5, 12, -20, 8];
$counter = $numbers[0];
foreach($numbers as $value) {
    if($value < $counter) {
        $counter = $value;
    }
}
echo $counter . " ";

echo "<br>";

$words = ["php", "javascript", "go", "python"]; 
$len = $words[0]; 
foreach($words as $word) {
    if(strlen($word) > strlen($len)) {
        $len = $word; 
    }
}

echo $len;

echo "<br>";

$products = [
    ["name" => "Pen", "price" => 5],
    ["name" => "Book", "price" => 40],
    ["name" => "Eraser", "price" => 2]
];
$cheapestName = $products[0]["name"];
$cheapestPrice = $products[0]["price"];
foreach ($products as $produect) {
    if ($produect["price"] < $cheapestPrice) {
        $cheapestPrice = $produect["price"];
        $cheapestName = $produect["name"];
    }
}
echo "Cheapest product: " . $cheapestName . " - $" . $cheapestPrice;