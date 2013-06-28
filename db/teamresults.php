<?php
$username = '' //Enter db username here
$password = '' //Enter db pass here
$host = '' //Enter db host here
$db =  '' //Enter db here
$table = '' //Enter table name here

// Connecting, selecting database
$link = mysql_connect($host, $username, $password)
    or die('Could not connect: ' . mysql_error());
mysql_select_db($db) or die('Could not select database');

// Performing SQL query
$query = 'SELECT submission_id as runid, col_1 as Username, col_2 as RunDate, col_3 as Starttime, col_4 as Duration, col_5 as Distance, col_6 as Comments FROM "$table"';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

$runlogs = array();
while($row = mysql_fetch_assoc($result)) {
    $runlogs[] = array(
    'runid' => $row['runid'],
    'name' => $row['Username'],
    'runDate' => $row['RunDate'],
    'startTime' => $row['Starttime'],
    'duration' => $row['Duration'],
    'distance' => $row['Distance'],
    'comments' => $row['Comments']
   );
}
echo json_encode($runlogs);

// Free resultset
mysql_free_result($result);

// Closing connection2
mysql_close($link);
?>
