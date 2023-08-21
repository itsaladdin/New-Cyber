<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $host = "localhost";  
    $user = "aladdin";  
    $password = 'Ti2NS!I*Wk/(6]bu';  
    $db_name = "aladdin";  
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
