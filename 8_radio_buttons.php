<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="8_radio_buttons.php" method="post">
        <label for=""></label><br>
        <input type="radio" value="visa" name="credit_card">VISA <br>
        <input type="radio" value="master card" name="credit_card">Master Card <br>
        <input type="radio" value="union pay" name="credit_card">Union Pay <br>
        <input type="submit" value="submit" name="confirm">
    </form>
</body>
</html>

<?php
    $credit_card = null;
    if (isset($_POST["confirm"]) && empty($_POST["credit_card"]))
        echo "Please make a valid selection!<br>";
    echo isset($_POST["confirm"]);
    echo "<br>";
    if (!empty($_POST["credit_card"]))
        $credit_card = $_POST["credit_card"];
    if (isset($_POST["confirm"]))
        echo $_POST["credit_card"] . "<br>";
    if (!empty($credit_card))
        echo $_POST["credit_card"] . "<br>";
    if ($credit_card == "visa")
        echo "You selected visa!<br>";
    else if ($credit_card == "master card")
        echo "You selected master card!<br>";
    else if ($credit_card == "union pay")
        echo "You selected union pay!<br>";
    else
        echo "Please make a selection!";
    

        
?>
