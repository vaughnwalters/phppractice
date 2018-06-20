<?php

if(isset($_POST['submit'])) {
    $name = ["Vaughn", "Student", "Button", "Garth", "Wayne"];
    $minimum = 5;
    $maximum = 10;

//    echo "yes, it works";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum ) {
        echo "Username has to be longer than five";

    }

    if(strlen($username) > $maximum) {
        echo "Username cannot be longer than ten";

    }

    if(!in_array($username, $name)) {
        echo "sorry you are not allowed to log in!  you do not exist!";
    } else {
        echo "welcome";
    }

//    echo "Hello " . $username;
//    echo "Your Password is " . $password;

}

?>


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

<form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Name">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

</form>

</body>
</html>