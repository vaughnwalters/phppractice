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

function greeting($message) {
    echo $message . "<br>";
}

greeting("Hello Students");


function calculate($number, $number2) {
   $sum = $number + $number2;
   echo $sum;
}

calculate(12,23)

?>

</body>
</html>