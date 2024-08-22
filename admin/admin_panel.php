<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../php/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <a href="../php/logout.php" class="btn logout-btn">Logout</a>
        <form method="POST" action="../data/save_timetable.php">
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

            <label for="division">Division:</label>
            <input type="text" id="division" name="division" required>

            <label for="timetable">Timetable (Enter periods as comma-separated values):</label>
            <textarea id="timetable" name="timetable" required></textarea>

            <button type="submit" class="btn">Save Timetable</button>
        </form>
    </div>
</body>
</html>
