<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projects";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the current date
$currentDate = $_POST['date'];

// Insert attendance data into the database
if (isset($_POST['submit'])) {
    if (isset($_POST['attendance'])) {
        $attendance = $_POST['attendance'];

        foreach ($attendance as $studentName) {
            $query = "INSERT INTO attendance (sid,date, attendance_status) VALUES ('$studentName','$currentDate', 'Present')";
            $conn->query($query);
        }
    }



}

$conn->close();

// Redirect back to the form after submission
header("Location: attendance.php");
exit();
?>