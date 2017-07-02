<?php

// var_dump($_POST);
if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["ruserid"])&&isset($_POST["email"])&&isset($_POST["rpass"])&&isset($_POST["branch"]))
{
include 'dbconn.php';

$rbranch=$_POST["branch"];
$rfname=$_POST["fname"];
$rlname=$_POST["lname"];
$ruserid=$_POST["ruserid"];
$remail=$_POST["email"];
$rpass=$_POST["rpass"];

$qry="select * from LoginDetail where userid='$ruserid'";
$rs=$conn->query($qry);
if(mysqli_num_rows($rs)==1){

    echo "error:0";
    exit(0);

}


$qry="select * from LoginDetail where email='$remail'";
$rs=$conn->query($qry);
if(mysqli_num_rows($rs)==1){
  $r=$rs->fetch_assoc();
  echo "error:1";
  exit(0);
}

include 'samplemail.php';

$qry="select * from TempAccount where email='$remail'";
$rs=$conn->query($qry);
if(mysqli_num_rows($rs)==1){
  if(sendmailto($remail,"Register Account on IIMT placementdrive",2,$ruserid,$rpass,$rfname,$rlname,$rbranch)){
    echo "success";
  }
  else {
    echo "error:2";
  }
  exit(0);
}
else {
  $qry="select * from TempAccount where userid='$ruserid'";
  $rs=$conn->query($qry);
  if(mysqli_num_rows($rs)==1){
    echo "error:0";
    exit(0);
  }
}

if(sendmailto($remail,"Register Account on IIMT placementdrive",1,$ruserid,$rpass,$rfname,$rlname,$rbranch)){
  echo "success";
}
else {
  echo "error:2";
}

}
else {
  header("Location: ../index.php");
}
 ?>
