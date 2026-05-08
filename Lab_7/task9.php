<?php
    /*
    Task 9 Description:
    Implement a function in PHP which can take five-digit integer as argument 
    and return its summation. For example, the summation of 12345 is 15.
    */

    echo "<h2>Task 9: Summation of a 5-Digit Integer</h2>";

    // 1. Define the function
    function sumOfDigits($number) {
        $sum = 0;
        
        // 2. Loop until the number is completely broken down to 0
        while ($number > 0) {
            // Get the very last digit (e.g., 12345 % 10 = 5)
            $last_digit = $number % 10;
            
            // Add that digit to our running total
            $sum += $last_digit;
            
            // Chop off the last digit by dividing by 10.
            // We use (int) to force it to drop the decimal point.
            // (e.g., 12345 / 10 = 1234.5 -> becomes 1234)
            $number = (int)($number / 10); 
        }
        
        return $sum;
    }

    // 3. Test the function with a 5-digit number
    $test_number = 12345;
    $result = sumOfDigits($test_number);

    // 4. Display the output
    echo "<strong>Original Number:</strong> " . $test_number . "<br>";
    echo "<strong>Summation of Digits:</strong> " . $result . "<br>";
?>