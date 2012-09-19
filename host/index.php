<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | admin</title>
<link rel="stylesheet" href="../styles/lunch.css" type="text/css" />
<script type="text/javascript" src="../js/admin.js"></script>


<?php
?>

</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
        <h2>Create some choices</h2>
        	<form  class="locations" name="rep" method="post" action="index.php">


                <label>Tesco       <input type="checkbox" name="preference" value="Tesco" />       </label>
                <label>GoodgeSt    <input type="checkbox" name="preference" value="Tesco" />       </label>                    
                <label>Sainsburys  <input type="checkbox" name="preference" value="Sainsburys" />  </label>
                <label>Subway      <input type="checkbox" name="preference" value="Subway" />      </label>                    
                <label>Pret        <input type="checkbox" name="preference" value="Pret" />        </label>
                <label>Chinese     <input type="checkbox" name="preference" value="Chinese" />     </label>                    

                <div>
                	<input class="doneBtn" type="button" value="done" />
                </div>
                
                
             </form>   
    </div>
</body>
</html>
