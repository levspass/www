<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
<?php

$string = file_get_contents('https://alef.im/');
$pattern = "/\<a.*з.*\<\/a\>/i";
echo preg_match_all($pattern, $string);

?>
</body>
</html>