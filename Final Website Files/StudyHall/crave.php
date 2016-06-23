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

    <title>StudyHall.com | Locations | Crave Cafe</title>

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
      
        <h2>Crave Cafe</h2>
     
       <div id="lcontent">

 <img src="images/crave/crave1.png" width="433" height="321" align="left" style="PADDING-RIGHT: 6px">
            <h8> <b>Crave Cafe</b> is located in Studio City and is mostly known for their deserts. They have everything from Waffles, pancakes, and Crepes and you are able to customize your own to your liking. They also have a large menu with a selection of food that you can order from Sandwhiches, soup, and salads. This location can get busy at times and difficult to find a spot to sit, but it has an indoor and outdoor seating area. 
            
            
<BR /><BR />
<h4> Location Cons:</h4>
-Not enough seating

<BR /><BR /><BR /><BR /><BR />
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
				$favorited = $row['crave'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=crave"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=crave"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>
    
    </h3>

</h8>
<BR>
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 11992 Ventura Blvd, <BR />
       Studio City, CA 91604


<HR>
      <B>PHONE NUMBER:</B> (818) 763-9000 </BR>
      <HR>
      <b>PARKING:</b> Street parking and private lot
      <HR>                                                               
<b>HOURS:</b><BR /> Monday - Friday -  7:00 am - 5:00 pm<BR>
Saturday 8:00 am - 5:00 pm<br />
Sunday - 8:00 am -3:00 pm

      <BR><BR>
      <a href="http://www.cravecafestudiocity.com/" class="link1" target="_blank">Click here to view their website</a>
      
      

  </div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/crave/crave4.png" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=crave1.src" name="crave1" src="images/crave/crave1.png" alt="" />
	<img onmouseover="preview.src=crave2.src" name="crave2" src="images/crave/crave2.png" alt="" />
    <img onmouseover="preview.src=crave3.src" name="crave3" src="images/crave/crave3.png" alt="" />
    <img onmouseover="preview.src=crave4.src" name="crave4" src="images/crave/crave4.png" alt="" />

 
</div></div> <!-- Close the gallery div -->
    
    
    
  </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />