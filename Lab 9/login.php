<?php
    require("connection.inc.php");

    // Check if the login form was submitted
    if(isset($_POST['submitbutton'])){
        $username = $_POST['usernametextbox'];
        $password = $_POST['passwordtextbox'];
        
        // Look for the user in the database
        $query = "SELECT * FROM admin_users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        
        // If 1 row is found, the credentials are correct!
        if($count > 0){
            // Set the Session Variables (The "VIP Wristband")
            $_SESSION['ADMIN_LOGIN'] = "yes";   
            $_SESSION['ADMIN'] = $username;
            
            // Redirect the user to the home page
            header('location:home.php');
            die();
        } else {
            echo "<strong style='color:red;'>Please enter correct details.</strong><br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Secure Login Portal</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="usernametextbox" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="passwordtextbox" required><br><br>
        
        <button type="submit" name="submitbutton">Sign In</button>
    </form>
</body>
</html>