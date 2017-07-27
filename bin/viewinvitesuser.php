<?php
include 'validate.php';
include 'dbconn.php';

	if(!validate()){
	  header("Location: ../index.php");
	}
 ?>
 <h5 class="card-panel teal lighten-2 center" style="color:white">INVITES</h5>
<!-- php start -->
  <?php
  if(isset($_COOKIE['userid']))
  {
    $userid=$_COOKIE['userid'];

    $query = "SELECT * FROM invites Where username='".$userid."'";
    if ($result = mysqli_query($conn, $query)) {
      while ($row = mysqli_fetch_assoc($result))
      {
      ?>
      <ul>
        <li>
      <div class="card-panel White row z-depth-1 xhover">
           <span class="col l12" style="font-weight:bold;"><?php echo $row['cid'] ?></span>
           <span class="col l12">here is some description</span>
      <div id="popup" class="hide">
         <span class="col l12">here is some description 22222</span>
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
 $(document).ready(function() {
    $(".xhover").on('mouseenter',function(event){
      event.preventDefault();
      $(this).removeClass('z-depth-1');
      $(this).addClass('z-depth-2');
    });

    $(".xhover").on('mouseleave',function(event) {
      event.preventDefault();
      $(this).removeClass('z-depth-2');
      $(this).addClass('z-depth-1');
    });

 });


 </script>
