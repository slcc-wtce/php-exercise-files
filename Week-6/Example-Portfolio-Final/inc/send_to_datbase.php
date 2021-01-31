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
            $msg = '<h2 class="font-weight-bold" style="font-size: 4rem;">Thank you for your submission!</h2><p class="font-weight-light" style="font-size: 2.5rem;">Your request has been sent.</p>';

        } catch (PDOException $error) {

            //Build error message to display
            $msg =  "<h3>We apologize, the form was not submitted successfully. Please try again later.</h3>";
            
            // Uncomment code below to troubleshoot issues
            // echo '<script>console.log("DB Error: ' . addslashes($error->getMessage()) . '")</script>';

        }?>
        
        <!-- Hide form and show message when complete -->
        <section id="thank-you" style="background-color: lightsteelblue;">
            <div class="container py-5" >
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <?php echo $msg; ?>	
                    </div>									
                </div>
            </div>
        </section>
        <script>
            document.getElementById("form").style.display = "none";        
        </script>

<?php } ?>