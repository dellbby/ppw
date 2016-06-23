<?php
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=studyhall;port=8889', $user, $pass);
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

    <title>StudyHall.com | Spotlight</title>
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
            <li role="presentation" class="active"><a href="spotlight.php">Spotlight</a></li>
            <li role="presentation"><a href="blog.php">Blog</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
          </ul>
           
        </nav>
       
        
        <div class="logo">
        <a href=index.html><img src="images/logo.png"></a>
      </div></div>';
	  echo $echoText;
?>
      
<div class="content">
<div id="container">
      <BR />
        <h2>Spotlight of the Month: Revo Cafe</h2>
     
       <div id="lcontent">

 <img src="images/revo/revo5.png" align="left" style="PADDING-RIGHT: 6px">
            <h8> <b>Revo Cafe</b> is a small cafe located in Los Angeles, CA right next to Glendale. Great for group studying and crepe eating. They have monthly event with live music and great for art lovers! Location is great for big or small groups. Revo Cafe is owned by Harut and is best known for their Revo latte which was recently taken off the menu, but still being served. The cafe owner, Harut hopes to add more events in the summer. The cafe is decorated with art all around, from the art painted on the walls to the actual tables you can study on. The cafe has a "revolutionary" vibe and is highly free spirited. The owner is hoping to update the current menu and website. 
<BR /><BR />
<BR />
<h3>Add this location to your favorites

<?php 

	
	include_once('db_connect.php');
	
	$username = "";
	$favorited = false;
	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_array($result)) {
				$favorited = $row['revo'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=revo"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=revo"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>
    
    </h3>
</h8>
<BR>
</div><div id="clear"></div>
            
            <h5> Why did we choose Revo?</h5>
             <h8> <table>
              <tr>
    <td>-Their amazing Revo Latte</td>
    <td>-The location is open until late</td>
  </tr>
  <tr>
    <td>-Their fresh pastries</td>
    <td>-The ambient music</td>
  </tr>
  <tr>
    <td>-Comfortable seating</td>
    <td>-Friendly Staff</td>
  </tr>
    <tr>
    <td>-The Artwork</td>
    <td>-The paninis</td>
  </tr>
</table>
<BR>
<HR><BR>
<a href="revo.php" class="link1">View Revo Cafe's full page here>></a>
    
    </div>






         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />