<?php


$con = mysql_connect("","golunch","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else {
	
}
mysql_select_db("golunch", $con);
?> 