<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}

// Check if admin is not logged in
if (!isset($_SESSION['admin_email'])) {
    echo '<script>window.location.href = "index.php";</script>';
    exit;
}
?>
