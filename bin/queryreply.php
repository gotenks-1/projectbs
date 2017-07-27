<?php
include 'validate.php';
include 'dbconn.php';
	if(!validate()){
	  header("Location: ../index.php");
	}
    if(isset($_COOKIE['userid']))
	{
	     $query= "SELECT * From queries ORDER BY querydate DESC";

		 $result=mysqli_query($conn,$query);

		 $dbarray = mysqli_fetch_all($result,MYSQL_ASSOC);

	     Mysqli_free_result($result);
	 }
?>



<DOCTYPE html>

<html lang=en>

<!-- <head>

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
</head>

<link rel="stylesheet" type="text/css" href ="../css/materialize.css"/>
<link rel="stylesheet" type="text/css" href ="../css/styl.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/cookiejs.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>


 <body>
  <div class="container">
-->

  		<h5 class="card-panel teal lighten-2" style="color:white">QUERY</h5>
	  <div>
	      	<div  style="height:80%; overflow:scroll; overflow-x:hidden;">
			  	 <ul class="collection with-header">
			        <?php foreach($dbarray as $data) : ?>
			        <li class="collection-item" >
			        	<div class="cyan-text" style="font-weight:bold; font-style:italic;" >
			        		<h5><?php echo $data['subject'].': '; ?><h5>
			        	</div>
			        	<div class="" style="font-weight:bold;">
			        		<p><?php echo $data['query']; ?></p>
			        		<a href="#!" class="secondary-content"><i class="material-icons">replay</i></a>
			        	</div>
			        <div style="font-style:italic;">
			        	<?php echo 'Submitted by '.$data['userid']. ' on '.$data['querydate']; ?>
			        </div>
			        </li>
                    <?php endforeach; ?>
			     </ul>
		   </div>
	    <div class="row">
		  	<div class="col s6 l2">
			   <a class="waves-effect waves-effect btn teal lighten-2" href="index.php"><span>Back</span>
			   <i class="material-icons left">reply</i>
			   </a>
		   </div>
	  </div>
 </div>
</body>

</html>
