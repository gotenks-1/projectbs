<?php
session_start();
include 'dbconn.php';

if(isset($_POST["id"])&&isset($_COOKIE["userid"])){
    $receivedid=$_POST["id"];
    $id=$_COOKIE["userid"];
    setcookie("PHPSESSID","",time()-3600);
    setcookie("userid","",time()-3600);
    $qry="delete from ActiveSessions where userid='$id'";
    $conn->query($qry);
    session_destroy();
    echo 1;
}
else {
  echo 0;
}

 ?>
