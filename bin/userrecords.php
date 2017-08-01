<?php
include 'dbconn.php';
header("Content-type: text/javascript");
//$query=;
//echo "$query";
$hereid=$_POST['id'];

$res=$conn->query("Select * from btech where userid='$hereid'");
//echo "$res";
$data_array=array();
//echo "hllo";
while ($rows=$res->fetch_assoc()) {
	# code...
//	echo 'here';
	$data_array=$rows;
	//echo "hi";
	echo json_encode($data_array);



}?>	