<?php
    require("connection.inc.php");

    // Session Security Check
    if(!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] != "yes"){
        header("Location: login.php");
        die();
    }

    // Process the form submission
    if(isset($_POST['addItemSubmit'])) {
        $category_id = $_POST['category_id'];
        $item_name = $_POST['item_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        // Handle File Upload for the Item Image
        $item_image = $_FILES['item_image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($item_image);
        
        if(move_uploaded_file($_FILES['item_image']['tmp_name'], $target_file)) {
            // 1. Insert the new item into the database
            $insert_query = "INSERT INTO items (category_id, item_name, price, description, item_image) 
                             VALUES ('$category_id', '$item_name', '$price', '$description', '$item_image')";
            
            if(mysqli_query($connection, $insert_query)) {
                // 2. Automatically increment the 'Number of Products' in the categories table!
                $update_count = "UPDATE categories SET num_products = num_products + 1 WHERE id = '$category_id'";
                mysqli_query($connection, $update_count);

                echo "<strong style='color:green;'>Item '$item_name' successfully added to the database!</strong><br><br>";
            } else {
                echo "<strong style='color:red;'>Database Error: </strong>" . mysqli_error($connection) . "<br><br>";
            }
        } else {
            echo "<strong style='color:red;'>Failed to upload item image.</strong><br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
</head>
<body>
    <h2>Add Item to Category</h2>
    
    <form method="post" action="" enctype="multipart/form-data">
        <label>Select Category:</label>
        <select name="category_id" required>
            <option value="">-- Choose a Category --</option>
            <?php
                // Dynamically fetch categories for the dropdown menu
                $cat_query = "SELECT id, category_name FROM categories";
                $cat_result = mysqli_query($connection, $cat_query);
                
                while($row = mysqli_fetch_assoc($cat_result)){
                    echo "<option value='" . $row['id'] . "'>" . $row['category_name'] . "</option>";
                }
            ?>
        </select><br><br>

        <label>Item Name:</label>
        <input type="text" name="item_name" required><br><br>
        
        <label>Price (Rs):</label>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="4" cols="30" required></textarea><br><br>
        
        <label>Item Image:</label>
        <input type="file" name="item_image" required><br><br>
        
        <button type="submit" name="addItemSubmit">Save Item</button>
    </form>
    <br>
    <a href="home.php">Back to Dashboard</a>
</body>
</html>