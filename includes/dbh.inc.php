<!-- Attempting MySQL server connection with default setting (user 'root' with password 'root') -->

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "nepaltravel";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
