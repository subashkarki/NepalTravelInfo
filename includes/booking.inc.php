 <!-- Attempting insert query execution for user booking -->

<?php
include_once 'dbh.inc.php';

$first = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$country = $_POST['country'];
$trekname = $_POST['trekname'];
$trekdate = $_POST['trekdate'];
$phone = $_POST['phone'];
$noofperson = $_POST['person'];
$ccname = $_POST['cc-name'];
$ccnumber = $_POST['cc-number'];
$ccexpire = $_POST['cc-expire'];
$ccccv = $_POST['cc-ccv'];

$sql="INSERT INTO booking(user_fullname, user_email, user_address, user_country, user_phone, user_trekname, user_trekdate, user_person) 
VALUES ('$first','$email','$address','$country','$phone','$trekname','$trekdate','$noofperson')";
// var_dump($sql);
mysqli_query($conn, $sql);
mysqli_close($conn);

header("location: ../index.php?bookus=success");
?>