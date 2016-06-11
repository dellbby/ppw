<?php
session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    header("location: http://localhost:8890/StudyHall/index.php");
}

define("DB_HOST", "localhost:8890");
define("DB_NAME", "studyhall");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_TABLE", "users");

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to database: " . mysql_error());
$db = mysql_select_db(DB_NAME) or die("Failed to connect to database: " . mysql_error());

if(isset($_GET['tag'])) { 
	$tagName = $_GET['tag'];
	$username = $_SESSION['username'];
	$query = "SELECT $tagName FROM users WHERE username = '$username'";
	$result = mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_array($result)) {
			$value = $row[$tagName];
			$fav = $value == 1 ? 0 : 1;
			$query2 = "UPDATE users SET $tagName = $fav WHERE username = '$username'";
			mysql_query($query2) or die(mysql_error());
			switch($tagName) {
			case "zephyrs":
				header("location: /StudyHall/zephs.php");
			break;	
			}
		}
	}
}

if(!isset($_POST['username']))
    return false;
else if(!isset($_POST['password']))
    return false;
else {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
}


$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result) == 1) {
    $data = mysql_fetch_array($result);
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['LoggedIn'] = "1";
	header("location: index.php");
} else
    echo "Username or password is incorrect.";




?>