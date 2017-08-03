<!DOCTYPE html>
<html>
<head>
	<title>
		new page
	</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/materialize.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
  <link rel="stylesheet" type="text/css" href="../css/styl.css">
	  <link rel="stylesheet" type="text/css" href="fonts/icons/icon.woff2">
 <!--  <style type="text/css" >
    @font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(fonts/icons/icon.woff2) format('woff2');
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
  </style>
 -->
</head>
<body>
<?php
    include 'dbconn.php';
    include 'validate.php';
    $a=$_SESSION["userid"]; 
    $b=$_SESSION["branch"];
    $qry="select * from  $b where userid='$a'";
    $rs=$conn->query($qry);
    $r=$rs->fetch_assoc();
  ?>  

<nav class="nav-extended">
    <div class=" nav-wrapper center-align">
      <div class="col s12">
        <a id="bp" class="breadcrumb" href="#">BASIC PROFILE</a>
        <a id="ed" class="breadcrumb">EDUCATIONAL DETAILS</a>
        <a id="ur" class="breadcrumb">UPLOAD RESUME</a>
      </div> 
    </div>
  </nav>

  <div href="#" id="bpp" class="container z-depth-4">
     <div class="row">
         <div class="col s12">
             <div class="row red z-depth-3">
                   <span><h4 style="margin-left:40%">Basic profile</h4></span>

              </div>
         </div>
    </div>
  
  <div class="container">
    <div class="row">
    <div class="col s12">
      
        
        <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input  id="fname" type="text" class="validate">
               <label for="fname">FIRST NAME</label>
            </div>
        
          <div class="input-field col s6">
             <input  id="lname" type="text" class="validate">
             <label for="lname">LAST NAME</label>
          </div>
          </div>

          <div class="row">
         <div class="col s12">
            <div class="input-field">
              <i class="material-icons prefix">account_circle</i>
              <input  id="ftname" type="text" class="validate">
               <label for="ftname">FATHER'S NAME</label>
            </div>
          </div>
        </div>
        

        <div class="row">
         <div class="col s12">
            <div class="input-field">
              <i class="material-icons prefix">today</i>
               <input type="date" class="datepicker" id="dob">

               <label for="dob">DATE OF BIRTH</label>
            </div>
          </div>
        </div>


<div class="row">
   <div class="input-field">
   <div class="col s6"> 
     <i class="material-icons prefix">library_books</i>
   
    <select id="cselector" disabled selected>
      <option value="" disabled selected><?php echo $_SESSION["branch"];?></option>
      <option value="1">BTECH</option>
      <option value="2">BTECH LATERAL</option>
      <option value="3">MTECH</option>
      <option value="4">BBA</option>
      <option value="5">MBA</option>
      <option value="6">BA/LLB</option>
      <option value="7">POLYTECHNIC</option>
      <option value="8">BPHARMA</option>
    </select>
   
   </div>
<div id="bselectordiv" class="col s6">
 <select id="bselector">
      <option value="" disabled selected>BRANCH</option>
      <option value="1">CSE</option>
      <option value="2">IT</option>
      <option value="3">EC</option>
      <option value="4">ME</option>
      <option value="5">CE</option>
      
    </select>
   

</div>
<!-- <div class="col s6">
  <select>
    <option value="" disabled selected>BRANCH</option>
    <option value="1">MAINTENANCE</option>
    <option value="2">PRODUCTION</option>
  </select>
</div> -->

  </div>
   
   
</div>


        <div class="row">
         <div class="col s12">
             <div class="input-field">
               <i class="material-icons prefix">home</i>
               <input  id="add" type="text" class="validate">
               <label for="add">ADDRESS</label>
             </div>
         </div>
        </div>
        <div class="row">
         <div class="col s12">
           <div class="input-field">
             <i class="material-icons prefix">call</i>
             <input  id="cno" type="text" class="validate">
             <label for="cno">CONTACT</label>
          </div>
         </div>
        </div>
        <div class="row">
         <div class="col s12">
            <div class="input-field">
              <i class="material-icons prefix">email</i>
              <input  id="email" type="text" class="validate">
              <label for="email">EMAIL</label>
            </div>
          </div>
        </div>

         <!-- <div class="row">
          <div class="col s12">
           <div class="input-field ">
           <i class="material-icons prefix">library_books</i>
           <input  id="brh" type="text" class="validate">
           <label for="branch">Branch</label>
           </div>
          </div>
         </div>  -->
    
        <div class="row">
           <div class="col s12">
            <div class="input-field row">
             <div class="col s1">
              <i class="material-icons prefix">perm_identity</i>
              </div>
              <div  class="col s3">
                 <input class="with-gap" name="group3" type="radio" id="male" />
                <label for="male">MALE</label>
              </div>
                <div class="col s3">
                <input class="with-gap" name="group3" type="radio" id="female" />
                <label for="female">FEMALE</label>
               </div>

               <div class="col s5">
                <input class="with-gap" name="group3" type="radio" id="othrs" />
                <label for="othrs">OTHERS</label>
                </div>
            </div>
           </div>
        </div>

     <div class="row">
      <div class="col s12" style="display:flex;flex-direction:row-reverse">
         <button class="btn waves-effect waves-light" type="submit" name="action" id="submitbutton">Submit
             <i class="material-icons right">send</i>
         </button>
  
      </div>
     </div>
    
 </div>

</div>

<!-- starting frst div ends here -->                                                                                                      
</div>
<script type="text/javascript">
  $(document).ready(function(){

    $("#cselector").change(function(){

      var x=$("#cselector").val();
      switch(x){
        case '3':
        case '2':
        case '1': $("#bselector").html('<option value="" disabled selected>BRANCH</option><option value="1">CSE</option><option value="3">EC</option><option value="4">ME</option><option value="5">CE</option>');
          $("#bselectordiv").show();
          $('select').material_select();
          break;
        case '6':
        case '5':
        case '4': $("#bselectordiv").hide();break;
        case '7': $("#bselector").html('<select><option value="" disabled selected>BRANCH</option><option value="1">MAINTENANCE</option><option value="2">PRODUCTION</option></select>');
        $("#bselectordiv").show();
         $('select').material_select();
          break;


      }
    });



      $('.datepicker').pickadate({
    selectMonths: true, //Creates a dropdown to control month
    selectYears: 15 //Creates a dropdown of 15 years to control year
  });

    $('select').material_select();
  
   
    $("#submitbutton").click(function(){

      var g="male";
              
              if($("#female")["0"].checked==true)
              g="female";

              if($("#othrs")["0"].checked==true)
              g="others";

      console.log("clicked");
      $.post("functionprofile.php",{
      finame:$("#fname").val(),
      liname:$("#lname").val(),
      fname:$("#ftname").val(),
      dateob:$("#dob").val(),
      // course:$("#cselector").val(),
      branch:$("#bselector").val(),
      address:$("#add").val(),
      ph:$("#cno").val(),
      email:$("#email").val(),
      gender:g,
    },function(data){
      alert(data);
      window.open("edu.html","_self");
    });

      // window.open("edu.html","_self");
    });

  });
</script>

</body>
</html>