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

    <title>StudyHall.com | Locations | Bea Bea's</title>

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
      
        <h2>Bea Bea's</h2>
     
       <div id="lcontent">

 <img src="images/beabeas/b3.jpg" width="496" height="371" align="left" style="PADDING-RIGHT: 6px">
             <h8>
 <b>           Bea Bea's</b> is mostly known for their breakfast menu. Most customers come in the mornings for customized pancakes. Since they are mostly known for their breakfast, they do close at 7pm which isn't ideal for students that want to study until late. This location does have a huge parkinglot since it is in the same location as convienence stores, so you never have to worry about parking.
          
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
				$favorited = $row['beabeas'] == 1 ? true : false;
			}
		}
	}
	if(!$favorited && $username != ""): 
	?>
	
	<a href="UserHandler.php/?tag=beabeas"><img src="images/fav.png" title="Click to Favorite" /></a>
	
	<?php else: ?>
	
	<a href="UserHandler.php/?tag=beabeas"><img src="images/unfav.png" title="Click to UnFavorite" /></a>
	
	<?php endif; ?>

<h4> Location Cons:</h4>
-This location closes at 7pm.

</h8>
<BR>
</div>

      <div id="infobox">
      <h6> Location Information</h6>
      
      <B>ADDRESS:</B> 353 N Pass Ave<BR />
Burbank, CA 91505
<HR>
      <B>PHONE NUMBER:</B> (818) 846-2327 </BR>
      <HR>
      <b>PARKING:</b> Parkinglot for 90 minutes free parking.<BR>
      <HR>                                                               
<b>HOURS:</b><BR /> Monday - Friday - 7:30am - 7:00pm<BR />
					Saturday - 9:00am - 7:00pm<br />
                    Sunday - 10:30am - 7:00pm
      <BR><BR>
      This location does not have a website
      
      

  </div>
	<div id="gallerybox" class="gallery" align="center">
    	<h6>Gallery</h6>
        <div class="preview" align="center">
	<img name="preview" src="images/beabeas/b1.jpg" alt=""/>
</div>


    <div class="thumbnails" align="center">
	<img onmouseover="preview.src=b1.src" name="b1" src="images/beabeas/b1.jpg" alt="" />
	<img onmouseover="preview.src=b2.src" name="b2" src="images/beabeas/b2.jpg" alt="" />
    <img onmouseover="preview.src=b3.src" name="b3" src="images/beabeas/b3.jpg" alt="" />
    <img onmouseover="preview.src=b4.src" name="b4" src="images/beabeas/b4.jpg" alt="" />

</div></div> <!-- Close the gallery div -->
    
    
    
  </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>