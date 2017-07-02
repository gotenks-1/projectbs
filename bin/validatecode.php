<?php
session_start();
if(isset($_POST["uemail"])&&isset($_POST["ucode"])){
  include "dbconn.php";

  $email=$_POST["uemail"];
  $code=$_POST["ucode"];

  $qry="select * from TempAccount where email='$email' and code='$code'";
  // echo $qry;
  $rs=$conn->query($qry);
  if(mysqli_num_rows($rs)==1){
    $r=$rs->fetch_assoc();
    $id=$r["userid"];
    $pass=$r["pass"];
    $branch=$r["branch"];
    $fname=$r["fname"];
    $lname=$r["lname"];

    $qry1="insert into LoginDetail values('$id','$email','$pass','normal','$branch')";
    $conn->query($qry1);

    $qry1="insert into $branch(`userid`,`fname`,`lname`,`email`) values('$id','$fname','$lname','$email')";
    $conn->query($qry1);


    $qry1="delete from TempAccount where email='$email'";
    $conn->query($qry1);

    $sessid=session_id();

    $qry="insert into ActiveSessions values('$sessid','$id')";
    $conn->query($qry);

    setcookie("userid",$id,time()+86400*30,"/");
    setcookie("PHPSESSID",session_id(),time()+86400*30,"/");

    echo 1;
  }
  else{
    echo 0;
    session_destroy();
  }
}
else {
  session_destroy();
  header("Location: ../index.php");
}
 ?>
