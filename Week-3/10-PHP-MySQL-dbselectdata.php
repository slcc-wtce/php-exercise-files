<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Variable containing SQL command
        $sql = "SELECT * FROM jd_sp21_Contacts;";        

        //Execute SQL statement on server
        $return = $conn->query($sql);

        //Print returned data to the screen
        echo "The data currently in the database is: <br>\n";
        while ($row = $return->fetch()) {
            echo $row['contactID'] . 
                 $row['name'] .  
                 $row['email'] .  
                 $row['contactBack'] . 
                 $row['comments']  .  
                 $row['dateSent'] . "<br>\n" ;
        }


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
    }

    $conn = null;
?>