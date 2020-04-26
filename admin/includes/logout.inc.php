<!-- destroying all the session of user -->

<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
