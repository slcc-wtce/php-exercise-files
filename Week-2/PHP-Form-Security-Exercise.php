<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>PHP Securing Form</title>
	</head>
	<body>
		<?php
        function cleanInput ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
		<!-- Contact Form -->
		<h2>Contact Me</h2>
		<form>
			<label for="name">Full Name:</label>
			<input type="text" id="name" placeholder="Full Name" name="name" />
			<br />
			<br />
			<label for="email">Email address:</label>
			<input type="email" id="email" placeholder="name@example.com" name="email" />
			<br />
			<br />
			<label>Can we contact you back?</label>
			<input type="radio" name="contact-back" id="yes" value="Yes" checked />
			<label for="yes">Yes</label>
			<input type="radio" name="contact-back" id="no" value="No" />
			<label for="no">No</label>
			<br />
			<br />
			<label for="comments">Comments:</label>
			<textarea id="comments" rows="3" name="comments"></textarea>
			<br />
			<br />
			<button type="submit" role="button">Submit</button>
		</form>
	</body>
</html>
