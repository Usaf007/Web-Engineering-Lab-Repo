<?php
/*
    Task 1 Description:
    Implement the concept of integer, float, string and constant variable. 
    Concatenate two strings and display it using echo statement.
*/
    echo "<h2>Task 1: Variables & Concatenation</h2>";

    // 1. Integer Variable
    $student_id = 104; 

    // 2. Float Variable
    $lab_score = 9.5; 

    // 3. String Variables
    $first_word = "Web";
    $second_word = "Engineering";

    // 4. Constant Variable
    // define(name, value)
    define('UNIVERSITY', 'UET Mardan'); 

    // 5. Concatenation 
    // In PHP, we use the dot (.) operator to join strings together
    $course_name = $first_word . " " . $second_word;

    // Displaying everything using echo
    echo "<strong>Integer:</strong> " . $student_id . "<br>";
    echo "<strong>Float:</strong> " . $lab_score . "<br>";
    echo "<strong>Constant:</strong> " . UNIVERSITY . "<br>";
    echo "<strong>Concatenated String:</strong> " . $course_name . "<br>";
?>