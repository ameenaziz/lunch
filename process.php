<?php include("header.php"); ?>
<body>
    <div class="main process">
         <div data-role="header" data-theme="a" data-position="fixed">
            <h1>Step 2 Configure people and places</h1>
         </div>   	
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
               		
               <a href="send.php" data-role="button" data-icon="forward">Send email invites to your friends</a>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
