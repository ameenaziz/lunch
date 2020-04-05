<?php


$con = mysql_connect("localhost", "ameen", "vmax");
if (!$con) {
  die('Could not connect: ' . mysql_error());
} else { }
mysql_select_db("lunch", $con);
