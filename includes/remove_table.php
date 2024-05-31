<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inspired_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

$section_id = $_GET['section_id'];

$sql_select_rows = "SELECT * FROM `$section_id`";
$result = $conn->query($sql_select_rows);

if ($result->num_rows > 0) {
    $archive_values = "";
    while ($row = $result->fetch_assoc()) {
        $archive_values .= "('{$row['lrn']}', '{$row['first_name']}', '{$row['middle_name']}', '{$row['last_name']}', {$row['grade']}, '{$row['section']}', {$row['english']}, {$row['math']}, {$row['science']}, {$row['filipino']}, {$row['mt']}, {$row['ap']}, {$row['esp']}, {$row['mapeh']}, {$row['avg']}), ";
    }
    $archive_values = rtrim($archive_values, ", ");

    $sql_insert_archives = "INSERT INTO archives (lrn, first_name, middle_name, last_name, grade, section, english, math, science, filipino, mt, ap, esp, mapeh, avg) VALUES $archive_values";
    if ($conn->query($sql_insert_archives) === TRUE) {
        echo "Rows archived successfully.<br>";
    } else {
        echo "Error archiving rows: " . $conn->error;
    }
} else {
    echo "No rows to archive.<br>";
}

$sql_drop_table = "DROP TABLE IF EXISTS `$section_id`";
if ($conn->query($sql_drop_table) === TRUE) {
    echo "Table $section_id dropped successfully.<br>";
} else {
    echo "Error dropping table: " . $conn->error;
}

$sql_delete_section = "DELETE FROM section_names WHERE section_id = '$section_id'";
if ($conn->query($sql_delete_section) === TRUE) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
