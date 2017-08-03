<?php 
include 'dbconn.php';



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styl.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
</head>
<body>

<div class="row center-align" style="margin-top:5%">
   <div class="container center-align z-depth-5">
       <div class="row">
           <div class="input-field offset-s3 col s6 offset-s3">
               <div class="row">
                  <input type="text"  id="newpass">
               	  <label for="newpass">Enter new password :</label>
               </div>           	
           </div>       	
       </div>
       <div class="row">
           <div class="input-field offset-s3 col s6 offset-s3">
                <div class="row">
                   <input type="text" id="confirmpass">
                    <label for="confirmpass">Confirm new password :</label>          	
                </div>           	
           </div>       	
       </div>
       <script>
       	function match_pass()
           {
           	if(document.getElementById("newpass").value==document.getElementById("confirmpass").value)
           	{
           		alert("pass match");
           		if (Confirm("Are you sure you want to change your password")) {
           			document.getElementById("f1").submit();
           		}

           	}
           	else
           	{
                alert("password do not match");
           	}
           }
       </script>

    

       <div class="row">
           <div class="col s12" style="display:flex;flex-direction:row-reverse">
               <button class="btn waves-effect waves-light" type="submit" name="action" id="submitbutton" onclick="match_pass();">Submit
                    <i class="material-icons right">send</i>
               </button>  
            </div>       	
       </div>
	   
   </div>	
</div>
</body>


</html>



