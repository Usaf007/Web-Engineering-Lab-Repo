<?php
    // Database credentials
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "web_engineering_db";

    // Establishing the connection
    $connect = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    
    // Checking if the connection is successful or not
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "<strong>Connected successfully to web_engineering_db!</strong><br><br>";
    }
?>