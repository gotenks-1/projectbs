<!DOCTYPE html>
<html>
<head>
    <title>JOB VACANCY</title>
    <link rel="stylesheet" type="text/css" href="../css/styl.css">
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <script type="text/javascript" src = "../js/jquery.js"></script>
    <script type="text/javascript" src ="../js/materialize.js"></script>
</head>
<header>
     <nav>
    <div class="nav-wrapper" style="display: flex;align-items: center;justify-content: center;">
       <h3 style="margin:0px"> JOB VACANCY </h3>
      <ul id="nav-mobile" class="right hide-on-med-and-down"></ul> 
    </div>
  </nav>
</div>
</header>
<body>
<div class="row">
    <form class="col s12">
      
        <div class="input-field ">
          <input id="company_name" type="text">
          <label for="company_name">COMPANY NAME</label>
        </div>
      </form>
      </div>
      <form action="#">
   
      <div class="row">
      <div class="col s12">
       <div class="file-field input-field">
          <input id="logoinput" type="file">
        <label for="logoinput">SELECT FILE FOR COMPANY LOGO</label>
      <!-- <div class="file-path-wrapper"> -->
        <input class="file-path validate" type="text">
      </div>
</div>
    </div>
      </div>
  </form>
  <div class="row">
        <div class="input-field col s12">
          <input id="job_profile" type="text">
          <label for="job_profile">JOB PROFILE</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="job_location" type="text">
          <label for="job_location">JOB LOCATION</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="eligiblity_criteria" class="materialize-textarea"></textarea>
          <label for="eligiblity_criteria">ELIGIBLITY CRITERIA</label>
        </div> 
        </div>
      
  <div class="row">
        <div class="input-field col s12">
          <textarea id="company_description" class="materialize-textarea"></textarea>
          <label for="company_description">COMPANY DESCRIPTION</label>
        </div>
         <div class="row">
        <div class="input-field col s12">
          <textarea id="job_description" class="materialize-textarea"></textarea>
          <label for="job_description">JOB DESCRIPTION</label>
        </div>
         <div class="row">
        <div class="input-field col s12">
          <textarea id="required_skills" class="materialize-textarea"></textarea>
          <label for="required_skills">REQUIRED SKILLS</label>
        </div>
        <div class="row">
        <div class="col s12" style="display: flex;justify-content: center;">
<button class="btn waves-effect waves-light center" type="submit" name="action" id="btnjob">CREATE VACANCY
    <i class="material-icons left"></i>
  </button>
  </div>
  </div>



<script type="text/javascript">
  $(document).ready(function(){

    $("#btnjob").click(function(){


      console.log("clicked");

      $.post("functionjobvacancy.php",{
        cname:$("#company_name").val(),
        jprofile:$("#job_profile").val(),
        jlocation:$("#job_location").val(),
        ecriteria:$("#eligiblity_criteria").val(),
        cdescription:$("#company_description").val(),
        jdescription:$("#job_description").val(),
        rskills:$("#required_skills").val(),
      },function(data){
        alert(data);
      });

    });




  });
</script>


</body>
</html>
