<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");

$servername = "localhost";
$database = "thefullm_booths";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");


$json = array();
$mass="";
$col = "";	$val = "";	$c="";

// Check connection
if ($conn->connect_error) {
	// die("Connection failed: " . $conn->connect_error);
	$json['connect_error'] = "Connection failed: " . $conn->connect_error;
}else{


	$obj = array();
	$sql = "SELECT * FROM booths WHERE status=1";
	$query = mysqli_query($conn, $sql);
	while ($instance=mysqli_fetch_assoc($query)) {
		// $instance['eventDateText'] = thaiDate("j F Y H:i", strtotime($instance['eventDate']));
		$obj[] = $instance;
	}


	if (count($obj)){
		$strFileName = "data/booths.json";
		$objFopen = fopen($strFileName, 'w');
		$strText = json_encode($obj);
		fwrite($objFopen, $strText);

		if($objFopen){
			$json['status'] = true;
		}
		else{
			$json['status'] = false;
		}

		fclose($objFopen);
	}


}

mysqli_close($conn);
echo json_encode($json);
?>