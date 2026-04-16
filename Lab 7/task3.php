<?php
    /*
    Task 3 Description:
    Implement the concept of function in PHP which can return summation of 
    two integer variables received as parameters.
    */

    echo "<h2>Task 3: PHP Functions & Parameters</h2>";

    // 1. Define the function with two parameters ($num1, $num2)
    function calculateSum($num1, $num2) {
        // Calculate the summation
        $sum = $num1 + $num2;
        
        // Returning the result back to where the function was called
        return $sum;
    }

    // 2. Define two integer variables
    $value_one = 15;
    $value_two = 25;

    // 3. Call the function, pass the variables as arguments, and store the result
    $final_result = calculateSum($value_one, $value_two);

    // 4. Display the results
    echo "<strong>First Integer:</strong> " . $value_one . "<br>";
    echo "<strong>Second Integer:</strong> " . $value_two . "<br><br>";
    echo "<strong>Summation Result:</strong> " . $final_result . "<br>";
?>