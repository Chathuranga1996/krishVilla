
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="<?php echo base_url()?>themes/contactUs_css/stylemail.css">
	

	
</head>
<body>

				

	<div class="container">
		
		<h1>Contact Us</h1>
		
		<form action="<?php echo base_url()?>index.php/Welcome/contactUs" method="post">
			<p>
				<label for="fullname">Your Name *:</label>
				<input type="text" name="fullname" id="fullname" required>
			</p>

			<p>
				<label for="email">Your Email *:</label>
				<input type="text" name="email" id="fullname" required>
			</p>

			
			<p>
				<label for="subject">Subject *:</label>
				<input type="text" name="subject" id="subject" required>
			</p>

			

			<p>
				<label for="message">Message *: </label>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</p>
			<p>
				<button type="submit" name="contactUsBtn">Send Message</button>
			</p>


		</form>

		
		<button onclick="location.href='<?php echo base_url()?>index.php/Welcome'" type="button">
		Go back</button>


	</div>
</body>
</html>