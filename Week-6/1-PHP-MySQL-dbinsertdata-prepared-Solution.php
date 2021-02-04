<?php
    $hostname = "YourHostName";
    $username = "YourUserName";
    $password = "YourPassword";
    $databasename = "YourDatabaseName";

    //Variables for Development of Prepared Statement
    $name = "John Doe";
    $email = "jd@email.com";
    $contactBack = "Yes";
    $comments = "I look forward to hearing from you.";

    try {
        //Create new PDO Object with connection parameters
        $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
        
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        //Variable containing SQL command with placeholders
        $sql = "INSERT INTO YOURTABLENAME (name, email, contactBack, comments)
                VALUES (:name, :email, :contactBack, :comments);";

        //Create prepared statement
        $stmt = $conn->prepare($sql);

        //Bind parameters to variables
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contactBack', $contactBack, PDO::PARAM_STR);
        $stmt->bindParam(':comments', $comments, PDO::PARAM_STR);

        //Execute SQL statement on server
        $stmt->execute();

        //Get the id of the last row added
        $last_id = $conn->lastInsertId();

        //Send success message to screen
        echo "A new record was added successfully. The last inserted ID is: " . $last_id;


    } catch (PDOException $error) {

        //Return error code if one is created
        echo "An error occurred: <br>" . $sql . "<br>" . $error->getMessage();
    }

    $conn = null;
?>