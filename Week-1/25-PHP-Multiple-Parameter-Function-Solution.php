<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a Function with a Single Parameter in PHP Solution</title>
</head>

<body>
    <?php
    /*******************************************************
     * 1. Create a function named newGreeting
     * 2. Within the parentheses, add the variable $name 
     *    and $day as the parameters to pass into the 
     *    code block
     * 2. In the code block, create an echo statement 
     *    that will send the following to the screen:
     *    "<h1>Welcome $name!</h1><p>It's a beautiful 
     *    $day!</p>"
     *******************************************************/
    function newGreeting($name, $day)
    {
        echo "<h1>Welcome $name!</h1><p>It's a beautiful $day!</p>";
    }

    /*******************************************************
     * 1. Call the function using its name followed by a 
     *    opening and closing parentheses
     * 2. In the parentheses:
     *    a. Add a name as a string for the first parameter 
     *       followed by a comma
     *    b. For the second parameter, add the date function 
     *       that will get the name of the day: date("l")'
     *******************************************************/
    newGreeting("John", date("l"));

    ?>
</body>

</html>