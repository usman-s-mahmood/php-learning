<?php
    include("database.php");
    // $username = "Patrick";
    // $password = "rockhouse3";
    // $hash = password_hash(
    //     $password,
    //     PASSWORD_DEFAULT
    // );
    // $sql = "INSERT INTO users (username, password) VALUES ('{$username}', '{$hash}')";
    $sql = "select * from users;";
    $result = 0;
    try {
        $result = mysqli_query($conn, $sql);
        // echo "User is registered!<br>";
    }
    catch (mysqli_sql_exception) {
        echo "User not registered!<br>";
    }
    if (mysqli_num_rows($result) > 0)
    {
        // for fetching multiple rows
        while ($row = mysqli_fetch_assoc($result))
        {
            echo $row["id"]."<br>";
            echo $row["username"]."<br>";
            echo $row["reg_date"]."<br>";
        }
        // for fetching one row
        // $row = mysqli_fetch_assoc($result);
        // echo $row["id"]."<br>";
        // echo $row["username"]."<br>";
        // echo $row["reg_date"]."<br>";
    }
    else
        echo "No user found!<br>";
    mysqli_close($conn);
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
        <span>Hello</span><br>
    </div>
</body>
</html>

<?php

?>