<?php
    $foods = array("Apple", "Orange", "Beetroot");
    array_push($foods, "carrot");
    array_pop($foods); // removes last element
    array_shift($foods); // removes first element
    $rev = array_reverse($foods); // returns a reversed array of passed array
    count($foods); // returns the size of array
    for ($i = 0; $i < count($foods); $i++)
        echo $foods[$i]."<br>";
    foreach ($foods as $food)
        echo $food . "<br>";
    for ($i = 0; $i < count($rev); $i++)
        echo $rev[$i]."<br>";
?>