<?php
    /*
    Task 2 Description:
    Initialize a string variable as "I am string to be tested" and apply 
    string functions to reverse it, count number of words and find what is 
    the position of word "be".
    */

    echo "<h2>Task 2: String Functions</h2>";

    // 1. Initialize the string
    $my_string = "I am string to be tested";
    echo "<strong>Original String:</strong> " . $my_string . "<br><br>";

    // 2. Reverse the string using strrev()
    $reversed_string = strrev($my_string);
    echo "<strong>Reversed String:</strong> " . $reversed_string . "<br>";

    // 3. Count the number of words using str_word_count()
    $word_count = str_word_count($my_string);
    echo "<strong>Word Count:</strong> " . $word_count . "<br>";

    // 4. Find the position of the word "be" using strpos()
    // Note: strpos() is case-sensitive.
    $position = strpos($my_string, "be");
    echo "<strong>Position of 'be':</strong> " . $position . "<br>";
?>