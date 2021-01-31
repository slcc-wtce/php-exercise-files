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
        $sql = "INSERT INTO jd_sp21_Contacts (name, email, contactBack, comments)
                VALUES ('John Doe', 'jd@email.com', 'Yes', 'I look forward to hearing from you.');";

        //Execute SQL statement on server
        $conn->exec($sql);

        //Get the id of the last row added
        $last_id = $conn->lastInsertId();

        //Send success message to screen
        echo "A new record was added successfully. The last inserted ID is: " . $last_id;


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "An error occurred: <br>" . $sql . "<br>" . $error->getMessage();
    }
?>