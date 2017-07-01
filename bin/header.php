<?php
include 'validate.php';
include 'dbconn.php';

      if(!validate()){
        header("Location: ../index.php");
      }

      if(isset($_COOKIE['userid']))
        {
             $query= "SELECT type From logindetail Where userid='".$_COOKIE['userid']."'";

            $result=mysqli_query($conn,$query);

           $dbarray = mysqli_fetch_object($result);
        
           $val=$dbarray->type;
          
           Mysqli_free_result($result);
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
<body >

<!-- List for profile -->
<ul id="username" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li class="divider"></li>
  <li><a id="logoutuser">Logout</a></li>
</ul>


<nav class="cyan darken-2">
        <div class="nav-wrapper">
         <a href="#!" class="brand-logo left hide-on-small-only"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>
            <a href="#!" class="brand-logo right hide-on-med-and-up"><img  src="../sources/images/logos/logoiimt.png" alt="iimtlogo"  class="responsive-img" style="max-height:60px !important"  ></a>
            <ul class="right">
              <li ><a class="dropdown-button" href="#!" data-activates="notifications-dropdown"><span class="hide-on-small-only">Notifications</span><i class="material-icons right hide-on-small-only">add_alert</i></a>
              </li>
              <li><a class="dropdown-button" href="#!" data-activates="username"><span class="hide-on-small-only">UserName</span><i class="material-icons right hide-on-small-only">perm_identity</i></a>
             </li>
              </ul>
            
             <div class="hide-on-med-and-up left">
               <a class="button-collapse waves-effect waves-light left" href="#!" data-activates="slide-out">
               <i class="material-icons left">menu</i></a>
            </div>
         
        </div>

    
        <!-- SIDE NAV MENU (BOTH SMALL AND LARGE) -->
        <div>
        <ul id="slide-out" class="side-nav fixed leftside-navigation" style="position:relative; height:100vh; overflow-y:scroll;">
	         <li class="user-details cyan darken-2">
	              <li><div class="userView">
	               <div class="background ">
	                  <img src="../sources/images/logos/user-bg.jpg">
	                 </div>
	                  <a href="#!user"><img class="circle" src="../sources/images/logos/logoiimt.png" alt="Profile"></a>
	                  <a href="#!name"><span class="white-text name">User Name</span></a>
	                  <a href="#!email"><span class="white-text email">abc@gmail.com</span></a>
	                </div>
	            </li>
	 
	 

                   <li><?php if($val!="normal")
                        { 
                        echo '<a href="#!">Notifications</a>';
                        }
                        else
                        {
                         echo '<a href="#!">Notifications</a>'; 
                        }
                 	?>
              </li>
 				<li><div class="divider"></div></li>
	            <li> 
	            	<?php if($val!="normal")
	                  { 
	                   echo '<a class="waves-effect" href="sendinvites.php" data-activates="invites_large_admin">Send Invites</span></a>';
	                   }
	                   else
	                   {
	                    echo '<a href="#!" class="collection-item">INVITES</a>'; 
	                   } 
	                   ?>
	            </li>
           		
              <li><div class="divider"></div></li>
                   <li><?php if($val!="normal")
                        { 
                        echo '<a href="#!">Accepted Invites</a>';
                        }
                        else
                        {
                         echo '<a href="#!">Accepted Invites</a>'; 
                        }
                    ?>
              </li>
            
              <li><div class="divider"></div></li>
                   <li><?php if($val!="normal")
                        { 
                        echo '<a href="showquery.php">Query</a>';
                        }
                        else
                        {
                         echo '<a href="querypage.php">Query</a>'; 
                        }
                    ?>
              </li>
          		<li><div class="divider"></div></li>
          		<li><a class="waves-effect" href="#!" id="mobile-logout">Logout</a></li>
          		<li><div class="divider"></div></li>
          	</ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          </div>

                
           <!-- notifications-dropdown -->
                  
                    <ul id="notifications-dropdown" class="dropdown-content" style="position:relative;">
                      <li>
                        <a href="#!">one</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!">two</a>
                      </li>
                    </ul>

</nav>

  

</body>
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