<?php include("header.php"); ?>
<body>
<div data-role="page"> 
	<div data-role="header" data-theme="a" data-position="fixed"><h1>Step 4 vote on a venue</h1></div> 
	<div data-role="content">
				 <?php
				   include ('connect.php');
					
					//getting that event_id from  the url 
 					if (isset($_GET['event_id'])) {
					$event_id = $_GET['event_id'];
					}
		

					//Get the last inserted data based on the event_id 
					//query here has the restaurants id added.
					$eventchoices = mysql_query(
					
					"
							SELECT event.event_name, restaurants.res_name, restaurants.res_id, event.event_id
							FROM event_choices
							INNER JOIN restaurants ON event_choices.res_id = restaurants.res_id
							INNER JOIN event ON event_choices.event_id = event.event_id 
							
							WHERE event.event_id = $event_id;
				
					"
					);
					
					$row = mysql_fetch_array($eventchoices);
					echo "<br><br>";
					echo $row['event_name'];
					echo "<br><br>";
					?>
                    
                    <form method="post" action="thankyou.php">
                    
                    <input type="hidden" value="<?php echo $row['event_id'] ?>" name="event_id"  />
					<input type="hidden" value="<?php echo $_GET['email'] ?>" name="email"  />

                    <?php
					   
						do {
							echo ("<input type=\"radio\" id=\"{$row['res_id']}\" name=\"locations\"  value=\" " . $row['res_id'] . " \" ></input>");
							echo "<label for=\"{$row['res_id']}\">" . $row['res_name'] . "</label>";
							echo "<br>";
							
						} while($row = mysql_fetch_array($eventchoices));
					?>
                    <input type="submit" data-transition="slidefade" value="Vote"> 
                
              	   </form>
	</div> 
	<div data-role="footer"><?php include("footer.php"); ?></div> 
</div> 	
</body>
</html>
