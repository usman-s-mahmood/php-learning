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
        <span>This is the Home page</span>
        <form action="home.php" method=POST>
            <input type="submit" name="logout" value="logout">
        </form>
    </div>
</body>
</html>
<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
    if (isset($_POST["logout"]))
    {
        session_destroy();
        header("Location: index.php"); 
    }

?>