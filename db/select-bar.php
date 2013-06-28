$host = '' //Enter db host
$username = '' //Enter db username
$password = '' //Enter db pass
$db = '' //Enter db name
$table = '' //Enter table name


<?php
// Connecting, selecting database
$link = mysql_connect($host, $username, $password)
    or die('Could not connect: ' . mysql_error());
mysql_select_db($db) or die('Could not select database');

// Performing SQL query
$query = 'SELECT DISTINCT col_1 as Username FROM "$table"';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

$runners = array();
while($runner = mysql_fetch_assoc($result)) {
    $runners[] = array(
    'Username' => $runner['Username'],
   );
}
echo json_encode($runners);

// Free resultset
mysql_free_result($result);

// Closing connection2
mysql_close($link);
?>
