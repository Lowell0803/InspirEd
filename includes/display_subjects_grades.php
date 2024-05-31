<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inspired_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $current_section = $_GET['currentSection'];

    $subject_results = array();

    $subjects = array("english", "math", "science", "filipino", "mt", "ap", "esp", "mapeh");

    foreach ($subjects as $subject) {
        $sql = "SELECT first_name, last_name, $subject FROM $current_section ORDER BY $subject DESC LIMIT 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $subject_data = array();
            while($row = $result->fetch_assoc()) {
                $subject_data[] = $row;
            }
            $subject_results[$subject] = $subject_data;
        }
    }

    $conn->close();

    header('Content-Type: application/json');

    echo json_encode($subject_results);
?>
