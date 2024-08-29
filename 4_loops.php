<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4_loops.php" method=POST>
        <label for="">Enter a number to count</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php

    $counter = $_POST["counter"];
    for ($i = 1; $i <= $counter; $i++)
        echo "{$i} <br>";

    $seconds = 0;
    $running = true;
    while ($running)
    {
        sleep(1);
        $seconds++;
        if ($seconds == 5)
            break;
    }
    echo "Program was running for: {$seconds} seconds<br>";

?>