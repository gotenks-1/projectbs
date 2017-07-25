<?php
include 'dbconn.php';

header("Content-type: text/javascript");
$studenlist=array();

$table=$_POST["branch"];
$mfilter=$_POST["marksfilter"];
$marks=$_POST["marks"];
// print_r($_POST["brancharr"]);
// $table="btech";
// echo $mfilter;
$qry="select * from $table where 1";
if($mfilter=='true'){
  // echo "hi";
  $qry=$qry." and marksm >= ".$marks."";
}

if($_POST["branchfilter"]=="true"&&$table=="btech"){
  $qry=$qry." and(0";
  foreach ($_POST["brancharr"] as $key => $value) {
    $qry=$qry." or branch='$key'";
  }
  $qry=$qry.")";
}

$rs=$conn->query($qry);
// echo $qry;
while ($r=$rs->fetch_assoc()) {
  $ob=array("username"=>$r["userid"],"roll"=>$r["rollno"],"name"=>$r["fname"]." ".$r["lname"]);
  $studenlist[$r["userid"]]=$ob;
}

echo json_encode($studenlist);
 ?>
