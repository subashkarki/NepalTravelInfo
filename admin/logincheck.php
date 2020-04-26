
<!-- Checking the session to prevent url entry to dashboard without login -->
<?php
    session_start();

    if (!isset($_SESSION["uidUsers"]) || !isset($_SESSION["loggedIn"])) {
        header("Location: index.php");
        exit();
    }
