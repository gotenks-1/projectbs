<?php
include 'dbconn.php';
header("Content-type: text/javascript");
$companylist=array();
$id=$_POST["cid"];
$qry="select * from job_vacancy where `job_id`='$id'";
$rs=$conn->query($qry);
$r=$rs->fetch_assoc();
echo json_encode($r);
 ?>
