<?php
include 'validate.php';
include 'dbconn.php';

      if(!validate()){
        header("Location: ../index.php");
      }
?>

<DOCTYPE html>

<html lang=en>

<head>
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    	<link rel="stylesheet" type="text/css" href ="../css/materialize.css"/>
    	<link rel="stylesheet" type="text/css" href ="../css/styl.css"/>
    	<script type="text/javascript" src="../js/jquery.js"></script>
    	<script type="text/javascript" src="../js/cookiejs.js"></script>
    	<script type="text/javascript" src="../js/materialize.js"></script>
</head>


<body>

<div class="row" style="margin:0px">
    <nav class="cyan darken-2">
            <div class="nav-wrapper">
             <a href="#!" class="brand-logo left hide-on-med-and-down"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>
                <a href="#!" class="brand-logo right hide-on-large-only"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>

                 <div class="hide-on-large-only left">
                   <a class="button-collapse waves-effect waves-light left" href="#!" data-activates="slide-out" id="sidenavshow">
                   <i class="material-icons left">menu</i></a>
                </div>

                <div class="hide-on-med-and-down right" style="margin-right:20px">
                    <span>Welcome</span>
                    <a href="#" class="profilepage"><?php echo $_SESSION["userid"];?> !</a>
                </div>

            </div>
    </nav>
</div>

<div class="row" style="display:flex;margin:0px">
        <!-- SIDE NAV MENU (BOTH SMALL AND LARGE) -->

              <ul id="slide-out" class="side-nav fixed leftside-navigation" style="position:relative; height:100vh; overflow-y:inherit;box-shadow:0 0 0 0">
      	            <!-- <li class="user-details cyan darken-2"> -->
      	            <li><div class="userView">
      	               <div class="background ">
      	                  <img src="../sources/images/logos/user-bg.jpg">
      	                 </div>
      	                  <a href="#!user"><img class="circle" src="../sources/images/logos/logoiimt.png" alt="Profile"></a>
      	                  <a href="#!name" class="profilepage"><span class="white-text name"><?php echo $_SESSION["userid"];?></span></a>
      	                  <a href="#!email" class="profilepage"><span class="white-text email"><?php echo $_SESSION["email"];?></span></a>
      	                </div>
      	            </li>
                    <?php
                        include 'dbconn.php';
                        $qry="select * from `rights` where `user`='".$_SESSION["type"]."'";
                        $rs=$conn->query($qry);
                        foreach ($rs as $r):
                    ?>
                    <li><a href="#!" class="adminpanel" data-value="<?php echo $r['rightuse'];?>"><span><?php echo $r["rightdisplay"];?></span></a></li>
                    <li><div class="divider"></div></li>
                    <?php endforeach;?>
                		<li><a class="waves-effect" href="#!" id="mobile-logout">Logout</a></li>
                		<li><div class="divider"></div></li>
              </ul>

          <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->

          <div id="maincontainer" style="flex-grow:1;margin-left:10px" class="z-depth-3">

            this is main container

        </div>


</div>
<!-- </nav> -->

</body>
<script>
             $(document).ready(function(){

               //main contioner load
              //  $("#maincontainer").load("sendinvites.php");

               $(".profilepage").click(function() {
                 /* Act on the event */
                 $("#maincontainer").load("userprofile.php");
               });

               $(".adminpanel").click(function() {
                $("#maincontainer").html("This is "+$(this).data("value")+".php Page");
               });

              $(".button-collapse").sideNav();
              // Initialize collapsible (uncomment the line below if you use the dropdown variation)
              //$('.collapsible').collapsible();
              $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrainWidth: true, // Does not change width of dropdown to that of the activator
                    hover: false, // Activate on hover
                    gutter: 0, // Spacing from edge
                    belowOrigin: true, // Displays dropdown below the button
                    alignment: 'left', // Displays dropdown with edge aligned to the left of button
                    stopPropagation: false // Stops event propagation
                  }
                );

                $(".button-collapse").sideNav();

                $("#mobile-logout").click(function() {
                  var x=Cookies.get("userid");
                  $.post("logout.php",{id:x},function(data){
                    if(data==1){
                      window.open("../index.php","_self");
                    }
                  });
                });

                $("#logoutuser").click(function() {
                  var x=Cookies.get("userid");
                  $.post("logout.php",{id:x},function(data){
                    if(data==1){
                      window.open("../index.php","_self");
                    }
                  });
                });

            });
        </script>
</html>
