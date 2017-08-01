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
    if ($result = mysqli_query($conn, $query)) {
      while ($row = mysqli_fetch_assoc($result))
      {
      ?>
			<ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header z-depth-1 xhover" data-value="<?php echo $row['cid'];?>" style="font-weight:bold; height=10%" > <?php echo $row['cid'] ?></div>
			      <div class="collapsible-body row">
								<div class="col l12" style="height:20%;">
								<span>here is some description</span>
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
      mysqli_free_result($result);
  }
  else {
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
