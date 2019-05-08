<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'bus';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

//check connection
if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

?>