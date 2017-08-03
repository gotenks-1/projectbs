<?php
include "dbconn.php";
include "validate.php";
  if(isset($_post["new"]) && isset($_post["confirm"]))
  {
  $new=$_post["new"];
  $confirm=$_post["confirm"];
  $userid = $_SESSION["userid"];
  }


if($new==$confirm)
{

$query="UPDATE `LoginDetail` SET `pass` = '".$new."' WHERE userid = '".$userid."' ";
if($conn->query($query)){
echo "PASSWORD UPDATED SUCCESSFULLY";}

}
  else
  {
    echo "PASSWORD DOESNOT MATCH";
  }
}
else
{

echo $query;
}
 ?>
