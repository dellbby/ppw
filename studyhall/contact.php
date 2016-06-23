<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>StudyHall.com | Contact</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container"> 
      
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
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="locations.php">Locations</a></li>
            <li role="presentation"><a href="spotlight.php">Spotlight</a></li>
            <li role="presentation"><a href="blog.php">Blog</a></li>
            <li role="presentation" class="active"><a href="contact.php">Contact</a></li>
          </ul>
           
        </nav>
       
        
        <div class="logo">
        <a href=index.html><img src="images/logo.png"></a>
      </div></div>';
	  echo $echoText;
?>
      
      
<div class="content">
     <BR>
        <h5>Contact</h5>

      <div id="contactbox">
      <h6> Need help? Check out our FAQ</h6>
      We might have already answered your question in our <b><a href=faq.php>FAQ</a> </b>section,<BR> but if you can't find the answer, please fill out the contact form below.
      <BR><BR>
      
      
      <div id="contactinfo"> 
     <h6> Email: Info@thestudyhall.com<BR>
     Customer Service: (818) 123-3456<BR>
     Fax: (818) 344-4454</h6>
     <img src="images/ig.png"> <img src="images/twitter.png"> <img src="images/fb.png"> <a href=http://thestudyhallblog.tumblr.com/><img src="images/tumblr.png"></a>
     </div>

<div id="form">
      
<script type="text/javascript" src="https://form.jotform.com/jsform/61307118551146"></script>
      
      </div>

     <div id="clear"></div>
</div>
      <div class="row marketing">


</div>
<?php include 'footer.php'; ?>
      <BR />