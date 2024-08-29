<?php
// hashing is similar to encryption
    $password = "testword";
    $hash = password_hash(
        $password,
        PASSWORD_DEFAULT
    );
    echo $hash ."<br>";
    $hash2 = "testword";
    $hash2 = password_hash(
        $hash2,
        PASSWORD_DEFAULT
    );
    echo "Another hashed password is: {$hash2}<br>";
    if (password_verify($password, $hash))
        echo "Password matched!<br>";
    else
        echo "Password mismatched!<br>";
?>