<?php
    require("connection.inc.php");

    // Session Security Check (The Bouncer)
    if(!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != "yes"){
        header("Location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Items</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>All Inventory Items</h2>
    <p>Admin User: <strong><?php echo $_SESSION['ADMIN']; ?></strong></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price (Rs)</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        <?php
            // The INNER JOIN Query: Fetches from BOTH tables where the IDs match
            $query = "SELECT items.id, items.item_name, categories.category_name, items.price, items.description, items.item_image 
                      FROM items 
                      INNER JOIN categories ON items.category_id = categories.id";
            
            $result = mysqli_query($connection, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td><strong>" . $row['item_name'] . "</strong></td>";
                    echo "<td>" . $row['category_name'] . "</td>"; // Displaying the actual name!
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td><img src='uploads/" . $row['item_image'] . "' alt='" . $row['item_name'] . "' width='60'></td>";
                    echo "<td><a href='#' style='color:red;'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No items found in the database.</td></tr>";
            }
        ?>
    </table>
    <br>
    
    <form action="add_item.php" method="get" style="display:inline;">
        <button type="submit">Add Another Item</button>
    </form>
    <form action="home.php" method="get" style="display:inline;">
        <button type="submit">Back to Dashboard</button>
    </form>
</body>
</html>