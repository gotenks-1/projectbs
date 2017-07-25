<?php
include "dbconn.php";

$qry="insert into invites(`username`,`cid`) values('".$_POST["user"]."','".$_POST["cid"]."')";
$conn->query($qry);
echo $qry;
 ?>
