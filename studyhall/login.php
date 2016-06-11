<?php
session_start();
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
      
      <BR>
<div class="content">
      <div id="container">
        <h2>Login to Your Account</h2>
     
<div id="signup">
            
        <form action="UserHandler.php" method="POST" >
<label>Username:</label>            <input type="text" name="username" required="true">
            <label>Password:</label><input type="password" name="password" required="true">
            <input type="submit" name="submit" value="Login">
        </form>
        </div>
        
        <div id="clear"></div>

        
        
        </div>
        </div></div>
    </body>
    </h8>
<BR>
</div>

    
    
    </div>





         <div class="row marketing">


</div>
<?php include 'footer.php'; ?>
      <BR />
</html>