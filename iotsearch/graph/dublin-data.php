<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","cfavouri_mirror","mirror948474","cfavouri_mirrordb");
 
 	$date= date("Y-m-d");

$sqlQuery = "SELECT grid,time,temperature FROM te_graph  where date1='$date' and location='Dublin' ORDER BY grid";

//echo $sqlQuery1;

//$result1 = mysqli_query($conn,$sqlQuery1);


$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
	}

echo json_encode($data);



mysqli_close($conn);

?>