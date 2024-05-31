<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inspired_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$buttonValueCurrent = $_GET['buttonValueCurrent'];

$sql = "SELECT section_name, grade FROM section_names WHERE section_id = '$buttonValueCurrent'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sectionName = $row['section_name'];
    $grade = $row['grade'];
} else {
    $sectionName = "";
    $grade = "";
}

$conn->close();

echo json_encode(array("sectionName" => $sectionName, "grade" => $grade));
?>
