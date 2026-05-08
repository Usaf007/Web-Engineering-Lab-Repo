<?php
    require("connection.inc.php");

    // Session Security Check
    if(!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != "yes"){
        header("Location: login.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
</head>
<body>
    <p>Welcome <?php echo $_SESSION['ADMIN']; ?></p>
    
    <form action="showcategory.php" method="get">
        <button type="submit">Categories</button>
    </form>
    <br>

    <form action="showcategory.php" method="get" style="display:inline;">
        <button type="submit">Manage Categories</button>
    </form>
    
    <form action="add_item.php" method="get" style="display:inline;">
        <button type="submit">Add New Item</button>
    </form>

    <form action="show_items.php" method="get" style="display:inline;">
        <button type="submit">View All Items</button>
    </form>
    <br><br>
    
    <a href='logout.php'>logout</a>
</body>
</html>