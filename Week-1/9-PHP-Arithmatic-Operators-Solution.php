<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Arithmetic Operators Solution</title>
</head>

<body>
    <?php

        //Create two variables and assign them an integer or a float
        $x = 6;
        $y = 3;

        /******************************************************
         * 1. Create a variables that adds the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x + $y;
        echo "$x + $y = $z";
        echo "<br>";

        /******************************************************
         * 1. Create a variables that subtracts the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x - $y;
        echo "$x - $y = $z";
        echo "<br>";

        /******************************************************
         * 1. Create a variables that calculates the 
         *    modulus (remainder) the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x % $y;
        echo "$x % $y = $z";
        echo "<br>";

        /******************************************************
         * 1. Create a variables that divides the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x / $y;
        echo "$x / $y = $z";
        echo "<br>";

        /******************************************************
         * 1. Create a variables that multiplies the earlier two
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x * $y;
        echo "$x * $y = $z";
        echo "<br>";

        /******************************************************
         * 1. Create a variables that calculates the first 
         *    to the power of the second.
         * 2. Echo the variable to the screen
         * 3. Create an echo statement that sends a 
         *    line break to the screen
         ******************************************************/
        $z = $x ** $y;
        echo "$x ** $y = $z";
        echo "<br>";

    ?>
</body>

</html>