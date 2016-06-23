<?php

// set header
header("Content-type:application/json");

//usernameandpw
include_once('includes/connection.php');

$sql = 'SELECT * FROM fruits ORDER BY RAND() LIMIT 1;';
$stmnt = $dbh->prepare($sql);
// execute
$stmnt->execute();

// result to statement's fetchall indexed by column name
$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);

// echos out result
echo json_encode($result);

?>