<?php
$conn = new mysqli("localhost", "root", "", "inspired_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$section_id = $_GET['section_id'];

$data = json_decode(file_get_contents("php://input"), true);

$clear_table = "TRUNCATE TABLE $section_id";
if ($conn->query($clear_table) !== TRUE) {
    echo "Error: " . $clear_table . "<br>" . $conn->error;
}

foreach ($data as $row) {
    $id = $row[0];
    $lrn = $row[1];
    $firstName = $row[2];
    $middleName = $row[3];
    $lastName = $row[4];
    $grade = $row[5];
    $section = $row[6];
    $english = $row[7];
    $math = $row[8];
    $science = $row[9];
    $filipino = $row[10];
    $mt = $row[11];
    $ap = $row[12];
    $esp = $row[13];
    $mapeh = $row[14];
    $avg = $row[15];
    
    $sql = "INSERT INTO $section_id (id, lrn, first_name, middle_name, last_name, grade, section, english, math, science, filipino, mt, ap, esp, mapeh, avg) VALUES ('$id', '$lrn', '$firstName', '$middleName', '$lastName', '$grade', '$section', '$english', '$math', '$science', '$filipino', '$mt', '$ap', '$esp', '$mapeh', '$avg')";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
