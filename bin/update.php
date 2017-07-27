<?php
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/styl.css">

	<!-- <style type="text/css">
	@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(../fonts/icon/icon.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}
	</style> -->
</head>
<body>
	<?php
		include 'dbconn.php';
		$a=$_SESSION["userid"];	
		$b=$_SESSION['branch'];
		$qry="select * from  $b where userid='$a'";
		$rs=$conn->query($qry);
		$r=$rs->fetch_assoc();
	?>	

	<div class="row red">
		<div class="col s2 m2 l2">
			<a href="#" id="back_button">
				<i class="material-icons prefix" style="font-size: 40px;color: black;">reply</i>
			</a>
		</div>
		<div class="col s1 m3 l3">
			<!-- <i class="material-icons prefix" style="font-size: 40px">reply</i> -->
		</div>
		<div class="col s9 m7 l7">
			<span><h4>Update Profile</h4></span>
	    </div>
	</div>
	 
	<div class="container">
		<div class="row">

			<div class="col s8">
				<span>
					<h5 style="
				    margin-bottom: 0px;
				    margin-top: 4px;
				">Choose Category</h5>
				</span>
			</div>

			<div class="col s4"> 
				<a class="dropdown-button btn " href='#' data-activates='dropdown1'>option</a>
				  <!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content'>
				    <li><a id="abi">Basic Info.</a></li>
				    <li><a id="apw">Password</a></li>
				    <li><a id="ar">Resume</a></li>
				    <li><a id="aaq">Academic Qualification</a></li>
				    <li><a id="as">Skills</a></li>
				</ul>
			</div>

	  	</div>
	</div>

	<div class="container z-depth-3">
	
		
	  				<div class="row z-depth-4">
						<div class="col s12 red">
							<span ><h5 id="headingtext">Basic Info.</h5></span>
						</div>
					</div>

                     <!-- basic Info. -->
	  	<div  class="row">
	  		<div  id="bbi" class="col s12">
	  			<div class="container">

	  				<div class="row">
	  					<div class="input-field col s6">
	  					<i class="material-icons prefix" style="font-size: 40px">account_circle</i>
		          		<input id="firstname" type="text" class="validate" value="<?php echo $r['fname'];?>">
		          		<label for="firstname">First Name</label>
		          		</div>

		          		<div class="input-field col s6">
		          		<input id="last_name" type="text" class="validate" value="<?php echo $r['lname'];?>">
		          		<label for="last_name">Last Name</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s12">
		  					<i class="material-icons prefix" style="font-size: 40px">account_circle</i>
			          		<input id="fname" type="text" class="validate" value="<?php echo $r['fathername'];?>">
			          		<label for="fname">Father's Name</label>
			          	</div>	 
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s12">
		  					<i class="material-icons prefix" style="font-size: 40px">today</i>
			          		<input id="dofb" type="date" class="datepicker" value="<?php echo $r['dob'];?>">
			          		<label for="dofb">Date of Birth</label>
			          	</div>	 
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s6">
	  					<i class="material-icons prefix" style="font-size: 40px">library_books</i>
							    <select id="courseselect" disabled selected>
							      <option value="" disabled selected><?php echo $_SESSION["branch"];?></option>
							      <!-- <option value="1" >B.tech</option>
							      <option  value="2">M.Tech</option>
							      <option  value="3">B.Tech(Lateral)</option>
							      <option  value="4">MBA</option>
							      <option  value="5">Polytechnic</option>
							      <option  value="6">BBA</option>
							      <option  value="7">BCA</option>
							      <option  value="8">MCA</option>
							      <option  value="9">BJMC</option>
							      <option  value="10">BA/LLB</option>
							      <option  value="11">B.Pharm</option>
							      <option  value="12">M.Pharm</option> -->

							    </select>
							    <label>Course</label>
						</div>
						<div  id="aaa" class="input-field col s6">
							    <select>
							      <option value="" disabled selected><?php echo $r['branch'];?></option>
							      <option value="1">CSE</option>
							      <option value="2">ME</option>
							      <option value="3">EC</option>
							      <option value="4">CE</option>
							      
							    </select>
							    <label>Branch</label>
				       </div>
				       <div  id="bbb" class="input-field col s6">
							    <select>
							      <option value="" disabled selected>Choose your option</option>
							      <option value="1">CSE</option>
							      <option value="2">ME</option>
							      <option value="3">EC</option>
							      <option value="4">CE</option>
							    </select>
							    <label>Branch</label>
				       </div>
				       <div  id="ccc" class="input-field col s6">
							    <select>
							      <option value="" disabled selected>Choose your option</option>
							      <option value="1">Finance</option>
							      <option value="2">qqqqq</option>
							      <option value="3">eee</option>
							    </select>
							    <label>Branch</label>
				       </div>
			          	</div>	 

	  				<div class="row">
	  					<div class="input-field col s12">
	  					<i class="material-icons prefix" style="font-size: 40px">home</i>
		          		<input id="address" type="text" class="validate" value="<?php echo $r['address'];?>">
		          		<label for="address">Address</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s12">
	  					<i class="material-icons prefix" style="font-size: 40px">phone</i>
		          		<input id="contact" type="text" class="validate" value="<?php echo $r['contact'];?>">
		          		<label for="contact">Contact</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s12">
	  					<i class="material-icons prefix" style="font-size: 40px">email</i>
		          		<input id="mail" type="text" class="validate" value="<?php echo $r['email'];?>">
		          		<label for="mail">E-Mail</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="input-field col s12" style="display: flex;flex-direction: row;">
		  					<i class="material-icons prefix" style="font-size: 40px">perm_identity</i>
			          		<input name="group1" type="radio" id="gmale" <?php if($r['gender']=='male') echo 'checked';?> />
			          		<label for="gmale">Male</label>
			          		<input name="group1" type="radio" id="gfemale" <?php if($r['gender']=='female') echo 'checked';?> />
			          		<label for="gfemale" style="margin-left: 0px">Female</label>   
			          		<input name="group1" type="radio" id="gother" <?php if($r['gender']=='others') echo 'checked';?> />
			          		<label for="gother" style="margin-left: 0px">Others</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="col s12" style="display: flex;flex-direction: row-reverse;">
		  					<button class="btn waves-effect waves-light" style="margin-top:20px" id="btna" type="submit" name="action">SUBMIT
	    						<i class="material-icons right">send</i>
	 				    	</button>
	  				    </div>		
        			</div>
        		</div>
        		</div>

                  <!-- password -->
	  		<div id="bpw" class="col s12">
	  			<div class="container">
	  				<div class="row">
	  					<div class="input-field col s12">
	  						<i class="material-icons prefix" style="font-size: 40px">lock_open</i>
		          			<input id="pw" type="text" class="validate">
		          			<label for="pw">New Password</label>
		          		</div>
		          	</div>
		          	<div class="row">
	  					<div class="input-field col s12">
		  					<i class="material-icons prefix" style="font-size: 40px">lock</i>
			          		<input id="cpw" type="text" class="validate">
			          		<label for="cpw">Confirm Password</label>
		          		</div>
	  				</div>
	  				<div class="row">
	  					<div class="col s12" style="display: flex;flex-direction: row-reverse;">
		  					<button class="btn waves-effect waves-light" style="margin-top:20px;" id="btnb" type="submit" name="action">Submit
	    						<i class="material-icons right">send</i>
	 				    	</button>
	  				    </div>		
        			</div>
	  			</div>
	  		</div>
              <!-- resume -->

	  			<div id="br" class="col s12">
	  				<div class="container">

	  						<div class="row">
	  						   
									<div class="col s6">
										<form action="#">
									    <div class="file-field input-field">
									      <div class="btn">
									        	<span>Update DP</span>
									        	<input type="file">
									      </div>
									      <div class="file-path-wrapper">
									       	 <input class="file-path validate" type="text" placeholder="upload one">
									      </div>
									    </div>
									</form>
									   </div>
									<div class="col s6">
		  							<form action="#">
									    <div class="file-field input-field">
									      <div class="btn">
									        	<span>Update Resume</span>
									        	<input type="file">
									      </div>
									      <div class="file-path-wrapper">
									       	 <input class="file-path validate" type="text" placeholder="upload one">
									      </div>
									    </div>
									</form>
								</div>
							</div>
								<div class="row">
			  						<div class="col s12" style="display: flex;flex-direction: row-reverse;">
					  					<button class="btn waves-effect waves-light" style="margin-top:20px;" type="submit" name="action">Submit
				    						<i class="material-icons right">send</i>
				 				    	</button>
			  				    	</div>		
		        				</div>
	  						</div>
	  					</div>
	  		<div id="baq" class="col s12">
	  			<div class="row">

				   <!--  <div class="col s8">
						<span>
							<h5 style="
						    margin-bottom: 0px;
						    margin-top: 4px;
							">Choose Course</h5>
						</span>
			        </div>
			        <!- academic qualification -->
	  				<!-- <div class="col s4"> 
						<a class="dropdown-button btn " href='#' data-activates='dropdown2	'>Course</a>
					  <!-Dropdown Structure -->
						<!-- <ul id='dropdown2' class='dropdown-content'>
						    <li><a id="dbt">B.Tech</a></li>
						    <li><a id="dbl">B.Tech(Lateral)</a></li>
						    <li><a id="dmt">M.Tech</a></li>
						    <li><a id="dbb">BBA</a></li>
						    <li><a id="dbc">BCA</a></li>
						    <li><a id="dmc">MCA</a></li>
						    <li><a id="dmb">MBA</a></li>
						    <li><a id="dpoly">Polytechnic</a></li>
						</ul>
					</div> -->
	  			<div class="container">
	  			    <div id="aa" class="row">
	  					<div class="input-field col s12">
	  						<i class="material-icons prefix" style="font-size: 40px">grade</i>
		          			<input id="empercen" type="text" class="validate">
		          			<label id="a" for="empercen">M.Tech%</label>
		          		</div>
		          	</div>
	  				
	  				<div id="bb" class="row">
	  					<div class="input-field col s12">
	  						<i class="material-icons prefix" style="font-size: 40px">grade</i>
		          			<input id="ebpercen" type="text" class="validate" value="<?php echo $r['marksbtech'];?>">
		          			<label id="b" for="ebpercen">B.Tech%</label>
		          		</div>
		          	</div>
		          	
		          	<div id="cc" class="row">
	  					<div class="input-field col s12">
	  						<i class="material-icons prefix" style="font-size: 40px">grade</i>
		          			<input id="epercen" type="text" class="validate" value="<?php echo $r['marks12'];?>">
		          			<label id="c" for="epercen">12th%</label>
		          		</div>
		          	</div>
		          	<div id="dd" class="row">
	  					<div class="input-field col s12">
	  						<i class="material-icons prefix" style="font-size: 40px">grade</i>
		          			<input id="etpercen" type="text" class="validate" value="<?php echo $r['marks10'];?>">
		          			<label for="etpercen">10th%</label>
		          		</div>
		          	</div>

		          		<div class="row">
	  						<div class="col s12" style="display: flex;flex-direction: row-reverse;">
		  					<button class="btn waves-effect waves-light" style="margin-top:20px;"" type="submit" name="action">Submit
	    						<i class="material-icons right">send</i>
	 				    	</button>
	  				    	</div>		
        				</div>
	  				</div>
	  			</div>
	  		</div>
	  			<!-- skills -->

	  		<div id="bs" class="col s12">
	  			<div class="container">
	  			  <div class="row">
			  			    <div class="col s12">

			  			        <div class="chips" >
								     <i class="close material-icons">close</i>
									    <input class="input" />
								</div>
	                        </div>
                        <div class="row">
		  					<div class="col s12" style="display: flex;flex-direction: row-reverse;">
			  					<button class="btn waves-effect waves-light" style="margin-top:20px" type="submit" name="action">Submit
		    						<i class="material-icons right">send</i>
		 				    	</button>
		  				    </div>		
        				</div>
	  			    </div>
	  		    </div>
            </div>
	  	</div>
	  	
	  	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			 $('.materialboxed').materialbox();

			console.log("yo");
			// $("#gmale").addClass("selected");
			console.log("yo1");
			// document.getElementById("firstname").value="sharad";
			// $("#firstname").val(<?php echo $r["fname"];?>);
			console.log("yo");
			console.log($("#firstname").val()+"    ---  ");

			$("#aa").hide();
				$("#bb").show();
				$("#cc").show();
				$("dd").show();

    			$("select").material_select();
 
                $("#aaa").show();
				$("#bbb").hide();
				$("#ccc").hide();

				$("#courseselect").change(function(){
					if($("#courseselect").val()==1||$("#courseselect").val()==3){
						$("#aaa").show();
						$("#bbb").hide();
						$("#ccc").hide();
					}
					else if($("courseselect").val()==2){
						$("#bbb").show();
						$("#aaa").hide();
						$("#ccc").hide();
					}
					else {
						$("#bbb").hide();
						$("#aaa").hide();
						$("#ccc").show();
					}

				});

			 //    $("#qqq").change(function(){
			 //    	alert("yo");
				// $("#aaa").show();
				// $("#bbb").hide();});

				// $("#www").click(function(){
				// 	alert("yo1");
				// $("#bbb").show();
				// $("#aaa").hide();
				// });
				
			
               //$("#dbl").click(function(){
   //          	$("#aa").hide();
   //          	$("#bb").show();
   //              $("dd").show();
   //              $("#cc").show();
   //              $("#c").html("Diploma%");

   //          });
   //          $("#dmt").click(function(){
   //          	$("#aa").show();
   //          	$("#bb").show();
   //              $("dd").show();
   //              $("#cc").show();
   //              $("#c").html("12th%");
   //          });
   //          $("#dbb").click(function(){
   //          	$("#aa").hide();
   //          	$("#bb").show();
   //              $("dd").show();
   //              $("#cc").show();
   //              $("#b").html("BBA%");
   //          });

			$("#back_button").click(function() {
				window.open("3.html","_self");
			});

			$(".chips").material_chip();

			$(".datepicker").pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15 // Creates a dropdown of 15 years to control year
  			});
        
			   $("#bbi").show();
        		$("#bpw").hide();
        		$("#br").hide();
        		$("#baq").hide();
        		$("#bs").hide();

        	$("#abi").click(function(){
        		$("#bbi").show();
        		$("#bpw").hide();
        		$("#br").hide();
        		$("#baq").hide();
        		$("#bs").hide();
        		$("#headingtext").html("Basic Info.");
        	});

        	$("#apw").click(function(){
        		$("#bbi").hide();
        		$("#bpw").show();
        		$("#br").hide();
        		$("#baq").hide();
        		$("#bs").hide();
        		$("#headingtext").html("Password");
        	});

        	$("#ar").click(function(){
        		$("#bbi").hide();
        		$("#bpw").hide();
        		$("#br").show();
        		$("#baq").hide();
        		$("#bs").hide();
        		$("#headingtext").html("Resume");
        	});

        	$("#aaq").click(function(){
        		$("#bbi").hide();
        		$("#bpw").hide();
        		$("#br").hide();
        		$("#baq").show();
        		$("#bs").hide();
        		$("#headingtext").html("Academic Qualification");
        	});

        	$("#as").click(function(){
        		$("#bbi").hide();
        		$("#bpw").hide();
        		$("#br").hide();
        		$("#baq").hide();
        		$("#bs").show();
        		$("#headingtext").html("Skills");
        		
        	});
        	
        	$("#btna").click(function(){
        			var g="male";
        			
        			if($("#gfemale")["0"].checked==true)
        			g="female";

        			if($("#gother")["0"].checked==true)
        			g="others";

        		console.log("clicked");
        		$.post("functionupdate.php",{

			        finame:$("#firstname").val(),
			        laname:$("#last_name").val(),
			        faname:$("#fname").val(),
			        dateofb:$("#dofb").val(),
			        // course:$("#courseselect").val(),
			        branch:$("#aaa" ).val(),
			        add:$("#address").val(),
			        ph:$("#contact").val(),
			        mail:$("#mail").val(),
			        gender:g,
					},function(data){
					        alert(data);
					        window.open("update.php","_self");
					      });
        	});

		});

	</script>  

  	
	</body>
	</html>