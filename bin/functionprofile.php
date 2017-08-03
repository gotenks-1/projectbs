
<?php

if(isset($_POST["finame"])&&isset($_POST["liname"])&&isset($_POST["fname"])&&isset($_POST["dateob"])&&isset($_POST["branch"])&&isset($_POST["address"]) &&isset($_POST["ph"]) &&isset($_POST["email"]) &&isset($_POST["gender"])){
		  $aaa=$_POST["finame"];
	       $bbb=$_POST["liname"];
	       $ccc=$_POST["fname"];
	       $ddd=$_POST["dateob"];
	       // $ee=$_POST["course"];
	       $fff=$_POST["branch"];
	       $ggg=$_POST["address"];
	       $hhh=$_POST["ph"];
	       $iii=$_POST["email"];
	       $jjj=$_POST["gender"];


	       include 'dbconn.php';
	       include 'validate.php';
	       $a=$_SESSION["branch"];
		   $d=$_SESSION["userid"];
		   

	       $qry="update $a set `fname`='$aaa',`lname`='$bbb',`email`='$iii',`fathername`='$ccc',`dob`='$ddd',`contact`='$hhh',`address`='$ggg',`gender`='$jjj',`branch`='$fff' where userid='$d'";
	       if($conn->query($qry)){
	echo "PROFILE ADDED SUCCESSFULLY OF"                    .$_POST["finame"];
}
else
{
	echo $qry;
}

}
else{
	echo "insert all values";
}
	       