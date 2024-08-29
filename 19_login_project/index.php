<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method=POST>
        <h2>Welcome to Fakebook!</h2>
        <label for="">Username</label><br>
        <input type="text" name="username" minlength="8" required><br>
        <label for="">Password</label><br>
        <input type="password" name="password" minlength="8" required><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = filter_input(
            INPUT_POST,
            "username",
            FILTER_SANITIZE_SPECIAL_CHARS
        );
        $password = filter_input(
            INPUT_POST,
            "password",
            FILTER_SANITIZE_SPECIAL_CHARS
        );
        if (empty($username))
            echo "Enter your username to continue!<br>";
        else if (empty($password))
            echo "Enter your password to continue<br>";
        else
        {
            $hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );
            $sql = "INSERT INTO users (username, password) values ('$username', '$hash');";
            try {
                mysqli_query($conn, $sql);
                echo "{$username} is now registered!<br>";
            }
            catch (mysqli_sql_exception) {
                echo "Error! User not registered, either username is already taken or some other exception<br>";
            }
        }
    }
    mysqli_close($conn);
?>