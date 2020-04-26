
<!-- Establishing database connection with default username and password  -->
<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "nepaltravel";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connectiom failed: " . mysqli_connect_error());
}

?>