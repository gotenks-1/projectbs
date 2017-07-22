<?php 

if((isset($_POST["cname"]))&&isset($_POST["jprofile"])&&isset($_POST["jlocation"])&&isset($_POST["ecriteria"])&&isset($_POST["cdescription"])&&isset($_POST["jdescription"])&&isset($_POST["rskills"])){
	       $a=$_POST["cname"];
	       $b=$_POST["jprofile"];
	       $c=$_POST["jlocation"];
	       $d=$_POST["ecriteria"];
	       $e=$_POST["cdescription"];
	       $f=$_POST["jdescription"];
	       $g=$_POST["rskills"];
	       
include "dbconn.php";

$qry="insert into job_vacancy values('$a','$b','$c','$d','$e','$f','$g')";
if($conn->query($qry)){

	echo "sid i got".$_POST["cname"];
}
else
{
	echo $qry;
}
}
else{
	echo "sid i got nothing";
}



// $a=$_POST["cname"])&&
//         ($_POST["jprofile"]){
//             $b=$_POST["jprofile"])&&
//         ($_POST["jlocation"]){
//             $c=$_POST["jlocation"])&&
//         ($_POST["ecriteria"]){
//             $d=$_POST["ecriteria"])&&
//         ($_POST["cdescription"]){
//             $e=$_POST["cdescription"])&&
//         ($_POST["jdescription"]){
//             $f=$_POST["jdescription"])&&
//         ($_POST["rskills"]){
//             $g=$_POST["rskills"])
//         };


?>