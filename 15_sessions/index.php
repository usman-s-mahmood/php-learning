<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <span>This is the Login Page</span><br>
        <form action="index.php" method=POST>
            <label for="">username</label><br>
            <input type="text" name="username"><br>
            <label for="">password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="login" value="login">
        </form>

    </div>
</body>
</html>

<?php
    if (isset($_POST["login"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"]))
        {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: home.php"); // used for redirection
        }
    }
    else
        echo "Missing username/password <br>";
    // $_SESSION["username"] = "testuser";
    // $_SESSION["password"] = "testpassword";
    // echo $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";
?>