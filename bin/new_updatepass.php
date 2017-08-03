<?php
include "dbconn.php";
 ?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styl.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</head>

<body>

	<div class="row center-align" style="margin-top:5% ">
    <div class="container center-align z-depth-5">
           <div class="row">

            <div class="col s12">
            	  <div class="row">
            	      <div class="input-field offset-s3 col s6 offset-s3">
            	         <input type="password" name="newpass" id="newpass">
            	          <label for="newpass">New password:</label>
            	       </div>
                   </div>
                   <div class="row">
                       <div class="input-field offset-s3 col s6 offset-s3">
                            <input type="password" name="confirmpass" id="confirmpass">
                              <label for="confirmpass">Confirm Password:
                              </label>
                        </div>
                   </div>
                   <div class="row">
                       <div class="col s12" style="display:flex;flex-direction:row-reverse">
                         <button class="btn waves-effect waves-light sub_btn" type="submit" name="action" id="sub"  onclick="load()">Submit
                           <i class="material-icons right">send</i>
                         </button>
                        </div>
                     </div>
             </div>
          </div>

	</div>
    </div>
</body>


<script type="text/javascript">

 $(document).ready(function(){
    alert('clicked');
  $("#sub").click(function(event){
    event.preventDefault();
            $.post("function_admin_update.php",{
          new:$("#newpass").val(),
          confirm:$("#confirmpass").val(),
          },function(data){
					        alert(data);
					        window.open("new_updatepass.php","_self");
					      });
  			});


  });

 });

</script>

</html>
