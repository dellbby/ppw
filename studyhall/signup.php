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
      
        <h2>Sign-Up </h2>
<h8>     Sign up below to have your own Studyhall account.
       <div id="lcontent">


            <h8>
              <form id="register" method="POST" action="RegisterUser.php" class="form">
            Username: <input type="text" name="username" required="true"><br><br>
            Password: <input type="password" name="password" required="true"><br><br>
            Email: <input type="email" name="email" required="true"><br>
            <input type="submit" name="submit" value="Register"><br><br>
        </form><br><br><br><br>


</h8>
<BR>
</div>

    
    
    </div>

<div id="clear"></div>




         <div class="row marketing">


</div>

<?php include 'footer.php'; ?>
      <BR />