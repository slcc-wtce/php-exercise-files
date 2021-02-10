<?php
	//Create Session
	if (!isset($_SESSION)) {
		session_start();
	}

    //Create variables to hold form data and errors
    $nameErr = $emailErr = $contBackErr = "";
    $name = $email = $contBack = $comment = "";
    $formErr = false;

    //Validate form when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty(trim($_POST["name"]))) {
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

    /**
     * If no form errors occur, 
     * send the data to the database
     */
    if (($_SERVER["REQUEST_METHOD"] == "POST") && (!($formErr))){
		//Create Connection Variables
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
            return;

        } catch (PDOException $error) {

            //Build error message to display
            $_SESSION['message'] =  "<p>We apologize, the form was not submitted successfully. Please try again later.</p>";
            // Uncomment code below to troubleshoot issues
            // echo '<script>console.log("DB Error: ' . addslashes($error->getMessage()) . '")</script>';
            $_SESSION['complete'] = true;
            //Redirect
            header("Location: " . $_SERVER['REQUEST_URI']);
            return;
        }

        $conn = null;
    }

    //My Skills List
    $mySkills = ["Woodworking", "HTML", "CSS", "PHP", "JavaScript"];

    function newList($array) {
        echo '<ul class="d-inline-block font-weight-light text-left">';
        foreach ($array as $value) {
            echo '<li>' . $value . '</li>';
        }
        echo '</ul>';
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<!-- Custom CSS Styles -->
		<link rel="stylesheet" href="style.css" />

		<title>My Site</title>
	</head>
	<body>
		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top">
			<a href="#" class="navbar-brand">
				My Site
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navContent">
				<ul class="navbar-nav">
					<li class="navbar-item"><a class="nav-link" href="#about">About</a></li>
					<li class="navbar-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
					<li class="navbar-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>

		<!-- Header -->
		<header class="mainHeader">
			<div class="container-fluid h-100">
				<div class="row align-items-center justify-content-center text-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.2);">
					<div class="col-lg-8">
						<h1 class="display-1 font-weight-bold">
							Site
							<span class="font-weight-light">Name</span>
						</h1>

						<hr class="my-4 bg-white" />

						<p class="font-weight-light mx-5">
							This can be the site slogan, or a brief description of the site. This can also be a call to action used to grab the attention of the visitors and get them to click on the link below.
						</p>
						<a class="btn btn-primary btn-lg mt-3" role="button" href="#about">Find Out More</a>
					</div>
				</div>
			</div>
		</header>

		<!-- About -->
		<section id="about">
			<div class="container">
				<div class="row align-items-center justify-content-center text-center py-5">
					<!-- Headshot Image -->
					<div class="col-6 col-md-4">
						<img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce" alt="My headshot" class="img-fluid" />
					</div>
					<!-- About Me Summary -->
					<div class="col-md-8 my-3">
						<h2 class="font-weight-bold">My Name</h2>

						<hr class="my-4" />

						<p class="font-weight-light mx-5">
							This could be an executive summary. This would highlight the type of person you are in three to five sentences.
						</p>
						<!-- My Skills List-->
						<p>
                            <span  class="font-weight-bold" style="font-size: 1.1em;">My skills include:</span> 
                            <?php newList($mySkills); ?>
                        </p>
						<a class="btn btn-primary btn-lg mt-3" role="button" href="#contact">Contact Me</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio -->
		<section id="portfolio" class="bg-primary">
			<div class="container-fluid py-5">
				<!-- Portfolio Section Title -->
				<div class="row text-white text-center">
					<div class="col">
						<h2 class="display-4 font-weight-bold">Portfolio</h2>
						<hr class="bg-white mb-5" />
					</div>
				</div>

				<!-- Portfolio Items Row Start -->
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
					<!-- Portfolio Item Start -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="https://images.unsplash.com/photo-1541753866388-0b3c701627d3" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">Work Example 1</h3>
								<hr class="bg-primary" />
								<p class="card-text">
									This is a brief description of this portfolio item. This can describe th work, provide steps taken, or give a summary of responsibilities. The optional link at the bottom could navigate to a page providing more details.
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#about">Read More</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->

					<!-- Portfolio Item -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="https://images.unsplash.com/photo-1516705564083-34e4e9e704e9" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">Work Example 2</h3>
								<hr class="bg-primary" />
								<p class="card-text">
									This is a brief description of this portfolio item. This can describe th work, provide steps taken, or give a summary of responsibilities. The optional link at the bottom could navigate to a page providing more details.
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#about">Read More</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->

					<!-- Portfolio Item -->
					<div class="col mb-4">
						<!-- Card Start -->
						<div class="card bg-light text-center border-light shadow h-100">
							<!-- Optional Card Image -->
							<img src="https://images.unsplash.com/photo-1461344577544-4e5dc9487184" alt="Art" class="card-img-top" style="object-fit: cover; height: 15em;" />
							<!-- Card Body -->
							<div class="card-body">
								<h3 class="card-title">Work Example 3</h3>
								<hr class="bg-primary" />
								<p class="card-text">
									This is a brief description of this portfolio item. This can describe th work, provide steps taken, or give a summary of responsibilities. The optional link at the bottom could navigate to a page providing more details.
								</p>
							</div>
							<!-- Optional Link -->
							<div class="card-footer">
								<a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#about">Read More</a>
							</div>
						</div>
						<!-- Card End -->
					</div>
					<!-- Portfolio Item End -->
				</div>
				<!-- Portfolio Items Row End -->
			</div>
		</section>
		
		<!-- Contact Form Section -->
		<section id="contact">
			<div class="container py-5">
				<!-- Section Title -->
				<div class="row justify-content-center text-center">
					<div class="col-md-6">
						<h2 class="display-4 font-weight-bold">Contact Me</h2>
						<hr />
					</div>
				</div>
				<!-- Contact Form Row -->
				<div class="row justify-content-center">
					<div class="col-6">
					
						<!-- Contact Form Start -->
						<form id="contactForm" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "#contact"); ?> method="POST" novalidate>
							
							<!-- Name Field -->
							<div class="form-group">
								<label for="name">Full Name:</label>
								<span class="text-danger">*<?php echo $nameErr; ?></span>
								<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="<?php if(isset($name)) {echo $name;}?>"" />							
							</div>
							
							<!-- Email Field -->
							<div class="form-group">
								<label for="email">Email address:</label>
								<span class="text-danger">*<?php echo $emailErr; ?></span>
								<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php if(isset($email)) {echo $email;} ?>" />
							</div>
							
							<!-- Radio Button Field -->
							<div class="form-group">
								<label class="control-label">Can we contact you back?</label>
								<span class="text-danger">*<?php echo $contBackErr; ?></span>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes"  <?php if ((isset($contBack)) && ($contBack == "Yes")) {echo "checked";}?>/>
									<label class="form-check-label" for="yes" >Yes</label>
								</div>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" <?php if ((isset($contBack)) && ($contBack == "No")) {echo "checked";}?>/>
									<label class="form-check-label" for="no" >No</label>
								</div>
							</div>
							
							<!-- Comments Field -->
							<div class="form-group">
								<label for="comments">Comments:</label>
								<textarea id="comments" class="form-control" rows="3" name="comments"><?php if (isset($comment)) {echo $comment;} ?></textarea>
							</div>

							<!-- Required Fields Note-->
							<div class="text-danger text-right">* Indicates required fields</div>
							
							<!-- Submit Button -->
							<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
						</form>						
					</div>
				</div>
			</div>

            <!-- Thank you Modal -->
			<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="thankYouModalLabel">Thank you!</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php echo $_SESSION['message']; ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Show thank you message -->
		<?php 
            if ($_SESSION['complete']) {
                echo "<script>$('#thankYouModal').modal('show');</script>";
                session_unset(); 
            };
        ?>		

		<!-- Footer -->
		<footer class="py-4 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
			</div>
		</footer>

	</body>
</html>
