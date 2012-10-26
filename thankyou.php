<?php include("header.php"); ?>
<body>
    <div class="main">
      <div data-role="header" data-theme="a" data-position="fixed">
            <h1>Thank you for voting</h1>
         </div>
                     
			<?php
            
            include ('connect.php');
            
            $selected_radio = $_POST['locations'];
            $event_id = $_POST['event_id'];
			$email = $_POST['email'];

            
           // echo $event_name;
           // echo "<br><br>";
           /// echo $selected_radio;
            echo "$selected_radio, $event_id, '$email<br><br>";
            mysql_query("insert into votes (res_id, event_id, email_address) values ($selected_radio, $event_id, '$email'	)");
		   
            
			?>

    </div>
    <?php include("footer.php"); ?>

</body>
</html>
