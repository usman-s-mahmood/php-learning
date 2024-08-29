<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task_1.php" method=POST>
        <label for="">Quantity: </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = 'pizza';
    $price = 5.88;
    $quantity = $_POST["quantity"];
    $total = $quantity * $price;
    echo "You have ordered {$quantity} x {$item}/s";
    echo "<br>";
    echo "Your total is: \${$total}";
?>