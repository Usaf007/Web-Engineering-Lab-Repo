<?php
    /*
    Task 8 Description:
    Implement the concept of Associative Arrays.
    */

    echo "<h2>Task 8: Associative Arrays</h2>";

    // 1. Initialize an associative array (Key => Value pairs)
    $student_profile = [
        "Name" => "Usaf",
        "University" => "UET Mardan",
        "Department" => "Computer Software Engineering",
        "Semester" => "6th"
    ];

    // 2. Display the entire array in a readable format using a foreach loop
    echo "<strong>Student Profile Details:</strong><br><br>";
    
    // The foreach loop breaks each item into its $key (the label) and $value (the data)
    foreach ($student_profile as $key => $value) {
        echo "<strong>" . $key . ":</strong> " . $value . "<br>";
    }
    
    echo "<br><hr><br>";

    // 3. Demonstrate how to access just a single specific value
    echo "<strong>Accessing a single value directly:</strong><br>";
    echo "The student is currently in their " . $student_profile["Semester"] . " semester.";
?>