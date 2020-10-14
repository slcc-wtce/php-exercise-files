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
    Name: <input type="text" name="reqName">
    <input type="submit">
    </form>
    <?php
        //Request Method is POST and the reqName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['reqName'])) {
            // collect value of input field
            $rname = $_REQUEST['reqName'];
            if (empty($rname)) {
                echo "Name is empty";
            } else {
                echo $rname;
            }
        }
    ?>

    <h2>$_GET Global</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="getName">
    <input type="submit">
    </form>
    <?php
        //Request Method is GET and the getName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['getName'])) {
            // collect value of input field
            $gname = $_GET['getName'];
            if (empty($gname)) {
                echo "Name is empty";
            } else {
                echo $gname;
            }
        }
    ?>

    <h2>$_POST Global</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="postName">
    <input type="submit">
    </form>
    <?php
        //Request Method is POST and the postName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['postName'])) {
            // collect value of input field
            $pname = $_POST['postName'];
            if (empty($pname)) {
                echo "Name is empty";
            } else {
                echo $pname;
            }
        }
    ?>
</body>
</html>