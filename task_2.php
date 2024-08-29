<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task_2.php" method=POST>
        <label for="">Enter a radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 3);
    $area = pi() * pow($radius, 3);
    $area = round($area, 3);
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 3);
    echo "<p>Circumference is {$circumference}</p>";
    echo "<p>Area is {$area} units^2</p>";
    echo "<p>Volume is {$volume} units^3</p>";
?>