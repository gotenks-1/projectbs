<!-- <?php 
echo "hola";
?> -->
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
         <form id="form1" method="POST" action="new_updatepass.php">
        <div class="row">

            <div class="col s12">
            	  <div class="row">
            	      <div class="input-field offset-s3 col s6 offset-s3">
            	         <input type="text" name="newpass" id="newpass">
            	          <label for="newpass">New password:</label>          	  	
            	       </div>
                   </div>
                   <div class="row">
                       <div class="input-field offset-s3 col s6 offset-s3">
                            <input type="text" name="confirmpass" id="confirmpass">
                              <label for="confirmpass">Confirm password:                         
                              </label>
                        </div>                       
                   </div>
                   <div class="row">
                       <div class="col s12" style="display:flex;flex-direction:row-reverse">
                         <button class="btn waves-effect waves-light" type="submit" name="action" id="submit" name="submit" onclick="load()">Submit
                           <i class="material-icons right">send</i>
                         </button>  
                        </div>
                     </div> 
             </div>     
	        
    </div>
		</form>
	</div>
    </div>
	
 <!-- <a href=""></a>
 -->	

<script>
function load(){
	// if(document.getElementByID('newpass').value==''){
 //    alert("blank pass");
 //    return;
 alert("hi");
         if (document.getElementById('newpass').value==document.getElementById('confirmpass').value) {
        alert("matched");
        console.log("yo");
        // console.log("<?php echo '#@';?>");

      }
      else 
      {
        alert("doesnt match");
      }
      	}
        
     
</script>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectbs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo"hi";
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['newpass'])) {
    //echo "i am called";
	$new_pass=$_POST['newpass'];

$sql = "UPDATE logindetail SET pass='$new_pass' WHERE userid='admin'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record updated successfully');</script>";
    //header()
    header("Location: header.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}else{
    //echo "<scrinot set";
}

?>
</body>
</html>