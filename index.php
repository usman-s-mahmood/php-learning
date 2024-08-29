<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Learning _GET and _POST</title>
</head>
<body>
    <form action="index.php" method=POST>
        <label for="">Username</label>
        <input type="text" name="username"><br>
        <label for="">password</label>
        <input type="password" name="password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
    // echo "{$_GET["username"]} <br>";
    // echo $_GET["password"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "Username is: {$username}";
    echo "<br>";
    echo "Password is: {$password}";
    echo "<br>";
?>



<!-- <?php
echo "this is PHP";
echo "<h1>this is PHP</h1>";
$username = "user";
$var = "value";
echo "Hello {$username}";
echo "<br>Variable contains: {$var}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <div>
        <h1>This is PHP and HTML</h1>
    </div>
    <div>
        <br>
        <button>Click Me</button>
    </div>
</body>
</html> -->