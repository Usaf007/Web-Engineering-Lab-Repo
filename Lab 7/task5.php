<?php
    /*
    Task 5 Description:
    Initialize three variables of your own choice and display its value 
    in table as shown below.
    */

    echo "<h2>Task 5: Variables in an HTML Table</h2>";

    // 1. Initialize the three variables
    $first_val = "Yousaf";
    $second_val = "Ali Haider";
    $third_val = "Salahuddin";
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td style="color: darkblue;">First Variable value</td>
        <td><?php echo $first_val; ?></td>
    </tr>
    <tr>
        <td style="color: darkblue;">Second Variable value</td>
        <td><?php echo $second_val; ?></td>
    </tr>
    <tr>
        <td style="color: darkblue;">Third Variable value</td>
        <td><?php echo $third_val; ?></td>
    </tr>
</table>