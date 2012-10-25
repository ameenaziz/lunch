<?php include("header.php"); ?>

<body>
    <div class="main home">
    	<h1>Go4lunch | (step 1)</h1>
        <h2>Create some choices</h2>
    	<?php
			include ('connect.php');
			$result = mysql_query("SELECT * FROM restaurants") or die(mysql_error());  
        ?>

        <form action="process.php" method="post">
            <div data-role="fieldcontain">
			    <fieldset data-role="controlgroup">
                   <?php 
        				echo "<input type=\"text\" placeholder='Enter an event name'  name=\"eventName\" />";  
        				echo "<br><br>";
                        while ($row = mysql_fetch_array($result))
                        {
                            echo "<input type=\"checkbox\" id=\"{$row['res_id']}\" name=\"opt[]\"value=\"{$row['res_id']}\"/> ";
                            echo "<label for=\"{$row['res_id']}\">" . $row['res_name'] . "</label>";
                        }
                       
                    ?>
                </fieldset>
                <input type="submit" name="formSubmit" value="send" />
            </div>

           
        </form>
		       

    </div>
</body>
</html>
