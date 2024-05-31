<?php

$conn = new mysqli("localhost", "root", "", "inspired_db");

$section = $_GET['section'];

$result = mysqli_query($conn, "SELECT * FROM $section");

if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    $data = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['lrn'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['middle_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['grade'] . "</td>";
        echo "<td>" . $row['section'] . "</td>";
        echo "<td>" . $row['english'] . "</td>";
        echo "<td>" . $row['math'] . "</td>";
        echo "<td>" . $row['science'] . "</td>";
        echo "<td>" . $row['filipino'] . "</td>";
        echo "<td>" . $row['mt'] . "</td>";
        echo "<td>" . $row['ap'] . "</td>";
        echo "<td>" . $row['esp'] . "</td>";
        echo "<td>" . $row['mapeh'] . "</td>";
        echo "<td>" . $row['avg'] . "</td>";
        echo "</tr>";
    }
}

?>
