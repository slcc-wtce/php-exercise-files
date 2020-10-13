<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Assignment Operators Solution</title>
</head>

<body>
    <?php
        /**
        * Create at least two variables 
        * and assign them an integer or float
        **/
        $x = 3;
        $y = 12;

        /**
         * 1. Create an echo statement to show the results
         *    of assigning the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line 
         *    break to the screen.
         **/
        echo $x = $y;
        echo "<br>";

        /**
         * 1. Create an echo statement to show the results 
         *    of adding the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line 
         *    break to the screen.
         **/
        echo $x += $y;
        echo "<br>";

        /**
         * 1. Create an echo statement to show the results
         *    of subtracting the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/
        echo $x -= $y;
        echo "<br>";

        /**
         * 1. Create an echo statement to show the results
         *    of multiplying the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/
        echo $x *= $y;
        echo "<br>";

        /**
         * 1. Create an echo statement to show the results
         *    of dividing the value of the second variable 
         *    to the first
         * 2. Create an echo statement that sends a line break 
         *    to the screen.
         **/
        echo $x /= $y;
        echo "<br>";

        /**
         * 1. Create an echo statement to show the
         *    modulus (remainder) between the second 
         *    variable to the first
         * 2. Create an echo statement that sends a 
         *    line break to the screen.
         **/
        echo $x %= $y;
        echo "<br>";


    ?>
</body>

</html>