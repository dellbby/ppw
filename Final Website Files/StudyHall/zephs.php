<?php
session_start();
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

    <title>StudyHall.com | Locations | Zephyr's Coffee House & Art Gallery</title>

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
      
        <h2>Zephyr's Coffee House & Art Gallery</h2>
     
       <div id="lcontent">

 <img src="images/zephs/zephs.png" align="left" style="PADDING-RIGHT: 6px">
            <h8> <b>Zephyr's</b> is located in Pasadena, CA and is a spaceous hookah lounge that has indoor and outdoor seating. Zephyr's can get loud at times because people come to smoke hookah and hang out, but it is known for many coming to do homework. Most customers bring headphones and focus while smoking hookah and drinking a latte.
<BR /><BR />


<BR /><BR /><BR /><BR /><BR /><BR /><BR />
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
				$favorited = $row['zephyrs'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=zephyrs"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=zephyrs"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>


</h8>
<BR>
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 2419 E Colorado Blvd, Pasadena, CA 91107<BR>


<HR>
      <B>PHONE NUMBER:</B> (626) 793-7330 </BR>
      <HR>
      <b>PARKING:</b> The free public parking is located behind the building<BR>
      <HR>                                                               
<b>HOURS:</b><BR /> Monday - Thursday 10:00 am - 1:00 am<BR>
Friday - Saturday 10:00 am - 2:00 am<br />
Sunday - 10:00 am - 12:00 am

      <BR><BR>
      Website: This location does not have a website.
      
      

			</div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/zephs/zephs.jpg" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=zephs.src" name="zephs" src="images/zephs/zephs.jpg" alt="" />
	<img onmouseover="preview.src=zephs1.src" name="zephs1" src="images/zephs/zephs1.jpg" alt="" />
    <img onmouseover="preview.src=zephs5.src" name="zephs5" src="images/zephs/zephs5.jpg" alt="" />
    <img onmouseover="preview.src=zephs3.src" name="zephs3" src="images/zephs/zephs3.jpg" alt="" />
    <img onmouseover="preview.src=zephs4.src" name="zephs4" src="images/zephs/zephs4.jpg" alt="" />

 
</div></div> <!-- Close the gallery div -->
    
    
    
    </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />