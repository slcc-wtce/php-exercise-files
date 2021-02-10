<?php

    /**
     * If no form errors occur, 
     * send the data to the database
     */
    if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))){
        
        $hostname = "php-mysql-exercisedb.slccwebdev.com";
        $username = "phpmysqlexercise";
        $password = "mysqlexercise";
        $databasename = "php_mysql_exercisedb";

        try {
            //Create new PDO Object with connection parameters
            $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);

            //Set PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

            $sql = "INSERT INTO jd_sp21_Contacts (name, email, contactBack, comments) VALUES (:name, :email, :contactBack, :comment);";

            //Variable containing SQL command
            $stmt = $conn->prepare($sql);

            //Bind parameters
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':contactBack', $contBack, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);

            //Execute SQL statement on server
            $stmt->execute();

            //Build success message to display
            $_SESSION['message'] = '<p class="font-weight-bold">Thank you for your submission!</p><p class="font-weight-light" >Your request has been sent.</p>';

            $_SESSION['complete'] = true;

            //Redirect
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit;

        } catch (PDOException $error) {

            //Build error message to display
            $_SESSION['message'] =  "<p>We apologize, the form was not submitted successfully. Please try again later.</p>";
            // Uncomment code below to troubleshoot issues
            // echo '<script>console.log("DB Error: ' . addslashes($error->getMessage()) . '")</script>';
            $_SESSION['complete'] = true;
            //Redirect
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit;
        }

        $conn = null;
    }
?>