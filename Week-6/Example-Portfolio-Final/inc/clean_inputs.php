<?php
    //Create variables to hold form data and errors
    $nameErr = $emailErr = $contBackErr = "";
    $name = $email = $contBack = $comment = "";
    $formErr = false;

    //Validate form when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required.";
            $formErr = true;
        } else {
            $name = cleanInput($_POST["name"]);
            //Use REGEX to accept only letters and white spaces
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and standard spaces allowed.";
                $formErr = true;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
            $formErr = true;
        } else {
            $email = cleanInput($_POST["email"]);
            // Check if e-mail address is formatted correctly
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Please enter a valid email address.";
                $formErr = true;
            }
        }

        if (empty($_POST["contact-back"])) {
            $contBackErr = "Please let us know if we can contact you back.";
            $formErr = true;
        } else {
            $contBack = cleanInput($_POST["contact-back"]);
        }

        $comment = cleanInput($_POST["comments"]);
    }

    //Clean and sanitize form inputs
    function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }			
?>	