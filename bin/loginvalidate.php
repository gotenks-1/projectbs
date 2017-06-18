<?php
include 'dbconn.php';

$userid=$_POST["userid"];
$pass=$_POST["pass"];

echo $userid;

// $qry="select * from LoginDetail where userid='$userid' and pass='$pass'";
// $rs=$conn->query($qry);
//
// if(mysqli_num_rows($rs)>0){
//   $r=$rs->fetch_assoc();
//
//   if($r["userid"]==$userid&&$r["pass"]==$pass){
//     echo "success";
//   }
//
//   else {
//     echo "success";
//   }

}

 ?>
