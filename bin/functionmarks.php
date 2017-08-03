<?php
if(isset($_POST["bmarks"])&&isset($_POST["twlmarks"])&&isset($_POST["tenmarks"])){
	$a=$_POST["bmarks"];
	$b=$_POST["twlmarks"];
	$c=$_POST["tenmarks"];
	include 'dbconn.php';
	include 'validate.php';
	$f=$_SESSION["branch"];
    $g=$_SESSION["userid"];
    $qryy="update $f set `marksbtech`='$a',`marks12`='$b',`marks10`='$c' where userid='$g'";
    if($conn->query($qryy)){
    	echo "MARKS SUCCESSFULLY UPDATED";
    }
    else {
    	echo $qryy;
    }


}?>