
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
<div class="row center-align" style="margin-top: 5%">
	<div class="container center-align z-depth-5">
	    <div class="row">
	        <div class="col s12">
	            <div class="row">
	            	<div class="col s4 ">
	            	 <a class='dropdown-button btn' href='#' data-activates='dropdown1'>User id</a>

   						<!-- Dropdown Structure -->
 							 <!-- <ul id='dropdown1' class='dropdown-content'>  -->
  								  <!-- <li><a href="#!">ones</a></li>
  								  <li><a href="#!">two</a></li>
   								  <li class="divider"></li>
   								  <li><a href="#!">three</a></li>
  								  <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
  								  <li><a href="#!"><i class="material-icons">cloud</i>five</a></li> -->
  							<!-- </ul>  -->

  							 <?php
  								include 'dbconn.php';
  								 //$ui=$_SESSION['userid'];
  								$q=$conn->query('Select userid from LoginDetail');

  								//$row=mysqli_num_rows($q);
  								echo "<ul id='dropdown1' class='dropdown-content'>";

  								while ($row=$q->fetch_assoc()) {
  									# code...
                                       									// echo "hi";
  									 echo "<li class='selid'>".$row['userid']."</li>";
                                         }
										echo "</ul>";

  							?>
	            	</div>
	            </div>
	        	<div class="row">
	        	    <div class=" col s6 ">
	        	       <label><font size="4">Full Name :</font></label>
	        	   	</div>
	        	   	 <div class="col s5">
	        	   		<label id="name">........</label>
	        	   	</div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">Father's name :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id="fa_name">.....</label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">Contact:</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id="cont">.....</label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">Address:</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id="Addr">.....</label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">Email :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id="email">.....</label>
	        	   </div> 
	        	</div>
	        </div>

	    </div>
</div>
<script type="text/javascript">
  //alert("hi");
 $(document).ready(function(){

 	 	$('.selid').click(function(){
            //$(this).data(	"value")
            //console.log($(this));
            var getId=$(this).text();
           //alert("value"+getId);
          $.post("userrecords.php",{id:getId},function(data)
          {   
          	//console.log(data);
          	//var fullnameerge(data['fname'],data['lname']);
          	$('#name').html(data['fname']+" "+data['lname']);
            $('#fa_name').html(data['Father_name']);
            $('#cont').html(data['contact']);
            $('#Addr').html(data['Address']);
            $('#email').html(data['email']);
            //alert("data"+data);
          },"json");
 	 	});    
	 
 });

  
</script>
</body>

</html>
<!-- var getId=$('#dropdown1').val();
    alert("value "+getId); -->