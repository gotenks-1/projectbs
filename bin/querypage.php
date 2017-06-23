<?php 
include 'validate.php';
include 'dbconn.php';

	if(!validate()){
	  header("Location: ../index.php");
	}
	
	if(isset($_COOKIE['userid']))
	{
		   $query= "SELECT type From logindetail Where userid='".$_COOKIE['userid']."'";

		  $result=mysqli_query($conn,$query);

		 $dbarray = mysqli_fetch_object($result);
	
		 $val=$dbarray->type;
		
		 Mysqli_free_result($result);
 
		 if(isset($_POST['submit_btn']) && $val=="normal")
		 {
			 $qu_txt= mysqli_real_escape_string($conn,$_POST['qu_txt']);
			 $userid =$_COOKIE['userid'];

			 $query= "INSERT INTO Queries(userid,query) Values('$userid','$qu_txt')";

			 if(mysqli_query($conn,$query))
			 {				 	
	 		
			 	echo	'<script type="text/javascript">';
			 	echo    'alert("ankit)';
				echo    '</script>';

	 			header("Location: ../index.php");

			 }
			 else
			 {
			 	echo 'ERROR:'.mysqli_error($conn);
			 }
		 }
		  
	}
?>

<DOCTYPE html>

<html lang=en>

<head>
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
</head>

<link rel="stylesheet" type="text/css" href ="../css/materialize.css"/>
<link rel="stylesheet" type="text/css" href ="../css/styl.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/cookiejs.js"></script>
<script type="text/javascript" src="../js/materialize.js"> </script>
 

 <body>
  <div class="container">
  		<!-- <div class="card-panel teal lighten-2"> -->

  		<h5 class="card-panel teal lighten-2" style="color:white">QUERY</h5>
	  <div class="">
	    <form class="col s12" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
 	      <div class="row">
	        <div class="input-field col s12">
	          <textarea id="textarea1" name='qu_txt' class="materialize-textarea"></textarea>
	          <label for=query>Query</label>
	        </div>
	      </div>
	    <div class="row">
		  	<div class="col s6 l2">
			  	<button class="btn waves-effect waves-light teal lighten-2" type="submit" name="submit_btn">Submit
			    <i class="material-icons right">send</i>
			  	</button>
		   </div>
		   <div class="col s6 l2">
			   <a class="waves-effect waves-effect btn teal lighten-2" href="index.php"><span>Back</span>
			   <i class="material-icons left">reply</i>
			   </a>
		   </div>
	    </form>
	  </div>
 </div>

</body>


</html>