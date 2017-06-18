<?php
function validate()
{
  if(isset($_COOKIE["PHPSESSID"])&&isset($_COOKIE["userid"]))
  {
    $userid=$_COOKIE["userid"];
    $sessid=$_COOKIE["PHPSESSID"];

    include 'dbconn.php';

    $qry="select * from ActiveSessions where sessionid='$sessid' and userid='$userid'";
    $rs=$conn->query($qry);
    if(mysqli_num_rows($rs)>0)
    {
      return 1;
    }
    else {
      setcookie("PHPSESSID","",time()-3600);
      setcookie("userid","",time()-3600);
      return 0;
    }
  }
  else {
    return 0;
  }
}
?>
