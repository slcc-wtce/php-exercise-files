<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Logical & String Operators Solution</title>
</head>

<body>
    <?php
        /*****************************************************
         * 1. Create four variables
         * 2. Assign a boolean value (true or false) to the 
         *    first two
         * 3. Assign strings to the last two
         *****************************************************/
        $a = true;
        $b = false;
        $c = "Today is a";
        $d = "great day!";

        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'The variables (first variable name) and 
         *    (second variable name) are true: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests two variables 
         *    using the And (&&) operator
         * 3. Add a line break
         *****************************************************/
        echo 'The variables $a and $b are true: ';
        echo var_dump($a && $b); //Returns false (0)
        echo "<br>";

        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'Either the variable (first variable name) or 
         *    (second variable name) is true: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests two 
         *    variables using the OR (||) operator
         * 3. Add a line break
         *****************************************************/
        echo 'Either the variable $a or $b is true: ';
        echo var_dump($a || $b); //Returns true (1)
        echo "<br>";

        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'The variables (first variable name) is not true: ' 
         *    (NOTE: Use single quotation marks so the name 
         *     of the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests the variable 
         *    using the NOT (!) operator
         * 3. Add a line break
         *****************************************************/
        echo 'The variables $a is not true: ';
        echo var_dump(!$a); //Returns false (0)
        echo "<br>";

        /*****************************************************
         * 1. Create an echo statement that writes 
         *    'Either the variable (first variable name) or 
         *    (second variable name) is true, but not both: ' 
         *    (NOTE: Use single quotation marks so the name of 
         *     the variable is sent to the screen, not the value)
         * 2. Echo an var_dump statement that tests the 
         *    variables using the XOR (xor) operator
         * 3. Add a line break
         *****************************************************/
        echo 'Either the variable $a or $b is true, but not both: ';
        echo var_dump($a xor $b); //Returns true (1)
        echo "<br>";

        /*****************************************************
         * 1. Create an echo statement that will concatenate 
         *    the value of the third and fourth variables with 
         *    a space between
         * 2. Add a line break
         *****************************************************/
        echo $c . " " . $d . "<br>";

        /*****************************************************
         * 1. Append the third variable to the fourth using 
         *    the append operator (.=)
         * 2. Create an eco statement that send the content 
         *    of the third variable to the screen
         * 2. Add a line break
         *****************************************************/
        $c .= $d;
        echo $c;
        echo "<br>";

    ?>
</body>

</html>