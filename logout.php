<?php
session_start();
include 'config.php';

// Clear token from database before destroying session
if (isset($_SESSION['admin_email'])) {
    $email = $_SESSION['admin_email'];
    mysqli_query($connect, "UPDATE tbl_admin SET token='' WHERE fld_email='$email'") or die(mysqli_error($connect));
}

// Destroy session
session_destroy();

// Redirect with success message
echo "<script>";
echo "alert('Logout successful');";
echo 'window.location.href="index.php";';
echo "</script>";
?>
