<?php
    $hostname = "php-mysql-exercisedb.slccwebdev.com";
    $username = "phpmysqlexercise";
    $password = "mysqlexercise";
    $databasename = "php_mysql_exercisedb";
    // $options = [
    //     PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC
    // ];

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        //$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        
        //Variable containing SQL command
        $sql = "SELECT * FROM jd_sp21_Contacts;";

        

        //Execute SQL statement on server
        $return = $conn->query($sql);
        // $results = $return->fetchAll();

        // print "<pre>";
        // print_r ($results);
        // print "</pre>";
        // $count = $conn->query("SELECT COUNT(*) FROM jd_sp21_Contacts;")->fetchColumn();

        //Send success message to screen
        // echo "There are $count records in the table. <br>";
        echo "The data currently in the database is: <br>\n";
        while ($row = $return->fetch()) {
            echo $row['contactID'] . "\t" .
                $row['name'] . "\t" . 
                $row['email'] . "\t" . 
                $row['contactBack'] . "\t" .
                $row['comments']  . "\t" . 
                $row['dateSent'] . "<br>\n" ;
        }


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "Execution error: <br>" . $sql . "<br>" . $error->getMessage();
    }

    $conn = null;
?>