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

    <title>StudyHall.com | Locations | Priscillas Gourmet Coffee</title>

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
      
      
      
<div class="content">
<div id="container">
      
        <h2>Priscillas Gourmet Coffee Tea & Gifts</h2>
     
       <div id="lcontent">

 <img src="images/priscillas/p5.png" align="left" style="PADDING-RIGHT: 6px">
            <h8> Opened in 1970s, Priscillas is a small family owned coffee shop located in Burbank, CA. The area is a quiet location and neighborhood sourrounded by tall buildings. Most customers come to read or do not stay for very long because the location does not have any outlets. This location is great for reading and meeting up with friends for a cup of coffee or just relaxing.
            
            <BR /><h4>Location Cons</h4>
            -No wall outlets
            <BR />
            -No specific parkinglot
            



<BR /><BR /><BR />
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
				$favorited = $row['prisgourmet'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=prisgourmet"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=prisgourmet"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>

</h8>
<BR>
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 4150 Riverside Drive<BR />
Burbank, California 91505 <BR>
<HR>
      <B>PHONE NUMBER:</B> (818) 843-5707  </BR>
      <HR>
      <b>PARKING:</b> Street parking is located around the location.<BR>
      <HR>                                                               
<b>HOURS:</b><BR /> Monday - Friday: 6am to 11pm<BR />
Saturday/Sunday: 7am to 11pm
      <BR><BR>
      <a href="http://www.priscillascoffee.com/" class="link1" target="_blank">Click here to view their website</a>
      
      

			</div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/priscillas/p1.png" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=p1.src" name="p1" src="images/priscillas/p1.png" alt="" />
	<img onmouseover="preview.src=p2.src" name="p2" src="images/priscillas/p2.png" alt="" />
    <img onmouseover="preview.src=p3.src" name="p3" src="images/priscillas/p3.png" alt="" />
    <img onmouseover="preview.src=p4.src" name="p4" src="images/priscillas/p4.png" alt="" />

 
</div></div> <!-- Close the gallery div -->
    
    
    
    </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />