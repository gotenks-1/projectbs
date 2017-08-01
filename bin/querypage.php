<?php
include 'validate.php';
include 'dbconn.php';

	if(!validate()){
	  header("Location: ../index.php");
	}

	if(isset($_COOKIE['userid']))
	{
			$userid=$_COOKIE['userid'];
			 $query= "SELECT type From LoginDetail Where userid='".$userid."'";

		  $result=mysqli_query($conn,$query);

		 $dbarray = mysqli_fetch_object($result);

		 $val=$dbarray->type;

		 Mysqli_free_result($result);

		 if(isset($_POST['submit_btn']) && $val=="normal")
		 {

			 $qu_txt= mysqli_real_escape_string($conn,$_POST['qu_txt']);
			 $subject= mysqli_real_escape_string($conn,$_POST['subject']);
			 $userid =$_COOKIE['userid'];
			 $query= "INSERT INTO queries(userid,subject,query) Values('$userid','$subject','$qu_txt')";

			 if(mysqli_query($conn,$query))
			 {

				 header("Location: ../index.php");

			 }
			 else
			 {
			 	echo 'ERROR:'.mysqli_error($conn);
			 }
		 }

	}
?>


  		<h5 class="card-panel teal lighten-2" style="color:white">QUERY</h5>
	  <div class="">
	    <form class="col s12" action="querypage.php" method="POST" >
 	      <div class="row">
	        <div class="input-field col s12">
         	   <input id="input_text" type="text" name='subject' data-length="150">
            <label for="Subject">Subject</label>
          </div>
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

<!-- </body>


</html> -->
