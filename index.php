<?php
include 'bin/validate.php';

if(validate()){
  header("Location: bin/header.php");
}

?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
    <link href="css/materialize.css" rel="stylesheet" type="text/css">

    <link href="css/styl.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
  </head>

  <body class="cyan loaded" style="display:flex;align-items:center">

    <div class="container">
      <div id="login-page" class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4 z-depth-4 card-panel">
          <form class="login-form">

            <div class="row">
              <div class="input-field col s12 center">
                <img src="sources/images/logos/logoiimt.png" alt="Logo Image" class="responsive-img">
                <p class="center login-form-text">Placement Drive</p>
              </div>
            </div>

            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="first_name" type="text">
                <label for="first_name">Username</label>
              </div>
            </div>

            <div class="row margin">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password">
                <label for="password">Password</label>
              </div>
            </div>

            <div id="login-msg-div" class="row">
              <div class="input-field col s12">
                <span id="login-msg"></span>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <a id="submit_button" class="waves-effect waves-light btn" style="width:100%">Login</a>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>




    <script type="text/javascript">


        $(document).ready(function() {
          // $("#submitbutton").click(function(){
          //     alert("yo");
          // });

          $("#login-msg").append("login failed");
          $("#login-msg-div").hide();

          $("#submit_button").click(function(){

            var usrid=$("#first_name").val();
            var passwd=$("#password").val();

            $.post("bin/loginvalidate.php",{userid:usrid,pass:passwd},function(data){
              if(data=="success"){
                window.open("bin/header.php","_self");
              }
              else if (data=="failed") {
                $("#login-msg-div").show();
              }
              else {
                alert("Something went wrong!Please refresh your browser");
              }
            });

          });

          });



    </script>
  </body>
</html>
