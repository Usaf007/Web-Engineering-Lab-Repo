<?php
    /*
    Task 6 Description:
    Pretend there is a sorted list such as 1, 1, 2, 2, 3, 4, 5, 5. 
    Write code that could remove all the duplicated from the list 
    and make it as 1, 2, 3, 4, 5.
    */

    echo "<h2>Task 6: Remove Array Duplicates</h2>";

    // 1. Initialize the original array with duplicate values
    $original_list = [1, 1, 2, 2, 3, 4, 5, 5];

    echo "<strong>Original List:</strong> ";
    // implode() joins the array elements into a string separated by a comma and space
    echo implode(", ", $original_list) . "<br><br>";
   

    // 2. Use PHP's built-in function to strip out duplicate values
    $cleaned_list = array_unique($original_list);

    // 3. Display the final cleaned array
    echo "<strong>Cleaned List (No Duplicates):</strong> ";
    echo implode(", ", $cleaned_list) . "<br>";
?>