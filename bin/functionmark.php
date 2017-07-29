<?php
if(isset($_POST['bmarks'])&&isset($_POST['tenper'])&&isset($_POST['twelper'])){

	$z=$_POST['bmarks'];
	$x=$_POST['tenper'];
	$v=$_POST['twelper'];

	 include 'dbconn.php';
	       include 'validate.php';
	       $a=$_SESSION["branch"];
		   $d=$_SESSION["userid"];


		   $qry="update $a set `marksbtech`='$z',`marks10`='$x',`marks12`='$v' where userid='$d'";

		   if($conn->query($qry)){
		   	echo "MARKS ADDED SUCCESSFULLY";
		   }
		   else
		   {
		   	echo $qry;
		   }
}