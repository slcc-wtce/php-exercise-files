<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP stripslashes Function Example</title>
</head>

<body>

    <?php
    //Set a Variable using PHP
    $x = '\This is \some \basic \text.';
    ?>

    <!--Send the contents of the variable to the screen
    using a PHP element containing an echo statement
    inline of the HTML paragraph element.-->
    <p>Without stripslashes: <?php echo ($x); ?></p>
    <p>With stripslashes: <?php echo stripslashes($x); ?></p>
</body>

</html>