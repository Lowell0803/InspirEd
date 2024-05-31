<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$allowed_pages_for_guests = array('index.php', 'about.php', 'login.php');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $isAdmin = ($_SESSION['username'] === 'admin');
} else {
    $current_page = basename($_SERVER['PHP_SELF']);
    if (!in_array($current_page, $allowed_pages_for_guests)) {
        header("Location: login.php");
        exit();
    }
    $username = "guest";
    $isAdmin = false;
}
?>
