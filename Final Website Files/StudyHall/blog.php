<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>StudyHall.com | Blog</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron-narrow.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
            <li role="presentation" class="active"><a href="blog.php">Blog</a></li>
            <li role="presentation"><a href="contact.php">Contact</a></li>
          </ul>
           
        </nav>
       
        
        <div class="logo">
        <a href=index.html><img src="images/logo.png"></a>
      </div></div>';
	  echo $echoText;
?>
      
      
<div class="content">
<BR>
    
        <h2>Blog</h2>
                <div class="boxed">
  <h6>Welcome</h6>
  Here you will find everything from Tips & tricks to helpful guidance on studying.
 
 <h6>Follow our blog!</h6>
<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="60" width="105" src="https://platform.tumblr.com/v2/follow_button.html?type=follow&amp;tumblelog=thestudyhallblog&amp;color=blue"></iframe>

</div>

<div id="wrap">
        
         <div class="tumblr-post" data-href="https://embed.tumblr.com/embed/post/S9JXF2g44-WIc_JAGsEFNQ/144176157556" data-did="5a5b816358a2a41b7bd5e9f71d3fe3af86fe4064"><a href="http://thestudyhallblog.tumblr.com/post/144176157556/first-post">http://thestudyhallblog.tumblr.com/post/144176157556/first-post</a></div>  <script async src="https://secure.assets.tumblr.com/post.js"></script>

          <HR>
          
 <div class="tumblr-post" data-href="https://embed.tumblr.com/embed/post/S9JXF2g44-WIc_JAGsEFNQ/144180252716" data-did="958c3dedbd3502efd8c23eaedfa3c87a777e4daa"><a href="http://thestudyhallblog.tumblr.com/post/144180252716/artists-to-listen-to-while-doing-homework">http://thestudyhallblog.tumblr.com/post/144180252716/artists-to-listen-to-while-doing-homework</a></div>  <script async src="https://secure.assets.tumblr.com/post.js"></script>
                   
                   <HR>
      </div>   <div id="clear"></div>
</div>


      <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />