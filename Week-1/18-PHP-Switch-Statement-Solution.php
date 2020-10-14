<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Switch Statement in PHP Solution</title>
</head>

<body>
    <?php

    /*******************************************************
     * 1. Create a switch statement with 3 cases and a 
     *    default area
     * 2. Set the criteria to a number between 1 and 3
     * 3. Set the first three cases to match either 
     *    1, 2, or 3 respectively
     * 4. In each case create an echo statement that sends 
     *    the string "The number is (the number in the case)"
     * 5. Include a break statement after the echo statement 
     *    in each case
     * 6. In the default section, create an echo statement 
     *    that sends the string "The number is not 1, 2, or 3."
     *******************************************************/
    switch (1) {
        case 1:
            echo "The number is 1.";
            break;
        case 2:
            echo "The number is 2.";
            break;
        case 3:
            echo "The number is 3.";
            break;
        default:
            echo "The number is not 1, 2, or 3.";
    }

    ?>
</body>

</html>