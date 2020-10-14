<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants Solution</title>
</head>

<body>
    <?php
        /******************************************************
         * Create a constant called GREETING and assign it a 
         * basic HTML paragraph
        ******************************************************/
        define("GREETING", "<p>Welcome to SLCC!</p>");

        /******************************************************
         * Create an echo statement to send the content of 
         * the GREETING constant to the screen
        ******************************************************/
        echo GREETING;

        /******************************************************
         * Create a constant called tagLine 
         * and assign it a basic HTML paragraph
         * Set it to work regardless of letter case.
        ******************************************************/
        define("tagLine", "<p>Working with PHP is rewarding!</p>", true);

        /******************************************************
         * Create an echo statement to send the content
         * of the tagLine constant to the screen
        ******************************************************/
        echo tagLine;

    ?>
</body>

</html>