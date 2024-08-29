<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6_associated_arrays.php" method=POST>
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    $capitals = array(
        "Punjab" => "Lahore",
        "Sindh" => "Karachi",
        "Balochistan" => "Quetta",
        "Gilgit Baltistan" => "Gilgit",
        "Khyber" => "Peshawar"
    );
    // $capital["Punjab"] = "Islamabad"; // changes the value of an existing key
    $capitals["Sariaki"] = "Multan"; // adds a new value at end
    $keys = array_keys($capitals);
    // array_flip($capitals); // returns a fliped associated array
    $values = array_values($capitals);
    foreach ($capitals as $key => $value) 
        echo "<p>{$key} => {$value}</p>";
    echo "<hr>";
    foreach ($keys as $key)
        echo "{$key} <br>";
    echo "<hr>";
    foreach ($values as $value)
        echo "{$value} <br>";

    $capital = $_POST["country"];
    echo "Capital of {$capital} is: {$capitals[$capital]}<br>";
?>