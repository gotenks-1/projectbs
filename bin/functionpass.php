<?php
if(isset($_POST["np"])&&isset($_POST["cp"])){
	$a=$_POST["np"];
	$b=$_POST["cp"];
	if($a==$b)
	{
		include 'dbconn.php';
		include 'validate.php';
		// $c=$_SESSION["type"];
		$d=$_SESSION["userid"];
		$qry="UPDATE `LoginDetail` SET `pass` = '".$a."' WHERE userid = '".$d."' ";
		if($conn->query($qry)){
		echo "PASSWORD UPDATED SUCCESSFULLY";}

	}
	else {
		echo "BOTH PASSWORD DOESNOT MATCH";
	}
}
else
{
	echo $qry;
}
