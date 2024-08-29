<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9_check_items.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="Fries"> Fries <br>
        <input type="checkbox" name="foods[]" value="Pasta"> Pasta <br>
        <input type="checkbox" name="foods[]" value="Sandwhich"> Sandwhich <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"]))
    {
        $foods = $_POST["foods"];
        foreach ($foods as $food)
            echo "{$food} <br>";
    }
    // if (isset($_POST["submit"]))
    // {
    //     if (isset($_POST["pizza"]))
    //         echo "You like pizza! <br>";
    //     if (isset($_POST["fries"]))
    //         echo "You like fries! <br>";
    //     if (isset($_POST["pasta"]))
    //         echo "You like pasta! <br>";
    //     if (isset($_POST["sandwhich"]))
    //         echo "You like sandwhich! <br>";
    // }
?>