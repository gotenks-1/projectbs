<?php
if(isset($_GET["email"])){
    include "dbconn.php";

    $email=$_GET["email"];
    $qry="select * from TempAccount where email='$email'";
    $rs=$conn->query($qry);
    if(mysqli_num_rows($rs)!=1){
      
      header("Location: ../index.php");
    }
}
else {
  header("Location: ../index.php");
}

 ?>


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
              <p class="center login-form-text cyan-text">Placement Drive(Email confirmation)</p>
            </div>
          </div>

          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="code" type="text">
              <label for="code">Enter Code</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <a id="confirmcode" class="waves-effect waves-light btn" style="width:100%">Confirm Code</a>
            </div>
          </div>

        </form>
      </div>
    </div>

        <script type="text/javascript">
          $(document).ready(function() {
            $("#confirmcode").click(function(){
              $.post('validatecode.php', {uemail:'<?php echo $_GET["email"];?>',ucode:$('#code').val()}, function(data) {
                if(data==1)
                {
                  window.open("../index.php","_self");
                }
                else {
                  alert("Enter valid code");
                }
              });
            });
          });

        </script>
  </body>
</html>
