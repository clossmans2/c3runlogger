<?php
$username = ""; // Put Username for MySQL db here
$password = ""; // Enter your password
$hostname = ""; // Enter the host name for the MySQL db you are trying to connect to.

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
