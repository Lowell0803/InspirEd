<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inspired_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $section_query = "SELECT section_id, section_name, grade FROM section_names";
    $section_result = $conn->query($section_query);

    $buttons = array();

    if ($section_result->num_rows > 0) {
        while ($row = $section_result->fetch_assoc()) {
            $section_id = $row['section_id'];
            $section_name = $row['section_name'];
            $grade = $row['grade'];
            $button_label = "$grade - $section_name";
            $buttons[] = array('label' => $button_label, 'id' => $section_id);
        }
        
        // sort text of buttons :)
        usort($buttons, function($a, $b) {
            return strcmp($a['label'], $b['label']);
        });

        foreach ($buttons as $button) {
            echo "<button value=\"" . $button['id'] . "\" class=\"buttons-generated\">" . $button['label'] . "</button>&nbsp;&nbsp;";
        }
    } else {
        echo "No section names found.";
    }

    $conn->close();
?>
