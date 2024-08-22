<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $branch = $_POST['branch'];
    $year = $_POST['year'];

    $sql = "SELECT division, timetable FROM timetables WHERE branch='$branch' AND year='$year'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>Division: " . $row['division'] . "</h2>";
            echo "<p>Timetable: " . $row['timetable'] . "</p>";
        }
    } else {
        echo "No timetables found for the selected branch and year.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Time Slots</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>View Free Time Slots</h1>
        <form method="POST" action="free_time.php">
            <label for="branch">Branch:</label>
            <select id="branch" name="branch" required>
                <option value="cse">CSE</option>
                <option value="rna">RNA</option>
                <option value="aiml">AI & ML</option>
                <option value="mech">Mechanical</option>
                <option value="civil">Civil</option>
                <option value="entc">ENTC</option>
            </select>

            <label for="year">Year:</label>
            <select id="year" name="year" required>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>

            <button type="submit" class="btn">View Timetable</button>
        </form>
    </div>
</body>
</html>
