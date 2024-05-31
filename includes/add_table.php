<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inspired_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

$grade = $_GET['grade'];
$section = $_GET['section'];

$sql = "SELECT section_id FROM section_names";
$result = $conn->query($sql);

$existing_sections = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $existing_sections[] = $row['section_id'];
    }
}

$next_section = 1;
while (in_array("section_" . $next_section, $existing_sections)) {
    $next_section++;
}


$next_section_id = "section_" . $next_section;

$insert_sql = "INSERT INTO section_names (section_id, section_name, grade) VALUES ('$next_section_id', '$section', $grade)";
if ($conn->query($insert_sql) === TRUE) {
    echo "New section added successfully.";
} else {
    echo "Error: " . $insert_sql . "<br>" . $conn->error;
}

$sql = "SHOW TABLES LIKE 'section_%'";
$result = $conn->query($sql);

$highest_section_number = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $table_name = $row["Tables_in_inspired_db (section_%)"];
        $section_number = intval(substr($table_name, strlen('section_')));
        $highest_section_number = max($highest_section_number, $section_number);
    }
}

$lowest_available_section = null;
for ($i = 1; $i <= $highest_section_number; $i++) {
    $table_name = "section_" . $i;
    $sql = "SHOW TABLES LIKE '$table_name'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $lowest_available_section = $i;
        break;
    }
}

if ($lowest_available_section === null) {
    $new_section_number = $highest_section_number + 1;
} else {
    $new_section_number = $lowest_available_section;
}

$sql = "CREATE TABLE section_" . $new_section_number . " (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lrn BIGINT(12) ZEROFILL,
    first_name VARCHAR(50),
    middle_name VARCHAR(50),
    last_name VARCHAR(50),
    grade INT(1),
    section VARCHAR(20),
    english INT(2) ZEROFILL,
    math INT(2) ZEROFILL,
    science INT(2) ZEROFILL,
    filipino INT(2) ZEROFILL,
    mt INT(2) ZEROFILL,
    ap INT(2) ZEROFILL,
    esp INT(2) ZEROFILL,
    mapeh INT(2) ZEROFILL,
    avg FLOAT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table section_" . $new_section_number . " created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
