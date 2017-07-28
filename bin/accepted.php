<<?php
include 'validate.php';
include 'dbconn.php';

  $userid=$_COOKIE['userid'];
  $query="UPDATE invites set seen= 1, accepted =1  where cid='".$_POST["driveid"]."' and username ='".$userid."'";
  if(mysqli_query($conn,$query))
  {
?>
    <script type="text/javascript">
      $(document).ready(function() {
             $("#maincontainer").load("viewinviteuser.php");

      });
    </script>
<?php
  }
  else
  {
   echo 'ERROR:'.mysqli_error($conn);
  }
 ?>
