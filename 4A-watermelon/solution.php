<?php 
// $city = "Cairo"; 
// $temperature = 35.5;
// $isHot = true; 
// echo "$city temperature is $temperature degrees"; 
// echo '<br>';
// var_dump($isHot);
// echo '<br>';

// define("PI", 3.14159);
// echo PI; 

// echo '<br>';
// const MAX_SCORE = 100; 
// $radius = 5; 

// $result = PI * $radius * $radius; 
// echo $result;

// $b = 5; $a = 17;

// echo $a + $b;
// echo '<br>';
// echo $a - $b;
// echo '<br>';
// echo $a * $b;
// echo '<br>';
// echo $a / $b;
// echo '<br>';
// echo $a % $b;
// echo '<br>';
// var_dump($a == "17");
// echo '<br>';
// var_dump($a === "17");

// $firstName = "Sara";
// $lastName = "Ali";
// echo '<br>';
// echo $firstName . " " . $lastName;
// echo '<br>';
// var_dump($a > 10 && $b < 10);
// echo '<br>';



// $grade = 82; 

// if($grade >= 90) {
//     echo "A" . "<br>";
// }elseif ($grade >= 80) {
//     echo "B" . "<br>";
// }elseif($grade >= 70 ) {
//     echo "C" . "<br>";
// }else {
//     echo "F" . "<br>"; 
// }

// $num = 7; 
// echo (($num % 2 == 0 ) ? "Even" : "Odd") . "<br>"; 

// $color = "green";
// switch($color) {
//     case "red":
//         echo "red: Stop" . "<br>";
//         break;
//     case "yellow":
//         echo "yellow: Wait" . "<br>";
//         break;
//     case "green":
//         echo "green: Go" . "<br>";
//         break;
//     default:
//         echo "Color is not red, blue, or green" . "<br>";
// }


// for($i = 1; $i <= 10; $i++) {
//     if($i == 5) continue; 
//     echo $i . " " ; 
// }

// echo '<br>';

// $i = 0;
// $sum = 0;
// while($i <= 100) {
//     $sum += $i;
//     $i++; 
// }
// echo "Sum of numbers from 0 to 100 is: " . $sum;


// echo '<br>';

// $numbers = [3, 8, 15, 20, 25]; 
// foreach($numbers as $number) {
//     if($number % 2 == 0) {
//         echo $number . " "; 
//     } 
// }

// echo '<br>';

// for ($i = 1; $i <= 10; $i++) {
//     echo "5 x $i = " . (5 * $i) . "<br>";
// }

// echo '<br>';

// $cars = ["BMW", "G3", "Toyota"]; 
// print_r($cars[0]);
// echo '<br>';
// $cars[0] = "Volvo";
// var_dump($cars[0]);
// echo '<br>';

// foreach ($cars as $x) {
//     echo $x . "<br>";
// }

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// foreach($car as $x => $y) {
//     echo "$x :$y <br>";
// }

// $arr = [5, 3, 8, 1];

// echo count($arr); // 4 
// echo '<br>';
// array_push($arr, 9); 
// array_pop($arr);
// echo array_search(1, $arr);
// echo '<br>';
// print_r(array_reverse($arr));
// echo '<br>';
// print_r($arr);
// echo '<br>';


// $colors = ["Red", "Green", "Blue"]; 
// echo $colors[1]; 

// echo '<br>';

// $student = ["name" => "Mohamed",  "age" => 23, "major" => "single"];
// foreach($student as $x => $y) {
//     echo "$x : $y <br>"; 
// }

// $nums = [12, 7, 23, 4, 18]; 
// sort($nums);
// print_r($nums);

// echo '<br>';
// echo array_sum($nums); 
// echo '<br>';
// echo in_array(23, $nums); 
// echo '<br>';


// $nums = [12, 7, 23, 4, 18]; 

// $max = array_filter($nums, function ($value) {
//     return $value > 10 ; 
// });

