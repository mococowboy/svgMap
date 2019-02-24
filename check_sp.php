<?php
header('Content-Type: application/json');
$year = $_GET['year'];
$month = $_GET['month'];
if (! preg_match("/^([0-9][0-9][0-9][0-9])$/", $year)) {
echo 'Year is malformed.';
exit();
}
if (! preg_match("/^(M[0|1][0-9])$/", $month)) {
echo 'Month is malformed.';
exit();
}
require 'connect.php';
$query = "call unem_month('".$year."', '".$month."');";
$result = mysql_query($query);
if (!$result) {
	echo 'Could not run query: ' . mysql_error();
	exit;
}
while( $row = mysql_fetch_assoc($result) ) {
	settype($row['rate'],"float");
	$arr[$row['state']] = $row['rate'];
}
echo json_encode($arr);
mysql_close($link);
?>
