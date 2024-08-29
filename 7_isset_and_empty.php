<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7_isset_and_empty.php" method=POST>
        <label for="">Username: </label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In"><br>

    </form>
</body>
</html>


<?php

    if (!empty($_POST["login"]))
    {
        if (!empty($_POST["username"]))
        {

            if (!empty($_POST["password"]))
                echo "trying for login with password and username<br>";
            else
                echo "No Login Without Password!<br>";
        }
        else
            echo "No Login Without USERNAME<br>";
    }

    foreach ($_POST as $key => $value)
        echo "{$key} => {$value}<br>";

// isset() returns true if a variable is declared and not null
// empty() returns true if a variable is not declared, false, null or "";
    // $username = "user";
    // if (isset($username))
    //     echo "This variable is set<br>";
    // else
    //     echo "This variable is NOT set<br>";

    // if (empty($password))
    //     echo "Variable does not exist<br>";
    // else
    //     echo "Variable exists<br>";
?>