<?php 

function randomword($sss){
	$s="";

	$arr=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9'];

	while($sss>0){
		$num=rand(0,61);
		$s=$s.$arr[$num];
		$sss=$sss-1;
	}

	return $s;
}


if((isset($_POST["cname"]))&&isset($_POST["jprofile"])&&isset($_POST["jlocation"])&&isset($_POST["ecriteria"])&&isset($_POST["cdescription"])&&isset($_POST["jdescription"])&&isset($_POST["rskills"])&&isset($_POST["date"])){
	       
	       $a=$_POST["cname"];
	       $b=$_POST["jprofile"];
	       $c=$_POST["jlocation"];
	       $d=$_POST["ecriteria"];
	       $e=$_POST["cdescription"];
	       $f=$_POST["jdescription"];
	       $g=$_POST["rskills"];
	       $h=$_POST["date"];
	       $jid=$a.randomword(6);

if($a!=""&&$b!=""&&$c!=""&&$d!=""&&$e!=""&&$f!=""&&$g!=""){      
include "dbconn.php";

$qry="insert into job_vacancy values('$jid','$a','$b','$c','$d','$e','$f','$g','$h')";
if($conn->query($qry)){

	echo "VACANCY CREATED SUCCESSFULLY OF      ".$_POST["cname"];
}
else
{
	echo $qry;
}
}
else{
	echo "insert all values";
}
}
else{
	echo "ERROR: PLEASE CHECK";
}

?>