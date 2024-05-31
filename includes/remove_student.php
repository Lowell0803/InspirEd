<?php 
$conn = new mysqli("localhost", "root", "", "inspired_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$section_id = $_GET['section_id'];

$data = json_decode(file_get_contents("php://input"), true);

foreach ($data as $num) {
    $select_sql = "SELECT * FROM $section_id WHERE id = $num";
    $result = $conn->query($select_sql);
    $row = $result->fetch_assoc();

    $archive_sql = "INSERT INTO archives (lrn, first_name, middle_name, last_name, grade, section, english, math, science, filipino, mt, ap, esp, mapeh, avg) VALUES ('{$row['lrn']}', '{$row['first_name']}', '{$row['middle_name']}', '{$row['last_name']}', {$row['grade']}, '{$row['section']}', {$row['english']}, {$row['math']}, {$row['science']}, {$row['filipino']}, {$row['mt']}, {$row['ap']}, {$row['esp']}, {$row['mapeh']}, {$row['avg']})";
    $conn->query($archive_sql);

    $delete_sql = "DELETE FROM $section_id WHERE id = $num";
    $conn->query($delete_sql);
}

$sql = "SET @num := 0";
$conn->query($sql);

$sql = "UPDATE $section_id SET id = @num := (@num+1)";
$conn->query($sql);

$sql = "ALTER TABLE $section_id AUTO_INCREMENT = 1";
$conn->query($sql);

$conn->close();
?>
