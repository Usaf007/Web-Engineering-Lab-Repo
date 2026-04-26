<?php
    require("connection.inc.php");

    // Session Security Check - The Bouncer is on this page too!
    if(!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != "yes"){
        header("Location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Categories</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        table, th, td { border: 1px solid black; padding: 5px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <p>Welcome <?php echo $_SESSION['ADMIN']; ?></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Number of Products</th>
            <th>Thumbnail</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        <?php
            // Fetch categories from the database
            $query = "SELECT * FROM categories";
            $result = mysqli_query($connection, $query);

          while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><a href='#'>" . $row['category_name'] . "</a></td>"; 
                echo "<td>" . $row['num_products'] . "</td>";
                echo "<td><img src='uploads/" . $row['thumbnail'] . "' alt='" . $row['category_name'] . "' width='60'></td>";
        
                echo "<td><a href='delete_category.php?id=" . $row['id'] . "' style='color:red;'>Delete</a></td>";
                echo "<td><a href='edit_category.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p>[1] <a href="#">2</a> <a href="#">></a> <a href="#">>></a></p>

    <form action="add_category.php" method="get">
        <button type="submit">Add Category</button>
    </form>
    <br>
    
    <a href="home.php">Home</a>
</body>
</html>