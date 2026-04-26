<?php
    // Start the session so we know which one to destroy
    session_start();
    
    // Destroy all session data completely
    session_destroy();
    
    // Redirect back to the login page
    header('location:login.php');
    die();
?>