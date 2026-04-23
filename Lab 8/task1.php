<?php
    // Establishing connection to the server and database
    require_once('1.connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 1: Sign Up Form</title>
</head>
<body>
    <h2>Sign Up Form</h2>
    
    <form method="post" action="">
        <table>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="Male" checked> Male<br>
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label>Address:</label></td>
                <td><textarea name="address" rows="3" cols="22"></textarea></td>
            </tr>
            <tr>
                <td><label>Login ID:</label></td>
                <td><input type="text" name="login_id"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><label>Agreed with Policy:</label></td>
                <td><input type="checkbox" name="policy" value="1"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submitButton" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>