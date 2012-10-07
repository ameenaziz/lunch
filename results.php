<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | results</title>
<link rel="stylesheet" href="styles/lunch.css" type="text/css" />

</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
        <h2>The votes are in!</h2>
               
			<?php
            
            	include ('connect.php');
				$eventchoices = mysql_query("
						
						SELECT event.event_name, restaurants.res_name, count(*)  AS Count
						FROM votes
						INNER JOIN restaurants ON votes.res_id = restaurants.res_id
						INNER JOIN event ON votes.event_id = event.event_id

						WHERE event.event_id = $_GET[event_id]
						group by votes.res_id
						order by Count desc
						");
				
				$row = mysql_fetch_array($eventchoices);
				
				
				
					
					echo $row['event_name'];
					echo "<br><br>";
					
					do {
						echo $row['res_name'];
						echo "<br>";
						echo $row['Count'];
						echo "<br>";
					} while($row = mysql_fetch_array($eventchoices));
			
			?>
                
    </div>
</body>
</html>
