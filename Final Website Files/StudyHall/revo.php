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

    <title>StudyHall.com | Locations | Revo Cafe</title>

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
      
        <h2>Revo Cafe</h2>
     
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
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 3134 Glendale Blvd
Los Angeles, Ca 90039 <BR>
<HR>
      <B>PHONE NUMBER:</B> (323)664-REVO </BR>
      <HR>
      <b>PARKING:</b> The free public parking is located behind the building<BR>
      <HR>                                                               
<b>HOURS:</b><BR /> Sunday - Thursday 7:00 am - 11:00 pm<BR>
Friday - Saturday 7:00 am - Midnight
      <BR><BR>
      <a href="http://www.revocafe.com" class="link1" target="_blank">Click here to view their website</a>
      
      

			</div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/revo/revo.png" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=revo.src" name="revo" src="images/revo/revo.png" alt="" />
	<img onmouseover="preview.src=cake.src" name="cake" src="images/revo/cake.png" alt="" />
    <img onmouseover="preview.src=food1.src" name="food1" src="images/revo/food1.png" alt="" />
    <img onmouseover="preview.src=food2.src" name="food2" src="images/revo/food2.png" alt="" />
    <img onmouseover="preview.src=latte1.src" name="latte1" src="images/revo/latte1.png" alt="" />

 
</div></div> <!-- Close the gallery div -->
    
    
    
    </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />