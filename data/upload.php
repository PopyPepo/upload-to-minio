<?php 
ob_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set("Asia/Bangkok");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$fileName = "booths.json";
$json = array();

$output = shell_exec("mc config host add test_info http://203.158.7.25:5555 0ZEG6BJ90U6GZBONZFAV 9F2YGgsFWP/PW6orWwlbUDxsUqHXY+eZca4Ze/jW");
/*
*	Download mc.exe for Microsoft Windows => https://github.com/minio/mc#add-a-cloud-storage-service
*	$conn = ชื่อการเชื่อมต่อ (testInfo)
*	$host = url server minio (http://203.158.7.25:5555)
*	$accKey = Access Key ID (0ZEG6BJ90U6GZBONZFAV)
*	$secretAccKey = Secret Access Key (9F2YGgsFWP/PW6orWwlbUDxsUqHXY+eZca4Ze/jW)
*
*	ใช้คำสั่ง shell_exec(mc config host add $conn $host $accKey $secretAccKey)
*/
$json['connnect'] = $output;

$output = shell_exec("mc cp -r ".$fileName." test_info/student");

/*
*	mc => เรียกใช้โปรแกรม mc.exe
*	cp => ใช้สำหรับ copy ไฟล์หรือไดเรคทอรี่ จากที่นึงไปยังอีกที่นึง
*	-r => ทุก file และ folder รวมทั้งใน sub folder ไปยัง directory
*	$fileName => ชื่อไฟล์ หาอยู่คนละ path ให้ระบุไปด้วยพร้อมกับชื่อไฟล์
*	$conn => = ชื่อการเชื่อมต่อ ที่ระบุตอนเชื่อต่อ config host
*	$folderName_minio => ชื่อ bucket ที่จะเก็บไฟล์
*
*	shell_exec("mc cp -r $fileName $conn/$folderName_minio");
*/
$json['upload_status'] = $output;

echo json_encode($json);
?>