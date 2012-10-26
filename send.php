
<?php include("header.php"); ?>
<body>
    <div class="main process">
        <div data-role="header" data-theme="a" data-position="fixed">
            <h1>Step 3 send email notifications</h1>
         </div>         	
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
				<?php include("footer.php"); ?>
    </div>
</body>
</html>