// $max = array_values($max);
// print_r($max); 



// $prices = [100, 250, 50, 400, 75]; 

// $x = array_map(function($n){
//     return $n * 1.1 ; 
// }, $prices);
// print_r($x); 
// echo '<br>';
// print_r(array_chunk($prices, 1));

// function isEven(float $num):bool {
//     if($num % 2 == 0) {
//         return true;
//     }else {
//         return false;
//     }
// }
// echo isEven(7);
// echo '<br>';
// echo isEven(10);
// echo '<br>';

// function calculateArea(float $length, float $width = 5):float {
//     return $length * $width ;
// }
// echo calculateArea(2,3); 
// echo '<br>';
// echo calculateArea(2); 
// echo '<br>';

// function greetUser(string $name): string {
//     return "Welcome, $name"; 
// }
// echo greetUser("Mohamed"); 


// function findMax(float ...$nums) {
//     return max($nums);
// } 
// echo '<br>';
// echo findMax(1,1.5,2.5,7,5,10);

// $students = [
//     ["name" => "Sara", "grade" => 92],
//     ["name" => "Omar", "grade" => 78],
//     ["name" => "Mona", "grade" => 65],
//     ["name" => "Ali",  "grade" => 45]
// ];

// // اعمل دالة getLetter(int $grade): string ترجع التقدير: 90+ = A، 80+ = B، 70+ = C، 50+ = D، غير كده F
// function getLetter(int $grade): string {
//     if($grade >= 90) {
//         return "A";
//     }elseif ($grade >= 80) {
//         return "B";
//     } elseif($grade >= 70) {
//         return "C";
//     }elseif($grade >= 50) {
//         return "D";
//     }else {
//         return "F";
//     }
// }
// echo getLetter(92);
// echo '<br>';
// echo getLetter(78);
// echo '<br>';
// // استخدم foreach واطبع لكل طالب: Sara: 92 => A
// foreach ($students as $key => $value) {
//         echo "$value[name]: $value[grade] => " . getLetter($value['grade']) . "<br>";
//     }
    
// // احسب متوسط الدرجات واطبعه
// // اطبع اسم الطالب صاحب أعلى درجة
// $sum = 0; 
// $maxGrade = 0; 
// $topName = " ";
// foreach ($students as $student) {
//         $sum += $student['grade'];
//         if($student['grade'] > $maxGrade){
//             $maxGrade = $student["grade"];
//             $topName = $student["name"];
//         }
//     }
// $average  = $sum / count($students);
// echo "Average: $average <br>";
// echo "Top student: $topName ($maxGrade)";


// function isPrime(int $n): bool {
//     if ($n < 2) return false;

//     for ($i = 2; $i < $n; $i++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
// echo '<br>';
// $count = 0;
// for ($i = 1; $i <= 50; $i++) {
//     if (isPrime($i)) {
//         echo $i . " ";
//         $count++;
//     }
// }
// echo "<br>Total prime numbers: $count";


// مسألة 3: سلة المشتريات

// $cart = [
//     ["item" => "Laptop", "price" => 15000, "qty" => 1],
//     ["item" => "Mouse",  "price" => 200,   "qty" => 2],
//     ["item" => "Keyboard", "price" => 500, "qty" => 1]
// ];

// function calculateTotal(array $cart): float {
//     $total = 0;
//     foreach ($cart as $product) {
//         $total += $product['price'] * $product['qty'];
//         }
//         return $total;
//     }

// define("TAX", 0.14);

// $subtotal = calculateTotal($cart);
// $tax = $subtotal * TAX;
// $grandTotal = $subtotal + $tax;

// echo "Total before tax: $subtotal <br>";
// echo "Tax: $tax <br>";
// echo "Total after tax: $grandTotal <br>";

// if ($grandTotal > 10000) {
//     echo "Free Shipping";
// } else {
//     echo "Shipping: 50";
// }

