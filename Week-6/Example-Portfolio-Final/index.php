<?php
        $mySkills = ["Woodworking", "HTML", "CSS", "PHP", "JavaScript"];

        function newList($array) {
            echo '<ul class="d-inline-block font-weight-light text-left">';
            foreach ($array as $value) {
                echo '<li>' . $value . '</li>';
            }
            echo '</ul>';
		}
	include ('./inc/clean_inputs.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

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
			<div id="form" class="container py-5">
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
						<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "#contact"); ?> method="POST" novalidate>
							
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
		</section>
		
		<!-- Database Processing Script -->
		<?php include ('./inc/send_to_datbase.php'); ?>
		

		<!-- Footer -->
		<footer class="py-4 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
			</div>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
