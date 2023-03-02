<?php
    session_start();
    if (!($_SESSION['Login'])) {
        header("Location:../view/login.php");
    }
?>