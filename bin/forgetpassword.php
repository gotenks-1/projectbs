<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
    <link href="../css/materialize.css" rel="stylesheet" type="text/css">

    <link href="../css/styl.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
  </head>

  <body class="cyan" style="display:flex;align-items:center">

    <div id="login-page" class="row">
      <div class="col s12 white z-depth-4">
        <form class="login-form">

          <div class="row">
            <div class="input-field col s12 center">
              <img src="../sources/images/logos/logoiimt.png" alt="Logo Image" class="responsive-img">
              <p class="center login-form-text cyan-text">Placement Drive(Password Recovery)</p>
            </div>
          </div>

          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="first_name" type="text">
              <label for="first_name">Enter Username</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <a id="request_pass" class="waves-effect waves-light btn" style="width:100%">Mail Password</a>
            </div>
          </div>

        </form>
      </div>
    </div>

        <script type="text/javascript">
          $(document).ready(function() {
            $("#request_pass").click(function(){
              $.post('sendpasstomail.php', {userid:$("#first_name").val()}, function(data) {
                if(data==1)
                {
                  alert("Password sent successfully to your email");
                  window.open("../index.php","_self");
                }
                else {
                  alert("Enter valid UserID");
                }
              });
            });
          });

        </script>
  </body>
</html>
