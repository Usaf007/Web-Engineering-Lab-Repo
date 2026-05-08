<?php
    // 1. Establishing the database connection
    require_once('1.connect.php');

    // 2. Checking if the update button was pressed
    if(isset($_POST['updateButton'])) {
        
        // 3. Catching the data from the form
        // We use login_id to FIND the user, and the others to UPDATE the user
        $login_id = $_POST['login_id']; 
        $new_name = $_POST['name'];
        $new_address = $_POST['address'];
        $new_password = $_POST['password'];

        // 4. SQL UPDATE Query
        $query = "UPDATE users 
                  SET name = '$new_name', address = '$new_address', password = '$new_password' 
                  WHERE login_id = '$login_id'";

        // 5. Execute the query
        $execute = mysqli_query($connect, $query);

        // 6. Check if it worked
        // mysqli_affected_rows checks if any actual changes were made in the table
        if($execute && mysqli_affected_rows($connect) > 0){
            echo "<strong style='color: blue;'>Data successfully updated for Login ID: $login_id!</strong><br><br>";
        } elseif ($execute && mysqli_affected_rows($connect) == 0) {
            echo "<strong style='color: orange;'>No changes made. Either the Login ID doesn't exist, or the new data is exactly the same as the old data.</strong><br><br>";
        } else {
            echo "<strong style='color: red;'>Update failed: </strong>" . mysqli_error($connect) . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 3: Update Data</title>
</head>
<body>
    <h2>Update User Data</h2>
    <p><em>Enter your exact Login ID to update your Name, Address, and Password.</em></p>
    
    <form method="post" action="">
        <table>
            <tr>
                <td><label>Target Login ID:</label></td>
                <td><input type="text" name="login_id" required></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr> <tr>
                <td><label>New Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label>New Address:</label></td>
                <td><textarea name="address" rows="3" cols="22" required></textarea></td>
            </tr>
            <tr>
                <td><label>New Password:</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="updateButton" value="Update Data">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>