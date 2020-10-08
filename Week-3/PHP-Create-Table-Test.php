<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a table using PHP</title>
</head>
<body>
    <?php
        $servername = "php-mysql-exercisedb.slccwebdev.com";
        $username = "phpmysqlexercise";
        $password = "mysqlexercise";
        $dbname = "hp_mysql_exercisedb";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to create table
            $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP)";

            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Table MyGuests created successfully";
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    ?>
</body>
</html>