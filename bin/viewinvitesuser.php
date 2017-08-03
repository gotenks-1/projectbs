<?php
include 'validate.php';
include 'dbconn.php';

	if(!validate()){
	  header("Location: ../index.php");
	}
 ?>
 <style typr="text/css">
	.my_collapse{
								height:50%;
							}

 </style>
 <h5 class="card-panel teal lighten-2 center" style="color:white">INVITES</h5>
<!-- php start -->
  <?php
  if(isset($_COOKIE['userid']))
  {
		    $userid=$_COOKIE['userid'];

		    $query = "SELECT * FROM invites Where username='".$userid."' ORDER BY Date";
		    if ($result = mysqli_query($conn, $query))
				{
			      while ($row = mysqli_fetch_assoc($result))
			      {
							$qry = "SELECT * FROM job_vacancy Where  job_id='".$row['cid']."' ORDER BY last_date_to_apply ";

			         if($res=mysqli_query($conn, $qry))
               {
								 while ($r = mysqli_fetch_assoc($res))
								 {

								 ?>
									 <ul class="collapsible" data-collapsible="accordion">
				 					 <li>
										 <div class="collapsible-header z-depth-1 xhover" data-value="<?php echo $row['cid'];?>" style="font-weight:bold; height=10%">
											 <span class="col l12 m12 s12"><?php echo $r['company_name'] ?></span>
											 <!-- <span>Job Description :</span> -->
										 </div>
										 <div class="collapsible-body row">
												 <div class="col l12" style="height:30%; overflow-y:scroll;">
	 								          <div class="row">
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Company Name : </span><?php echo $r['company_name'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Job Profile : </span><?php echo $r['job_profile'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Job Location : </span><?php echo $r['job_location'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Eligiblity Criteria : </span><?php echo $r['eligiblity_criteria'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Company Description : </span><?php echo $r['company_description'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Job Description : </span><?php echo $r['job_description'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Required Skills : </span><?php echo $r['required_skills'];?>
	 								            </div>
	 								            <div class="col l12 m12 s12">
	 								                <span style="font-weight:bold;">Last Date To Apply : </span><?php echo $r['last_date_to_apply'];?>
	 								            </div>
	 								          </div>
	 								        </div>

												 <div class="col l2">
												 <button class="btn waves-effect waves-light teal lighten-2 accept_btn" id="accept" name="accept_btn" data-value="<?php echo $row['cid'];?>" >
													 <span style=" align-item:center;">Accept</span>
													 <i class="material-icons">thumb_up</i>
												 </div>
										 </div>
									 </li>
		 					 	</ul>


							 <?php
								 }
								 mysqli_free_result($res);
							 }
							 else
			 				 {
			 		    		echo 'error1';
			 		  	 }

						}


						mysqli_free_result($result);
		  	}
		  	else
				{
		    		echo 'error';
		  	}


  }
 ?>

 <script type="text/javascript">

 $(document).ready(function(){
    $('.collapsible').collapsible();

		$(".xhover").on('mouseenter',function(event) {
			event.preventDefault();
			$(this).removeClass('z-depth-1');
			$(this).addClass('z-depth-2');
		});

		$(".xhover").on('mouseleave',function(event) {
      event.preventDefault();
      $(this).removeClass('z-depth-2');
      $(this).addClass('z-depth-1');
    });

		$(".accept_btn").click(function(){
			$.post("accepted.php",{
				driveid:$(this).data("value")
			},function(data){
				$("#maincontainer").load("viewinviteuser.php");
			});

		});

  });

 </script>
