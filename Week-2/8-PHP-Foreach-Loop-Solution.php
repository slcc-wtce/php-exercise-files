<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using a Foreach loop in PHP Solution</title>
</head>

<body>
    <?php
    //Create an array of at least three favorite colors
    $colors = ["red", "green", "yellow", "orange", "blue"];

    /*******************************************************
     * 1. Create an echo statement that sends the string 
     *    "My favorite colors are: <br>"
     * 2. Create a foreach loop, 
     *    a. In the criteria send each item in the array 
     *       to the variable $value
     *    b. In the code block to be run, send the contents 
     *       of the $value variable to the screen
     *    c. Make sure there is a line break
     *******************************************************/
    echo 'My favorite colors are: <br>';
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
</body>

</html>