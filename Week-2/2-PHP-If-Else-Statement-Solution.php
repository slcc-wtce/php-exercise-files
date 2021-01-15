<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using If, Else Statements in PHP Solution</title>
</head>

<body>
    <?php
    //Create a variable that is assigned an integer
    $x = 3;

    /******************************************************
     * 1. Create a basic if statement
     * 2. Test if the variable is equal to what it is 
     *    currently set to
     * 3. Create an echo statement that sends 
     *    "This is TRUE!" within curly brackets after 
     *    the condition
     * 4. Add the else clause
     * 5. Create an echo statement that sends 
     *    "This is FALSE!" within curly brackets after 
     *    the else clause
     * 6. Try changing the values of the variable and 
     *    the test statement to see when the code runs
     ******************************************************/
    if ($x == 3) {
        echo "This is TRUE!";
    } else {
        echo "This is FALSE!";
    }
    ?>
</body>

</html>