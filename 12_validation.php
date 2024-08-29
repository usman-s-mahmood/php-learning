<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12_validation.php" method=POST>
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Age</label><br>
        <input type="text" name="age"><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["login"]))
    {
        $age = filter_input(
            INPUT_POST,
            "age",
            FILTER_VALIDATE_INT
        );
        $email = filter_input(
            INPUT_POST,
            "email",
            FILTER_VALIDATE_EMAIL
        );
        // form validation in PHP
        // form sanitization in PHP
        // $username = filter_input(
        //     INPUT_POST,
        //     "username",
        //     FILTER_SANITIZE_SPECIAL_CHARS
        // );
        // $age = filter_input(
        //     INPUT_POST,
        //     "age",
        //     FILTER_SANITIZE_NUMBER_INT
        // );
        // $email = filter_input(
        //     INPUT_POST,
        //     "email",
        //     FILTER_SANITIZE_EMAIL
        // );
        // echo "Hello! {$username}<br>";
        if (empty($age))
            echo "This is not a valid age<br>";
        else
            echo "Your age is: {$age} <br>"; 
        // echo "Your email is: {$email} <br>";
        if (empty($email))
            echo "Invalid email!<br>";
        else
            echo "Your email is: {$email}<br>";
    }
?>