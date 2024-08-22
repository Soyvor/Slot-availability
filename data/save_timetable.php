<?php
include('../php/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $division = $_POST['division'];
    $timetable = $_POST['timetable'];

    $sql = "INSERT INTO timetables (branch, year, division, timetable)
            VALUES ('$branch', '$year', '$division', '$timetable')";

    if ($conn->query($sql) === TRUE) {
        echo "Timetable saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
