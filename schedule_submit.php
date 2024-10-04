<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    // Database connection details
    $servername = "localhost";
    $username = "root"; // Your database username
    $password = "root"; // Your database password
    $dbname = "redstream_db"; // Your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO schedules (name, email, phone, blood_group, date, time) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $blood_group, $date, $time);

    // Execute the statement
    if ($stmt->execute()) {
        // Appointment scheduled successfully, display success message
        echo '<script>alert("Your appointment has been successfully scheduled!"); window.location.href = "schedule.html";</script>';
    } else {
        // Error inserting data
        echo '<script>alert("Error: Unable to schedule your appointment. Please try again."); window.location.href = "schedule.html";</script>';
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If accessed without form submission, redirect to the schedule page
    header("Location: schedule.html");
    exit();
}
?>
