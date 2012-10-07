<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | main (Step 3)</title>
<link rel="stylesheet" href="styles/lunch.css" type="text/css" />

</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
                       		
                <?php
				   include ('connect.php');
					
					//Get the last inserted data based on the event_id 
					//query here has the restaurants id added.
					$eventchoices = mysql_query(
					
					"
							SELECT event.event_name, restaurants.res_name, restaurants.res_id, event.event_id
							FROM event_choices
							INNER JOIN restaurants ON event_choices.res_id = restaurants.res_id
							INNER JOIN event ON event_choices.event_id = event.event_id 
							WHERE event.event_id = (SELECT MAX(event_id) FROM event)
				
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
							echo ("<input type=\"radio\" name=\"locations\"  value=\" " . $row['res_id'] . " \" >". $row['res_name'] . "</input>");
							echo "<br>";
							
						} while($row = mysql_fetch_array($eventchoices));
					?>
                    <input type="submit" value="Vote"> 
                
              	   </form>
                
                 	
                 <br /><br />

               		
                
    </div>
</body>
</html>
