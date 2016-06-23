<?php

if(!isset($_POST['submit']) || !isset($_POST['username']) || !isset($_POST['password'])
    || !isset($_POST['email'])) {
    return;
}

define("DB_HOST", "localhost:8890");
define("DB_NAME", "studyhall");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_TABLE", "users");

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to database: " . mysql_error());
$db = mysql_select_db(DB_NAME) or die("Failed to connect to database: " . mysql_error());

$data = array();
$data['username'] = $_POST['username'];
$data['password'] = $_POST['password'];
$data['email'] = $_POST['email'];

if(checkUsername($data['username'])) {
    makeAccount($data['username'], md5($data['password']), $data['email']);
}

function makeAccount($username, $password, $email) {
    $query = "INSERT INTO `studyhall`.`users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$password', '$email')";
    mysql_query($query) or die("Failure code: [User-1]");
	header("location: index.php");
}

function checkUsername($username) {
    if(preg_match('/^\w+$/', $username)) {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $results = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($results) > 0) {
            echo 'This username already exists';
            return false;
        } else
            return true;
    } else {
        echo "Your username contains invalid characters";
        return false;
    }
}


?>