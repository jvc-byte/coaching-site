<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "coaching_site";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error());
    die("Sorry, there was a problem connecting to the database.");
}
?>
