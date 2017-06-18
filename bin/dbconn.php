<?php
$server="localhost";
$dbusername="root";
$dbuserpass="";
$dbname="projectbs";

$conn=new mysqli($server,$dbusername,$dbuserpass,$dbname);
if($conn->errno)
{
  echo "something went wrong";
}
 ?>
