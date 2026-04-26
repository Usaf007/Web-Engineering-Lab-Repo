<?php
    // Check if a session is not already active, then start one
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "ecommercesite";

    $connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    if(!$connection){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>