
<!-- Attempting insert query execution for user enquiry -->

<?php
    include_once 'dbh.inc.php';

    $first = $_POST['fullname'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "INSERT INTO `enquiry` (`user_fullname`, `user_city`, `user_email`, `user_phone`, `user_message`)
     VALUES ('$first','$city','$email','$phone','$message')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: ../destination.php?enquiry=success");
?>
<!-- 
CREATE TABLE booking (
    user_first varchar(60),
    user_last varchar(60),
    user_email varchar(60),
    user_phone varchar(60),
    user_message varchar(255)
); -->