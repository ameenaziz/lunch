<?php include("header.php"); ?>

<body>
    <div class="main home">
        <div data-role="header" data-theme="a" data-position="fixed">
            <h1>Sep 1 setup choices</h1>
         </div>
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
                <input type="submit" name="formSubmit" value="Create lunch event" />
            </div>
   
        </form>
    </div>
    <?php include("footer.php"); ?>
    


</body
</html>
