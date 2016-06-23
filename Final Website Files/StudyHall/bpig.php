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

    <title>StudyHall.com | Locations | Bourgeois Pig</title>

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
      
        <h2>Bourgeois Pig</h2>
     
       <div id="lcontent">

 <img src="images/bpig/inside6.jpg" align="left" style="PADDING-RIGHT: 6px">
            <h8> <b>Bourgeois Pig</b> is a whole in the wall coffee shop in Los Angeles, its far from your average cafe. This cafe has its own dark cave that people go and do homework in or just relax. The cave is enchanted like and attracts most of their customers.  The cafe has a pool table as well as places to lounge. It's decorated with purple walls, velvet couches, and bronze trimmings. The location has 1 free wifi and another hour if you spend over $10.
            

<BR /><BR /><BR /><BR /><BR /><BR /><BR /><BR /><BR />
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
				$favorited = $row['bpig'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=bpig"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=bpig"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>



</h8>
<BR>
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 5931 Franklin Ave,<BR />
Los Angeles, Ca 90028 <BR>
<HR>
      <B>PHONE NUMBER:</B> (323) 464-6008 </BR>
      <HR>
      <b>PARKING:</b> This location does not have a parklinglot.<BR>
      <HR>                                                               
<b>HOURS:</b><BR /> Monday - Sunday - 8:00am - 2:00am
      <BR><BR>
      <a href="http://bourgeoispig.menutoeat.com/" class="link1" target="_blank">Click here to view their website</a>
      
      

			</div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/bpig/inside2.jpg" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=inside.src" name="inside" src="images/bpig/inside.jpg" alt="" />
	<img onmouseover="preview.src=inside2.src" name="inside2" src="images/bpig/inside2.jpg" alt="" />
    <img onmouseover="preview.src=inside3.src" name="inside3" src="images/bpig/inside3.jpg" alt="" />
    <img onmouseover="preview.src=inside4.src" name="inside4" src="images/bpig/inside4.jpg" alt="" />
    <img onmouseover="preview.src=inside5.src" name="inside5" src="images/bpig/inside5.jpeg" alt="" />

 
</div></div> <!-- Close the gallery div -->
    
    
    
    </div>

<div id="clear"></div>




         <div class="row marketing">


</div>
<?php include 'footer.php'; ?>
      <BR />