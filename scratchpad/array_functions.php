<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$list = [343, 656, 2323, 6666, 234234, 3];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

sort($list);

print_r($list);

?>

</body>
</html>