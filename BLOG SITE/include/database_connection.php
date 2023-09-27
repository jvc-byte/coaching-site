<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "blog site";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}
?>