<?php
session_start();
if ($_SESSION['status'] != "logged") {
    header("location:login-form.php");
}
?>
