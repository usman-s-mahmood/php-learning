<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";
    try {
        $conn = mysqli_connect(
            $db_server,
            $db_user,
            $db_pass,
            $db_name
        );
    }
    catch(mysqli_sql_exception) {
        echo "Not connected to database!<br>";
    }
    // if ($conn)
    //     echo "connected to the database!<br>";
    // else
    //     echo "Not connected to the database<br>"
?>