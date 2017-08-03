<!DOCTYPE html>
<html>

<head>
    <title>JOB VACANCY</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styl.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</head>
<body>

<div class="row left-align" style="margin-top: 5%">
	<div class="container center-align z-depth-5">
<?php

include 'dbconn.php' ;

$sql = "select * from job_vacancy" ;
$rs=$conn->query($sql);
?>
<div class="row">
	<div class="input-field col s12">
		<select id="jobdes">
			<?php while ($r=$rs->fetch_assoc()): ?>
				<option value=<?php echo $r["job_id"];?>><?php echo $r["job_id"];?></option>
			<?php endwhile;?>
		</select>
	</div>
</div>

<div class="row" id="displayvacancy">
	
<div class="row">
	        	    <div class=" col s6 ">
	        	       <label><font size="4">COMPANY NAME :</font></label>
	        	   	</div>
	        	   	 <div class="col s5">
	        	   		<label id="cnamelbl"></label>
	        	   	</div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">JOB PROFILE :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id='jprofilelbl'></label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">JOB LOCATION :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id='jlocationlbl'></label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">ELIGIBLITY CRITERIA :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id='ecriterialbl'></label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	   <div class="col s6">
	        	      <label><font size="4">COMPANY DESCRIPTION :</font></label>
	        	   </div>
	        	   <div class=" col s5">
	        	      <label id='cdescriptionlbl'></label>
	        	   </div>
	        	</div>
	        	<div class="row">
	        	    <div class=" col s6 ">
	        	       <label><font size="4">JOB DESCRIPTION :</font></label>
	        	   	</div>
	        	   	 <div class="col s5">
	        	   		<label id='jdescriptionlbl'></label>
	        	   	</div>
	        	</div>
	        	<div class="row">
	        	    <div class=" col s6 ">
	        	       <label><font size="4">REQUIRED SKILLS :</font></label>
	        	   	</div>
	        	   	 <div class="col s5">
	        	   		<label id='rskillslbl'></label>
	        	   	</div>
	        	</div>
	        	<div class="row">
	        	    <div class=" col s6 ">
	        	       <label><font size="4">LAST DATE TO APPLY :</font></label>
	        	   	</div>
	        	   	 <div class="col s5">
	        	   		<label id='ldatelbl'></label>
	        	   	</div>
	        	</div>
	        	</div>
	        	</div>
 
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("select").material_select();
  		$("#jobdes").change(function(){

  			$.post("jsonjobvacancy.php",{
  				cid:$('#jobdes').val()
  			},function(data){
  				console.log(data);
  				$("#cnamelbl").html(data.company_name);
  				$("#jprofilelbl").html(data.job_profile);
  				$("#jlocationlbl").html(data.job_location);
  				$("#ecriterialbl").html(data.eligiblity_criteria);
  				$("#jdescriptionlbl").html(data.job_description);
  				$("#cdescriptionlbl").html(data.company_description);
  				$("#rskillslbl").html(data.required_skills);
  				$("#ldatelbl").html(data.last_date_to_apply);

  			},"json");

  		});


	});
</script>
</body>
</html>