<?php
// Connect to the database
$hostname = "mysql.gwilki01.wdd1314.bbkweb.org";
$username = "gwilki01";
$password = "Edahze45imei";
$database = "gwilki01";
 
 // Connect to Database
$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");
?>