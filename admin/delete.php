<!-- creating a query to delete the data row from database table  -->
<?php
include 'includes/dbh.inc.php';
$select = "DELETE from booking where user_ID='".$_GET['del_id']."'";
$query = mysqli_query($conn, $select) or die($select);
header("Location: tables.php");

?>