<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $age = 0;
    if ($age >= 100)
        echo "<p>Too Old to enter this site</p>";
    else if ($age >= 18)
        echo "<p>You are allowed to visit this site</p>";
    else if ($age <= 0)
        echo "<p>Invalid Age!</p>";
    else
        echo "<p>You are not allowed to visit this site. You must be 18+</p>";

?>