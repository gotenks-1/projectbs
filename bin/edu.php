<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styl.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="fonts/icons/icon.woff2"> -->
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
<nav class="nav-extended">
    <div class=" nav-wrapper center-align">
      <div class="col s12">
        <a id="bp" class="breadcrumb">BASIC PROFILE</a>
        <a id="ed" class="breadcrumb">EDUCATIONAL DETAILS</a>
        <a id="ur" class="breadcrumb">UPLOAD RESUME</a>
      </div> 
    </div>
  </nav>


 <div href="#" id="bpp" class="container z-depth-4">
     <div class="row">
         <div class="col s12">
             <div class="row red z-depth-3">
                   <span><h4 style="margin-left:35%">Educational Details</h4></span>

              </div>
         </div>
    </div>
<div id="ed" class="row center-align">
<div class="container center-align z-depth-5" id="#btech">
<div class="row">
    <div class="col s12">

       <div class="row">
        <div class="input-field offset-s3 col s6 offset-s3">
        <i class="material-icons prefix">grade</i>
          <input id="tenpr" type="text" class="validate">
          <label for="10pr">10th %</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field offset-s3 col s6 offset-s3">
        <i class="material-icons prefix">grade</i>
         
          <input id="twelpr" type="text" class="validate">
          <label for="twelpr">12th %</label>
        </div>
      </div> 
       <div class="row">
        <div class="input-field offset-s3 col s6 offset-s3">
        <i class="material-icons prefix">grade</i>
          <input id="bpr" type="text" class="validate">
          <label for="bpr">BTECH %</label>
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
   </div>
  </div>
 </div>

<script type="text/javascript">
  $(document).ready(function(){
      
       
    $('select').material_select();
  
   
    $("#submitbutton").click(function(){
      console.log("clicked");

      $.post("functionmark.php",{

         bmarks:$('#bpr').val(),
         tenper:$('#tenpr').val(),
         twelper:$('#twelpr').val(),
      },function(data){
        alert(data);
      });
      window.open("upld.html","_self");
    });

  });
</script>


</body>
</html>