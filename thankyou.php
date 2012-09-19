<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | thankyou (Step 4)</title>
<link rel="stylesheet" href="styles/lunch.css" type="text/css" />

</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
        <h2>Thank you for voting</h2>
               
			<?php
            
            include ('connect.php');
            
            $selected_radio = $_POST['locations'];
            $event_name = $_POST['eventName'];
            
           // echo $event_name;
           // echo "<br><br>";
           /// echo $selected_radio;
            
            mysql_query("insert into votes (res_id, event_id) values ($selected_radio, $event_name)");
		   
            
			?>
                
    </div>
</body>
</html>
