<!-- CREATE TABLE contact (
	contact_ID int AUTO_INCREMENT PRIMARY KEY,
	firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phoneNumber varchar(255) NOT NULL,
    message LONGTEXT NOT NULL
); -->
<!-- Attempting insert query execution for user contact -->

<?php
    include_once 'dbh.inc.php';

    $first = $_POST['first-name'];
    $last = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "INSERT INTO `contact` (`firstName`, `lastName`, `email`, `phoneNumber`, `message`) VALUES ('$first','$last','$email','$phone','$message')";
    // var_dump($sql);
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../contactus.php?Sent=success");
?>