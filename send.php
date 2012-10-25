
<?php include("header.php"); ?>
<body>
    <div class="main process">
    	<h1>Go4lunch | (step 3)</h1>
        <h2>Send emails to people</h2>
            	
				<?php

				$from_name = "Go 4 Lunch Host";
				$from_email = "go4lunch@ameenaziz.com";
				$subject = "Vote for the lunch venu";
				$email_address_list = array("ameenaziz@gmail.com");

				//godaddy does not allow a "From:" in the header
				$headers = "$from_name <$from_email>\r\n".
				               "MIME-Version: 1.0" . "\r\n" .
				               "Content-type: text/html; charset=UTF-8" . "\r\n";

				
				foreach ($email_address_list as $email_address) {
					
					// Url generation
					$url = "http://ameenaziz.com/lunch/main.php?email=" . $email_address;
					
					// Message generation
					$message = "Vote using this link: $url";
					
					// Send email
					echo "$message\n\n";
					//mail($email_address, $subject, $message, $headers);
				}
				echo '<br><br>';

				echo 'email sent';

				echo '<br><br>'
				?>

               		
                <a href="index.php">Go back to index page</a> | <a href="main.php">Main page</a>
    </div>
</body>
</html>
