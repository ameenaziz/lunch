<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | process (step 2)</title>
<link rel="stylesheet" href="styles/lunch.css" type="text/css" />

</head>

<body>
    <div class="main">
    	<h1>Go4lunch | (step 2)</h1>
        <h2>Configurations people and places</h2>
            	
                <?php
									 
				   include ('connect.php');

    				mysql_query("INSERT INTO event (event_name) VALUES ('$_POST[eventName]')");
					
					$event_id = mysql_insert_id();

     				foreach ($_POST['opt'] as $res_id) { 
						
						mysql_query("INSERT INTO event_choices (event_id, res_id) VALUES ($event_id, $res_id)");	
					 
					}	
					
					//Get the last inserted data based on the event_id 
					$eventchoices = mysql_query(
					
					"
							SELECT event.event_name, restaurants.res_name 
							FROM event_choices
							INNER JOIN restaurants ON event_choices.res_id = restaurants.res_id
							INNER JOIN event ON event_choices.event_id = event.event_id 
							WHERE event.event_id = (SELECT MAX(event_id) FROM event)
				
					"
					);
					
					$row = mysql_fetch_array($eventchoices);
					
					echo $row['event_name'];
					echo "<br><br>";
					
					do {
						echo $row['res_name'];
						echo "<br>";
					} while($row = mysql_fetch_array($eventchoices));
					
				?>
                
                
                 	
                 <br /><br />

               		
                <a href="index.php">Go back</a> | <a href="send.php">Send invite</a>
    </div>
</body>
</html>
