<?php

if(isset($_POST["userid"])){
  $userid=$_POST["userid"];
  include 'dbconn.php';

  $qry="select * from LoginDetail where userid='$userid'";
  $rs=$conn->query($qry);
  if(mysqli_num_rows($rs)==1){
    $r=$rs->fetch_assoc();

    include 'samplemail.php';
    sendmailto($r["email"],"Password Recovery",3,$r["userid"],$r["pass"],"","");
    echo 1;
  }
  else{
    echo 0;
  }

}
else {
  header("Location: ../index.php");
}
 ?>
