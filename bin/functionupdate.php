<?php
if(isset($_POST["finame"])&&isset($_POST["laname"])&&isset($_POST["faname"])&&isset($_POST["dateofb"])&&isset($_POST["branch"])&&isset($_POST["add"]) &&isset($_POST["ph"]) &&isset($_POST["mail"]) &&isset($_POST["gender"])){
		  $aa=$_POST["finame"];
	       $bb=$_POST["laname"];
	       $cc=$_POST["faname"];
	       $dd=$_POST["dateofb"];
	       // $ff=$_POST["branch"];
	       $gg=$_POST["add"];
	       $hh=$_POST["ph"];
	       $ii=$_POST["mail"];
	       $jj=$_POST["gender"];
	       



// if($aa!=""&&$bb!=""&&$cc!=""&&$dd!=""&&$ff!=""&&$gg!=""&&$hh!=""&&$ii!=""&&$jj!=""){
include 'dbconn.php';
include 'validate.php';
$c=$_SESSION["branch"];
$d=$_SESSION["userid"];

$qry="update $c set `fname`='$aa',`lname`='$bb',`fathername`='$cc',`dob`='$dd',`address`='$gg',`contact`='$hh',`email`='$ii',`gender`='$jj' where userid='$d'";
if($conn->query($qry)){

	echo "PROFILE UPDATED SUCCESSFULLY OF"                    .$_POST["finame"];
}
else
{
	echo $qry;
}

}
else{
	echo "insert all values";
}
//  }
// else{
// 	echo "ERROR: PLEASE CHECK";
//
// if(isset($_POST["bmarks"])&&isset($_POST["twlmarks"])&&isset($_POST["tenmarks"])){
// 	$a=$_POST["bmarks"];
// 	$b=$_POST["twlmarks"];
// 	$c=$_POST["tenmarks"];
// 	include 'dbconn.php';
// 	include 'validate.php';
// 	$f=$_SESSION["branch"];
//     $g=$_SESSION["userid"];
//     $qryy="update $f set `marksbtech`='$a',`marks12`='$b',`marks10`='$c' where userid='$g'";
//     if($conn->query($qryy)){
//     	echo "MARKS SUCCESSFULLY UPDATED OF";
//     }
//     else {
//     	echo $qryy;
//     }


// }