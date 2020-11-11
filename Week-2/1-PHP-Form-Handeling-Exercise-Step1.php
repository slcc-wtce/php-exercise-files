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
	
	<!-- Website Title -->
	<title>Create a PHP Form Handling Step 1</title>
	
</head>
<body>
	<!--
		EXERCISE: Create a PHP element. In the element do the following
			STEP 2. Set empty variables for each form field
			STEP 3. Create an IF statement that sets the field values to variables when the form is submitted
	-->
	
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
					<!-- EXERCISE STEP 1: Set action to return to this page when submitted using PHP_SELF -->
					<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
						
						<!-- Name Field -->
						<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
						</div>
						
						<!-- Email Field -->
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
						</div>
						
						<!-- Radio Button Field -->
						<div class="form-group">
							<label class="control-label">Can we contact you back?</label>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="yes" value="Yes" checked />
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="contact-back" id="no" value="No" />
								<label class="form-check-label" for="no">No</label>
							</div>
						</div>
						
						<!-- Comments Field -->
						<div class="form-group">
							<label for="comments">Comments:</label>
							<textarea id="comments" class="form-control" rows="3" name="comments"></textarea>
						</div>
						
						<!-- Submit Button -->
						<button class="btn btn-primary mb-2" type="submit" role="button" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- 
		EXERCISE STEP 5: Create the first line of a PHP IF statement that
		shows the section that follows when the form submitted 
	-->
	
	<!-- 
		EXERCISE STEP 4: Create a basic section to display the form entries in an unordered list with a colored background 
	-->
	
	<!-- EXERCISE STEP 5: Create another PHP script element to close the PHP IF statement-->
	
</body>
</html>