<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Comparison Operators Solution</title>
</head>

<body>
    <?php
    /***************************************************
     * IMPORTANT NOTE:
     * The tool used to practice will change the
     * look of some of the operators (such as the not
     * equal or the identical operators). The exercise
     * will still work properly.
     ****************************************************/
    //Create two variables that contain different data types (i.e. one integer and one string)
    $x = 3;
    $y = "3";

    /**********************************************************
     * 1. Create an echo statement that sends
     *    the string 'The value of $x is equal to $y: '
     * 2. Use the equality operator in a var_dump statement
     *    to test if the values are equal
     * 3. Create an echo statement to create a line break on the webpage
     **********************************************************/
    echo 'The value of $x is equal to $y: ';
    echo var_dump($x == $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string 'The value of $x is not equal to $y: '
     * 2. Use the not equal operator in a var_dump statement 
     *    to test if the values are not equal
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/

    echo 'The value of $x is not equal to $y: ';
    echo var_dump($x != $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is identical to $y: '
     * 2. Use the identical operator in a var_dump statement 
     *    to test if the values are identical
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is identical to $y: ';
    echo var_dump($x === $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is not identical to $y: '
     * 2. Use the not identical operator in a var_dump statement 
     *    to test if the values are not identical
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is not identical to $y: ';
    echo var_dump($x !== $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is greater than $y: '
     * 2. Use the greater than operator in a var_dump statement 
     *    to test if the first variable is greater than the second
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is greater than $y: ';
    echo var_dump($x > $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is less than $y: '
     * 2. Use the less than operator in a var_dump statement 
     *    to test if the first variable is less than the second
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is less than $y: ';
    echo var_dump($x < $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is greater than or equal to $y: '
     * 2. Use the greater than or equal operator in a var_dump statement 
     *    to test if the first variable is greater than or equal to the second
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is greater than or equal to $y: ';
    echo var_dump($x >= $y);
    echo "<br>";

    /***********************************************************
     * 1. Create an echo statement that sends 
     *    the string '$x is less than or equal to $y: '
     * 2. Use the greater than or equal operator in a var_dump statement 
     *    to test if the first variable is greater than or equal to the second
     * 3. Create an echo statement to create a line break on the webpage
     ***********************************************************/
    echo '$x is less than or equal to $y: ';
    echo var_dump($x <= $y);
    echo "<br>";

    ?>
</body>

</html>