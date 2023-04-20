<?php
// Database configuratie
$host  = "mariadb";
$dbuser = "user";
$dbpass = "password";
$dbname = "tools4ever";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
?>