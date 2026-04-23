<?php
    // 1. Check if the upload button was pressed
    if(isset($_POST['uploadButton'])) {
        
        // 2. Define where we want to save the uploaded files
        $target_dir = "uploads/";
        
        // 3. Create the 'uploads' folder automatically if it doesn't exist yet!
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // 4. Get the exact name of the file and combine it with our folder path
        // e.g., "uploads/my_profile_pic.jpg"
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // 5. Move the file from PHP's temporary memory to our target folder
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<strong style='color: green;'>Success! The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded to the server.</strong><br><br>";
            
            // Bonus: If it's an image, let's display it on the screen to prove it worked!
            echo "<img src='$target_file' width='200' style='border: 1px solid black;'><br><br>";
        } else {
            echo "<strong style='color: red;'>Sorry, there was an error uploading your file.</strong><br><br>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 6: File Upload</title>
</head>
<body>
    <h2>Upload an Image or File</h2>
    <p><em>Select a file from your computer to upload it to the local XAMPP server.</em></p>
    
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>Select File:</label></td>
                <td><input type="file" name="fileToUpload" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br>
                    <input type="submit" name="uploadButton" value="Upload File">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>