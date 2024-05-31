<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inspired_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }

    $current_section = $_GET['currentSection'];

    $sql = "SELECT * FROM $current_section WHERE avg BETWEEN 90 AND 100";
    $result = $conn->query($sql);

    $data = array(); 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }

    $conn->close();

    header('Content-Type: application/json');

    echo json_encode($data);
?>
