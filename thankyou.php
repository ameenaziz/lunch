<?php   
  session_start();
  $_SESSION['event_id'] = $event_id;
?>
<?php include("header.php"); ?>
<body>
<div data-role="page"> 
  <div data-role="header" data-theme="a" data-position="fixed"><h1>Thanks for voting</h1></div> 
  <div data-role="content">
      <?php
            include ('connect.php');
            
            $selected_radio = $_POST['locations'];
            $event_id = $_POST['event_id'];
            $email = $_POST['email'];

            
           $url = "http://ameenaziz.com/lunch/results.php?event_id=$event_id";

           // echo $event_name;
           // echo "<br><br>";
           /// echo $selected_radio;
            echo "$selected_radio, $event_id, $email<br><br>";
            mysql_query("insert into votes (res_id, event_id, email_address) values ($selected_radio, $event_id, '$email' )");

            echo "See the results : <a href=\"$url\">$url</a>";
       
            
      ?>
  </div> 
  <div data-role="footer"><?php include("footer.php"); ?></div> 
</div>  
</body>
</html>
