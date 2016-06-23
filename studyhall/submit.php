<?php
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=studyhall;port=8890', $user, $pass);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>StudyHall.com | Submit a Location</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
    
      <?php include 'header.php'; ?>
      <BR />
      
      <BR>
<div class="content">
<BR>
    
        <h2> Submit a Location</h2>
                <div class="boxed">

  <?php
session_start();

	  if(!isset($_SESSION['LoggedIn'])) 
      $echoText .=  '';
	  else {
	  	$echoText .=  'Welcome, <a href=userpanel.php>';
		
		$echoText .= $_SESSION["username"]. '</a>.<br> ';
	  }
     
     
        
	  echo $echoText;
?>


 
 <h6>Links</h6>
<a href="locations.php" class="link1">View all locations<BR />
<a href="submit.php" class="link1">Submit a location</a></br>
<a href="spotlight.php" class="link1">Spotlight of the Month</a><br />
<BR />
<a href="contact.php" class="link1">Contact Us</a><br />


</div>

<div id="wrap">
        
    <h3>Submit:</h3><h8>
    Please note the following when submitting a location:<BR />
    - Do not submit a location that is already on our locations page.<BR />
    - It takes up to 5 business days for a submission to be approved.<BR />
    - You will <b>not</b> be notified if your submission was approved or denied, so please check our website.<br />
    - You will <b>not</b> not be told why your submission was not approved, if it was.
                   
                   <HR>
                   <script type="text/javascript" src="https://form.jotform.com/jsform/61672240769158"></script>
      </div>   <div id="clear"></div>
</div>


      <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />