<?php
    // 1. Establishing the database connection
    require_once('1.connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 4: Retrieve Data</title>
    <style>
        .data-table {
            border-collapse: collapse;
            width: 100%;
        }
        .data-table th, .data-table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        .data-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Registered Users Database</h2>
    
    <form method="post" action="">     
        <input type="submit" value="Fetch All Data" name="showButton"><br><br>
    </form>

    <?php
        // 2. Check if the "Fetch All Data" button was clicked
        if(isset($_POST['showButton'])){
            
            // 3. Write the SQL SELECT Query to get all records from the 'users' table
            $query = "SELECT * FROM users";
            
            // 4. Execute the query and store the raw result set
            $result = mysqli_query($connect, $query);

            // 5. Check if the database actually returned any rows
            if (mysqli_num_rows($result) > 0) {
                
                // Build the HTML table headers
                echo "<table class='data-table'>";
                echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Address</th><th>Login ID</th></tr>";
                
                // 6. Loop through the result set one row at a time
                // mysqli_fetch_assoc turns the database row into a PHP associative array
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['login_id'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
            } else {
                echo "<strong>No records found in the database.</strong>";
            }
        }
    ?>
</body>
</html>