<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitivity in PHP</title>
</head>

<body>
    <?php
    //Function case sensitivity.
    echo "Hello World!<br>"; //Most common for echo statement
    echo "Hello World!<br>"; //Not as common but still works

    //Variable case sensitivity.
    $newVar = 'Hello World from $newVar!';
    $newvar = 'Hello World from $newvar!';
    $NewVar = 'Hello World from $NewVar!';

    echo $newVar; //Change the case to see which line is sent to the screen
    ?>
</body>

</html>