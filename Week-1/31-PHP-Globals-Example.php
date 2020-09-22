<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Globals in PHP Example</title>
</head>
<body>
    <h2>$_SERVER Global</h2>
    <?php
        echo 'Host Name: ' . $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo 'Site Referrer (Where you came from): ' . $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo 'User Agent (Browser): ' . $_SERVER['HTTP_USER_AGENT'];
    ?>

    <h2>$GLOBALS Global</h2>
    <?php 
    $x = 75; 
    $y = 25;
    function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    }
    addition(); 
    echo "$x + $y = $z"; 
    ?>
    
    
    <h2>$_REQUEST Global</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>

    <h2>$_GET Global</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $name = $_GET['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

    <h2>$_POST Global</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
</body>
</html>