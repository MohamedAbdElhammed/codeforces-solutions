<?php 
function reverseArray(array $arr): array {
    $result = [];
    $length = count($arr);

    for ($i = $length - 1; $i >= 0; $i--) {
        $result[] = $arr[$i];
    }

    return $result;
}

print_r(reverseArray([1, 2, 3, 4, 5]));