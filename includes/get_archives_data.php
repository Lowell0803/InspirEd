<?php
$conn = new mysqli("localhost", "root", "", "inspired_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM archives");
$data = $result->fetch_all(MYSQLI_ASSOC);

mysqli_close($conn);

echo json_encode($data);
?>
