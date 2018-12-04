<?php

$server = "ix.cs.uoregon.edu";
$dbname ="mydb";
$user = "guest";
$pass = "guest";
$port="3229";


$conn = new mysqli_connect($server, $user, $pass, $port, $dbname);
or die('Error connecting to MySQL server.');
?>