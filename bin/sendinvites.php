<!-- <DOCTYPE html>

<html lang=en>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
</head>

<link rel="stylesheet" type="text/css" href ="../css/materialize.css"/>
<link rel="stylesheet" type="text/css" href ="../css/styl.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/cookiejs.js"></script>
<script type="text/javascript" src="../js/materialize.js"> </script>


 <body> -->
  <!-- <div class="container"> -->
  		<!-- <div class="card-panel teal lighten-2"> -->

  	  <h5 class="card-panel teal lighten-2" style="color:white">SEND INVITES</h5>
	  <div class="">
	    <form class="col s12">
 	      <!-- criteria for sending invites -->
 	      <div>
 	      	 <h5>Criteria:</h5>
 	      	 <div>
 	      	 	<label for="course">Course</label>
 	      	 	<div class="chips chips-autocomplete" id="course"></div>
 	      	 </div>
	    	 <div>
 	      	 	<label for="branch">Branch (if any)</label>
 	      	 	<div class="chips chips-autocomplete" id="branch"></div>
 	      	 </div>
 	      	 <div style="padding-top:1px">
 	      		 <p class="range-field">
 	      		 <label for="percentage">Percentage (min)</label>
      			<input type="range" id="percentage" min="40" max="100" />
    			</p>
 	      	 </div>
         </div>
		<!-- other details block -->

         <div>
 	      	 <h5>Other Details:</h5>
 	      	 <div>
 	      	 	<label for="datepick">Date</label>
 	      	 	<input type="date" class="datepicker" id="datepick">
 	      	 </div>
 	      	 <div>
 	      	 	<label for="timepick">Time</label>
 	      	 	<input type="date" class="timepicker" id="timepick">
 	      	 </div>
 	      	 <div>
 	      	 	<label for="venue">Venu</label>
 	      	 	<input type="text" id="venue" data-length="100">
 	      	 </div>
			<div>
 	      	 	<label for="industry">Industry/Company</label>
 	      	 	<input id="industry" type="text" data-length="150">
          	</div>
          	<div>
 	      	 	<label for="website">Company Website</label>
 	      	 	<input id="website" type="url" data-length="200">
          	</div>

 	      	 <div class="input-field col s12">
		        <i class="material-icons prefix">mode_edit</i>
		        <label for=msg>Message</label>
		        <textarea id="msg" name='msg' class="materialize-textarea"></textarea>
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
         </div>
 	  	</form>
	  </div>
 <!-- </div> -->

<!-- </body> -->

<script>
	 $(document).ready(function(){
	 	$('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'B.Tech': null,
        'B.C.A': null,
        'B.B.A': null,
        'M.C.A': null,
        'M.B.A': null,

        // auto-comp for branches
        'C.S': null,
        'I.T': null,
        'E.C': null,
        'Mechanical': null,
        'Civil': null,
        },
      limit: Infinity,
      minLength: 1
    }
  });

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

  $('.timepicker').pickatime({
    default: 'now', // Set default time
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

   });



</script>
<!-- </html> -->
