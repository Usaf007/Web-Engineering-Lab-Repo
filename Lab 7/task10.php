<?php
    /*
    Task 10 Description:
    Create an array with specific countries/cities. Print separated by commas 
    using a loop. Sort the array, print in an unordered list using a loop. 
    Add Quetta, Faisalabad and Multan. Sort again, print in an unordered list.
    */

    echo "<h2>Task 10: Array Manipulation & Sorting</h2>";

    // 1. Create the initial array
    $locations = [
        "Pakistan", "England", "India", "America", "Dubai", "Saudi Arabia", 
        "Mexico", "Turkey", "Holland", "Karachi", "Peshawar", "Lahore"
    ];

    // 2. Print values separated by commas using a loop
    echo "<strong>Original Array (Comma Separated):</strong><br>";
    $total_items = count($locations);
    
    for ($i = 0; $i < $total_items; $i++) {
        echo $locations[$i];
        
        // Add a comma and space ONLY if it is not the very last item in the array
        if ($i < $total_items - 1) {
            echo ", ";
        }
    }
    echo "<br><br>";

    // 3. Sort the array alphabetically
    sort($locations);

    // 4. Print the sorted array in an HTML unordered list
    echo "<strong>Sorted Array (Unordered List):</strong>";
    echo "<ul>"; // Open the list
    foreach ($locations as $place) {
        echo "<li>" . $place . "</li>"; // Print each item as a list element
    }
    echo "</ul>"; // Close the list

    // 5. Add new cities to the array using array_push
    array_push($locations, "Quetta", "Faisalabad", "Multan");

    // 6. Sort the array again now that new cities are added
    sort($locations);

    // 7. Print the updated array in a new unordered list
    echo "<strong>Updated & Sorted Array (Unordered List):</strong>";
    echo "<ul>";
    foreach ($locations as $place) {
        echo "<li>" . $place . "</li>";
    }
    echo "</ul>";
?>