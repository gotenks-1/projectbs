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

    <div class="container row" >

      <div class="col s12 m6 l4 offset-m3 offset-l4">

      <div class="row">


        <div class="row" style="margin-bottom:0px">
          <ul class="tabs">
            <li class="tab col s6"><a href="#login-page">Login</a></li>
            <li class="tab col s6"><a href="#register-page">Register</a></li>
          </ul>
        </div>

        <div class="row" id="register-page">
          <!-- start register page -->
            <div class="col s12 white z-depth-4">
              <form class="login-form">

                <div class="row">
                  <div class="input-field col s12 center">
                    <img src="sources/images/logos/logoiimt.png" alt="Logo Image" class="responsive-img">
                    <p class="center login-form-text cyan-text">Placement Drive</p>
                  </div>
                </div>

                <div class="row margin" style="margin-bottom:0px">
                  <div class="input-field col s7" style="margin-top:0px">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="register_first_name" type="text" >
                    <label for="register_first_name">First Name</label>
                  </div>
                <!-- </div>

                <div class="row margin"> -->
                  <div class="input-field col s5" style="margin-top:0px">

                    <input id="register_last_name" type="text" >
                    <label for="register_last_name">Last Name</label>
                  </div>
                </div>

                <div class="row" style="margin-bottom:0px">
                  <div class="input-field col s12" style="margin-top:0px">
                    <i class="material-icons prefix">perm_identity</i>
                    <input id="register_userid" type="text" >
                    <label for="register_userid">Username</label>
                  </div>
                </div>

                <div class="row" style="margin-bottom:0px">
                  <div class="input-field col s12" style="margin-top:0px">
                    <i class="material-icons prefix">email</i>
                    <input id="register_email" type="email" class="validate" >
                    <label for="register_email">Email</label>
                  </div>
                </div>

                <div class="row" style="margin-bottom:0px">
                  <div class="input-field col s12" style="margin-top:0px">
                    <i class="material-icons prefix">lock</i>
                    <input id="register_pass" type="password" >
                    <label for="register_pass">Password</label>
                  </div>
                </div>


                <div class="row" style="margin-bottom:0px">
                  <div class="input-field col s12">
                    <a id="register_button" class="waves-effect waves-light btn" style="width:100%">Register</a>
                  </div>
                </div>

              </form>
            </div>
          <!-- registration page goes here -->
        </div>


      <!-- start of login page -->
      <div id="login-page" class="row">
        <div class="col s12 white z-depth-4">
          <form class="login-form">

            <div class="row">
              <div class="input-field col s12 center">
                <img src="sources/images/logos/logoiimt.png" alt="Logo Image" class="responsive-img">
                <p class="center login-form-text cyan-text">Placement Drive</p>
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
              <div class="input-field col s12" style="margin-top:0px;display:flex;flex-direction:row-reverse">
                <span><a id="forgot-msg" href="#" class="red-text">Forgot Password?</a></span>
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
      <!-- end of login page -->

      <!-- end of tabs container -->
    </div>

</div>
    </div>
    <script type="text/javascript">


        $(document).ready(function() {

          $("#submit_button").click(function(){

            // var usrid=$("#first_name").val();
            // var passwd=$("#password").val();

            $.post("bin/loginvalidate.php",{userid:$("#first_name").val(),pass:$("#password").val()},function(data){
              if(data=="success"){
                window.open("bin/header.php","_self");
              }
              else if (data=="failed") {
                alert("Login failed.Invalid username or Password");
              }
              else {
                alert("Something went wrong!Please refresh your browser");
              }
            });

          });

          $("#register_button").click(function() {
              $.post('bin/registervalidate.php',{
              fname:$("#register_first_name").val(),
              lname:$("#register_last_name").val(),
              ruserid:$("#register_userid").val(),
              email:$("#register_email").val(),
              rpass:$("#register_pass").val()
            }, function(data) {
              if(data=="error:0"){
                alert("Username already exists!!Choose another.");
              }
              else if (data=="error:1") {
                alert("Email address is already registered.")
              }
              else if (data=="success"){
                window.open("bin/confirmcode.php?email="+$("#register_email").val(),"_self");
              }
              else{
                alert("Something went wrong.Please refresh your browser and try again");
              }
            });

          });

          $("#forgot-msg").click(function() {
            window.open("bin/forgetpassword.php","_self");
          });

          });



    </script>
  </body>
</html>
