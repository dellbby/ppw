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

    <title>StudyHall.com | Locations | User Panel</title>

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
    
        <h2>My Account</h2>
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
        
    <h3>Your Favorites</h3><h8>
    
   		<?php
		
			function getDescription($param) {
				$descrip = "";
				switch($param) {
					case "zephyrs":
						$descrip = "<a href=zephs.php>Zephyrs</a>";
						break;
					case "revo":
						$descrip = "<a href=revo.php>Revo Cafe</a>";
						break;
					case "simply":
						$descrip = "<a href=simply.php>Simply Coffee</a>";
						break;
						
					case "bpig":
						$descrip = "<a href=bpig.php>Bourgeious Pig</a>";
					
						break;
					
					case "bns":
						$descrip = "<a href=bandb.php>Bricks & Scones</a>";
					
						break;
					case "prisgourmet":
						$descrip = "<a href=priscillas.php>Priscillas</a>";
					
						break;
					case "crave":
						$descrip = "<a href=crave.php>Crave Cafe</a>";
					
						break;
					case "uratu":
						$descrip = "<a href=uratu.php>Uratu</a>";
					
						break;
					case "aroma":
					$descrip = "<a href=aroma.php>Aroma</a>";
					
						break;
					case "beabeas":
					$descrip = "<a href=beabeas.php>Bea Bea's</a>";
					
						break;
					default: 
						$descrip = "Contact admin for help. Error code [$param-01]";
						break;
				}
				return $descrip;
			}
		
			include 'db_connect.php';
			
			$username = $_SESSION["username"];
			$query = "SELECT * FROM users WHERE username = '$username'";
			$checks = array( "zephyrs", "revo", "simply", "bpig", "bns", "prisgourmet", "crave", "uratu", "aroma", "beabeas" );
			
			$result = mysql_query($query) or die(mysql_error());
			if(mysql_num_rows($result) > 0) {
				while($row = mysql_fetch_array($result)) {
					for($i = 0; $i < sizeof($checks); $i++) {
						$tag = $row[$checks[$i]];
						if($tag == 1) {
							echo getDescription($checks[$i]). "<br>";	
						}
					}
				}
			}
		
		
		?>
    
    
    
    
    
 
                   
                   <HR>
      </div>   <div id="clear"></div>
</div>


      <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />