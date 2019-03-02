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

$conn = new mysqli("localhost", "username", "password", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "call unem_month('".$year."', '".$month."');";

$result = $conn -> query($sql);

$data = array();

if ($result -> num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	echo json_encode($data);
}
else {
	echo "0 results";
}
$conn->close();
?>
