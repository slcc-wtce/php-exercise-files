<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP trim Function Example</title>
</head>

<body>

    <?php
    //Set a Variable using PHP
    $x = '      This is some basic text.     ';
    ?>

    <!--Send the contents of the variable to the screen
    using a PHP element containing an echo statement
    inline of the HTML paragraph element.-->
    <p>Without Trim: <?php echo ($x); ?> (View the page source to see the effect.)</p>
    <p>With Trim: <?php echo trim($x); ?> (View the page source to see the effect.)</p>
</body>

</html>