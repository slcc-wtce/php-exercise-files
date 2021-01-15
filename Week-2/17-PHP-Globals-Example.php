<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Globals in PHP Example</title>
</head>
<body>
    <h2>$_SERVER Global</h2>
    <p>Super global variable which holds information about headers, paths, and script locations. </p>
    <ul>
    <?php
        echo '<li><b>Host Name:</b> ' . $_SERVER['HTTP_HOST'] . '</li>';
        echo '<li><b>Site Referrer (Where you came from):</b> ' . $_SERVER['HTTP_REFERER']. '</li>';
        echo '<li><b>User Agent (Browser):</b> ' . $_SERVER['HTTP_USER_AGENT'] . '</li>';
    ?>
    </ul>

    <h2>$GLOBALS Global</h2>
    <p>Used to access global variables from anywhere in the PHP script (also from within function or methods). PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>
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
    <p>Super global variable to collect data after submitting an HTML form.</p>
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
    <p>Super global variable also used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL.</p>
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
    <p>Super global variable widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.</p>
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