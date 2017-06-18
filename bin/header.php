<?php
include 'validate.php';

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
</head>

<link rel="stylesheet" type="text/css" href ="../css/materialize.css"/>
<link rel="stylesheet" type="text/css" href ="../css/styl.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/cookiejs.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>

<body>



<!-- Dropdown logout -->
<ul id="UserName" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li class="divider"></li>
  <li><a id="logoutuser">Logout</a></li>
  </ul>

  <!-- Dropdown NOtifications -->

<ul id="Notificationslarge" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li class="divider"></li>
  <li><a href="#!">two</a></li>

</ul>
<ul id="NotificationsSmall" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li class="divider"></li>
  <li><a href="#!">two</a></li>

</ul>
<nav class="cyan darken-3" >
  <div class="row">
   <div class="">
 		  <a href="#!" class="brand-logo left hide-on-small-only"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>
   		  <a href="#!" class="brand-logo right hide-on-med-and-up"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>
       <ul class="right ">
          <li class=""><a class="dropdown-button " href="#!" data-activates="Notificationslarge"><span class="hide-on-small-only">Notifications</span><i class="material-icons right hide-on-small-only">add_alert</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="UserName"><span class="hide-on-small-only">UserName</span><i class="material-icons right hide-on-small-only">perm_identity</i></a></li>
       </ul>
    </div>
    <!-- Side Navigation for small screen -->
		  <ul id="slide-out" class="side-nav hide-on-med-and-up">
		    <li><div class="userView">
		      <div class="background ">
		        <img src="../sources/images/logos/profile_bg.png">
		      </div>
		      <a href="#!user"><img class="circle" src="../sources/images/logos/logoiimt.png" alt="Profile"></a>
		      <a href="#!name"><span class="white-text name">User Name</span></a>
		      <a href="#!email"><span class="white-text email">abc@gmail.com</span></a>
		    </div></li>
		  	  <li class=""><a class="dropdown-button " href="#!" data-activates="NotificationsSmall
		  	  "><i class="material-icons right">add_alert</i>Notifications</a></li>
		  	  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		   	  <li><a href="#!">Second Link</a></li>
		      <li><div class="divider"></div></li>

		      <li><a id="mobile-logout" class="waves-effect" href="#!">Logout</a></li>
		  </ul>
		  <div class="">
		  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
	  </div>

</nav>





        <script>
             $(document).ready(function(){
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

  </body>

</html>
