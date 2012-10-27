<?php
		session_start();
		$event_id = $_SESSION['event_id'];
?>
<?php include("header.php"); ?>
<body>
<div data-role="page"> 
	<div data-role="header" data-theme="a" data-position="fixed"><h1>Step 3 send email</h1></div> 
	<div data-role="content">
		<?php

		//getting that event_id from  the process.php page

		
		$from_name = "Go 4 Lunch Host";
		$from_email = "go4lunch@ameenaziz.com";
		$subject = "Vote for the lunch venu";
		$email_address_list = array("ameenaziz@gmail.com");

		//godaddy does not allow a "From:" in the header
		$headers = "$from_name <$from_email>\r\n".
		               "MIME-Version: 1.0" . "\r\n" .
		               "Content-type: text/html; charset=UTF-8" . "\r\n";

		
		foreach ($email_address_list as $email_address) {
			
			// Url generation needs to dynamic for local and production
			$url = "http://ameenaziz.com/lunch/main.php?email=$email_address&event_id=$event_id";		

			// Message generation
			$message = "Vote using this link:";
			
			// Send email
			echo "$message";

			echo "<a href=\"$url\">$url</a>";

			//mail($email_address, $subject, $message, $headers);
		}
		echo '<br><br>';

		echo 'email sent';
		?>         	

	</div> 
	<div data-role="footer"><?php include("footer.php"); ?></div> 
</div> 	


</body>
</html>
