<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
	<div>test</div>
<?php

$array = [[399, 9160, 144, 3230, 407, 8875, 1597, 9835], [2093, 3279, 21, 9038, 918, 9238, 2592, 7467], [3531, 1597, 3225, 153, 9970, 2937, 8, 807], [7010, 662, 6005, 4181, 3, 4606, 5, 3980], [6367, 2098, 89, 13, 337, 9196, 9950, 5424], [7204, 9393, 7149, 8, 89, 6765, 8579, 55], [1597, 4360, 8625, 34, 4409, 8034, 2584, 2], [920, 3172, 2400, 2326, 3413, 4756, 6453, 8], [4914, 21, 4923, 4012, 7960, 2254, 4448, 1]];

/*
function maxNum($value) {
    if (is_array($value)) {
        maxNum(max($value));
    }
    else {
        return $value;
    }
}
echo maxNum($array);
*/

/*
$maxNum = $array;
while (is_array($maxNum)) {
    $maxNum = max($maxNum);
}
echo $maxNum . '<br>';
*/

function simplifyArray($array) {
    static $simpleArray;
    if (is_array($array)) {
        foreach ($array as $sub)  {
            simplifyArray($sub);
        }
    } else {
        $simpleArray[] = $array;
    }
    return $simpleArray;
}
$simpleArray = simplifyArray($array);

$fibonacciArray = array(0, 1);
while ($fibonacciArray[count($fibonacciArray)-1] < max($simpleArray)) {
    $fibonacciArray[] = $fibonacciArray[count($fibonacciArray)-1] + $fibonacciArray[count($fibonacciArray)-2];
}

$sum = 0;
foreach ($simpleArray as $num) {
    if (in_array($num, $fibonacciArray)) {
        $sum += $num;
    }
}
echo $sum;

?>
</body>
</html>