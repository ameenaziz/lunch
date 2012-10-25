<?php include("header.php"); ?>
<body>
    <div class="main process">
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
					
					echo "<h3><span>Event name </span>"  .$row['event_name'] .  "</h3><br>";
					
					
					do {
						echo "<h4>"  .$row['res_name'] .  "</h4>";
						
						
					} while($row = mysql_fetch_array($eventchoices));
					
				?>
                
                
                 	
                 <br /><br />

               		
                <a href="index.php">Go back</a> | <a href="send.php">Send invite</a>
    </div>
</body>
</html>
