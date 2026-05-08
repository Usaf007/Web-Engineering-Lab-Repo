<?php
    // 1. Establishing the database connection
    require_once('1.connect.php');

    // 2. Checking if the submit button was pressed
    if(isset($_POST['submitButton'])) {
        
        // 3. Catching all the data sent from the form
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $login_id = $_POST['login_id'];
        $password = $_POST['password'];
        
        // The checkbox is tricky: if they don't check it, it sends nothing.
        // We use a quick check: if it's set, make it 1. If not, make it 0.
        $agreed = isset($_POST['policy']) ? 1 : 0;

        // 4. SQL Query to insert the data into the 'users' table
        $query = "INSERT INTO users (name, gender, email, address, login_id, password, agreed) 
                  VALUES ('$name', '$gender', '$email', '$address', '$login_id', '$password', '$agreed')";

        // 5. Executing the query
        $execute = mysqli_query($connect, $query);

        // 6. Providing feedback to the user
        if($execute){
            echo "<strong style='color: green;'>Data inserted successfully into the database!</strong><br><br>";
        } else {
            echo "<strong style='color: red;'>Data not inserted: </strong>" . mysqli_error($connect) . "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 2: Insert Data</title>
</head>
<body>
    <h2>Sign Up Form</h2>
    
    <form method="post" action="">
        <table>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name" required></td>
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
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><label>Address:</label></td>
                <td><textarea name="address" rows="3" cols="22"></textarea></td>
            </tr>
            <tr>
                <td><label>Login ID:</label></td>
                <td><input type="text" name="login_id" required></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" required></td>
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