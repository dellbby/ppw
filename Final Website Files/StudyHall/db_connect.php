<?php

define("DB_HOST", "localhost:8890");
define("DB_NAME", "studyhall");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_TABLE", "users");

$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to database: " . mysql_error());
$db = mysql_select_db(DB_NAME) or die("Failed to connect to database: " . mysql_error());

?>