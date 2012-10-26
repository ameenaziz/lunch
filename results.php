<?php include("header.php"); ?>
<body>
<div data-role="page"> 
	<div data-role="header"><h2>The votes are in!</h2></div> 
	<div data-role="content">
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
	<div data-role="footer"><?php include("footer.php"); ?></div> 
</div>     



               

</body>
</html>
