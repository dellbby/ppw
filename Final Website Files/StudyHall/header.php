<?php
session_start();

$echoText = '<div class="header clearfix">';
      
	  if(!isset($_SESSION['LoggedIn'])) 
      $echoText .=  '<div id="loginn"><a href="login.php" class="link3">Login</a> | <a href="signup.php" class="link3">Sign Up</a></div>';
	  else {
	  	$echoText .=  '<div id="loginn">Welcome: <a href=userpanel.php class="link3">';
		
		$echoText .= $_SESSION["username"]. '</a> | <a href="UserHandler.php/?logout" class="link3">Log Out</a> </div> ';
	  }
     
        $echoText .= '<nav>
          <ul class="nav nav-pills ">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="locations.php">Locations</a></li>
            <li role="presentation"><a href="spotlight.php">Spotlight</a></li>
            <li role="presentation"><a href="blog.php">Blog</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
          </ul>
           
        </nav>
       
        
        <div class="logo">
        <a href=index.html><img src="images/logo.png"></a>
      </div></div>';
	  echo $echoText;
?>


