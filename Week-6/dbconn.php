<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";
    //The below code is only to test connection. It can be removed or commented out when connection is verified to work.
    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Send success message to screen
        echo "<script>console.log('Database Connection Successful!')</script>";


    } catch (PDOException $error) {

        //Return error code if one is created
        echo '<script>console.log("Connection Failed: ' . $error->getMessage() . ' ")</script>';
    }

    $conn = null;
?>