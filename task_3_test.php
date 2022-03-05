<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
<?php

$array = array();
for ($i = 1; $i <= 10000; $i++) {
    $array[] = $i;
}

//$sum = 0;
/*
foreach ($array as $num) {
    $match = 0;
    for ($i = 0; $i < (strlen((string)$num)-1); $i++) {
        if (+((string)$num)[$i] - +((string)$num)[$i+1] == -1) {
            $match++;
        }
    }
    if ($match < 2) {
        $sum += $num;
    }
}
*/
//echo $sum;

function cmp($a, $b)
{
	if ($a - $b == -1) {
    	echo "a: $a; b: $b<br>";
	}
    if ($a == $b) {
        return 0;
    }
    if ($a < $b) {
        return -1;
    }
    if ($a > $b) {
        return 1;
    }
}
usort($array, "cmp");

foreach ($array as $key => $value) {
    //echo "$key: $value<br>";
}
?>
</body>
</html>