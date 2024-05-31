<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'inspired_db';

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $query = "SELECT * FROM accounts WHERE user_name = '$username' AND pass_word = '$password'";

    $query = "SELECT * FROM accounts WHERE BINARY user_name = '$username' AND pass_word = '$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit(); 
    } else {
        header("Location: ../login.php?error=wrong_credentials");
        exit();
    }

    mysqli_free_result($result);
}

mysqli_close($connection);
?>
