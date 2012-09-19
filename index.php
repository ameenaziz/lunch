<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | Start (step 1)</title>
<link rel="stylesheet" href="styles/lunch.css" type="text/css" />

</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
        <h2>Create some choices</h2>
        
		<?php
			include ('connect.php');
			$result = mysql_query("SELECT * FROM restaurants") or die(mysql_error());  
        ?>
        
        <form action="process.php" method="post">
			<?php 
       	 
				echo "Enter an event name"; 
				
				echo "<input type=\"text\" value=\"	\" name=\"eventName\" />";  
				echo "<br><br>"; 
    		   
                while ($row = mysql_fetch_array($result))
                {
                    echo "<input type=\"checkbox\" name=\"opt[]\"  value=\"{$row['res_id']}\"/> " . $row['res_name'];
                    echo "<br>";
                }
            ?>
            <br />
            <input type="submit" name="formSubmit" value="send" />
        </form>
		       

    </div>
</body>
</html>
