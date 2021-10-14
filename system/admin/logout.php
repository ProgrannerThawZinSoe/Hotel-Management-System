<?php
    session_start();
    $_SESSION["admin_username"] = null;
    $_SESSION["admin_password"] = null;
    $_SESSION["account_role"] = null;
    $_SESSION["staff_username"] = null;
    $_SESSION["staff_password"] = null;
    $_SESSION["message"] = "Logout Success";
    header("location:index.php");
?>