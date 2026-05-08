<?php
    /*
    Task 4 Description:
    Implement the following half diamond pattern.
    1
    12
    123
    1234
    12345
    123456
    12345
    1234
    123
    12
    1
    */

    echo "<h2>Task 4: Half Diamond Number Pattern</h2>";

    $max_levels = 6;

    // --- Top Half of the Pattern (Rows 1 to 6) ---
    // The outer loop ($i) controls the number of rows
    for ($i = 1; $i <= $max_levels; $i++) {
        // The inner loop ($j) prints the numbers on that specific row
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        // Move to the next line after the row is complete
        echo "<br>"; 
    }

    // --- Bottom Half of the Pattern (Rows 5 down to 1) ---
    // Start at $max_levels - 1 so we don't repeat the longest row
    for ($i = $max_levels - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
?>