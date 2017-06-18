<?php
session_start();

include 'dbconn.php';

$userid=$_POST["userid"];
$pass=$_POST["pass"];

$qry="select * from LoginDetail where userid='$userid' and pass='$pass'";
$rs=$conn->query($qry);

if(mysqli_num_rows($rs)>0){
  $r=$rs->fetch_assoc();

  if($r["userid"]==$userid&&$r["pass"]==$pass){
    $sessid=session_id();

    $qry="delete from ActiveSessions where userid='$userid' or sessionid='$sessid'";
    $conn->query($qry);

    $qry="insert into ActiveSessions values('$sessid','$userid')";
    $conn->query($qry);

    setcookie("userid",$userid,time()+86400*30,"/");
    echo "success";

  }

  else {
    session_destroy();
    echo "failed";
  }

}
else {
  session_destroy();
  echo "failed";
}
 ?>
