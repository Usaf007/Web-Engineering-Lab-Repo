<?php
    /*
    Task 7 Description:
    Find all the prime numbers that are less than 100 
    and compute its summation using PHP.
    */

    echo "<h2>Task 7: Prime Numbers & Summation</h2>";

    $prime_numbers = [];
    $sum = 0;

    // Outer loop: Pick a number from 2 to 99 to test
    for ($i = 2; $i < 100; $i++) {
        $is_prime = true; 
        
        // Inner loop: Try dividing it by EVERY smaller number.
        // We start dividing by 2, and stop right before the number itself ($i).
        for ($j = 2; $j < $i; $j++) {
            
            // If the number divides perfectly, it is NOT prime.
            if ($i % $j == 0) {
                $is_prime = false;
                break; 
            }
        }
        
        // If it survived the inner loop without dividing perfectly, it is prime!
        if ($is_prime) {
            $prime_numbers[] = $i; 
            $sum += $i;            
        }
    }

    echo "<strong>Prime Numbers less than 100:</strong><br>";
    echo implode(", ", $prime_numbers) . "<br><br>";
    
    echo "<strong>Total Summation:</strong> " . $sum . "<br>";
?>