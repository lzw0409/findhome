<?php

$server = "ix.cs.uoregon.edu";
$dbname ="mydb";
$user = "guest";
$pass = "guest";
$port="3229";


$conn = new mysqli($server, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>