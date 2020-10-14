<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using a Do, While loop in PHP Solution</title>
</head>

<body>
    <?php
    //Create a variable that is assigned the integer value of 1
    $x = 1;

    /*******************************************************
     * 1. Create a basic do statement 
     * 2. In the code block to be run, do the following 
     *    a. Create an echo statement that sends the string 
     *       "The number is: (the value of the variable)"
     *    b. Add a line break
     *    c. Increment the value assigned to the variable 
     *       up by one 
     * 3. Create a while statement
     * 4. In the condition, test if the variable is less 
     *    than 10
     *******************************************************/
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x < 10);
    ?>
</body>

</html>