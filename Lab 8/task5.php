<?php
    // 1. Establishing the database connection
    require_once('1.connect.php');

    // 2. Check if the delete button was pressed
    if(isset($_POST['deleteButton'])) {
        
        // 3. Catch the login ID from the form
        $login_id = $_POST['login_id']; 

        // 4. Write the SQL DELETE Query
        // CRITICAL WARNING: Never forget the WHERE clause in a DELETE query!
        $query = "DELETE FROM users WHERE login_id = '$login_id'";

        // 5. Execute the query
        $execute = mysqli_query($connect, $query);

        // 6. Check if it actually deleted a row
        if($execute && mysqli_affected_rows($connect) > 0){
            echo "<strong style='color: green;'>User with Login ID '$login_id' has been successfully deleted from the database.</strong><br><br>";
        } elseif ($execute && mysqli_affected_rows($connect) == 0) {
            echo "<strong style='color: orange;'>No user found with that Login ID. Nothing was deleted.</strong><br><br>";
        } else {
            echo "<strong style='color: red;'>Delete operation failed: </strong>" . mysqli_error($connect) . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 5: Delete Data</title>
</head>
<body>
    <h2>Delete User Data</h2>
    <p><em>Enter the Login ID of the user you want to remove.</em></p>
    
    <form method="post" action="">
        <table>
            <tr>
                <td><label>Login ID to Delete:</label></td>
                <td><input type="text" name="login_id" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="deleteButton" value="Delete User" style="background-color: red; color: white;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>