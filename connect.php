<?php


$con = mysql_connect("golunch.db.8329506.hostedresource.com","golunch","Nismo_90");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else {
	
}
mysql_select_db("golunch", $con);
?> 