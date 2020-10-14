<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using the PHP Echo Statement Solution</title>
</head>

<body>
    <?php
        /*****************************************************
         * 1. Create a date variable that will hold today's 
         *    date (= date("M. d, Y"))
         * 2. Create several echo statements that builds a 
         *    basic webpage and show the value of the date 
         *    variable
         *****************************************************/
    
        $date = date("M. d, Y");
        echo "<h2>Built with PHP!</h2>";
        echo "<p>Building webpages with PHP is fun.</p>";
        echo "Today is " . $date . ".";

    ?>
</body>

</html>
