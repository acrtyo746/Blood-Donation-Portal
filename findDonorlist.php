<?php
session_start(); // Start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $blood_type = htmlspecialchars(strtolower($_POST['blood_type'])); 
    $city = htmlspecialchars(strtolower($_POST['city'])); 
    $state = htmlspecialchars(strtolower($_POST['state'])); 

    // Database connection details
    $servername = "localhost";
    $username = "root"; 
    $password = "root"; 
    $dbname = "redstream_db"; 

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare to fetch distinct cities and states for dropdowns
    $cities = [];
    $states = [];

    // Get distinct cities
    $city_stmt = $conn->query("SELECT DISTINCT city FROM donors");
    while ($row = $city_stmt->fetch_assoc()) {
        $cities[] = $row['city'];
    }

    // Get distinct states
    $state_stmt = $conn->query("SELECT DISTINCT state FROM donors");
    while ($row = $state_stmt->fetch_assoc()) {
        $states[] = $row['state'];
    }

    // Prepare and execute the SQL query to find available donors
    $stmt = $conn->prepare("SELECT name, phone, email, blood_group, city, state FROM donors WHERE LOWER(blood_group) = ? AND LOWER(city) = ? AND LOWER(state) = ?");
    $stmt->bind_param("sss", $blood_type, $city, $state);
    $stmt->execute();
    $result = $stmt->get_result();

    // Prepare the donor list HTML
    $donor_list = '<div class="donor-list">';
    $donor_list .= '<h2>Available Donors:</h2>';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $donor_list .= '<div class="donor-item">';
            $donor_list .= '<strong>Name:</strong> ' . $row['name'] . '<br>';
            $donor_list .= '<strong>Phone:</strong> ' . $row['phone'] . '<br>';
            $donor_list .= '<strong>Email:</strong> ' . $row['email'] . '<br>';
            $donor_list .= '<strong>Blood Group:</strong> ' . $row['blood_group'] . '<br>';
            $donor_list .= '<strong>City:</strong> ' . $row['city'] . '<br>';
            $donor_list .= '<strong>State:</strong> ' . $row['state'] . '<br>';
            $donor_list .= '<button class="contact-btn" onclick="openContactForm(\'' . htmlspecialchars($row['email']) . '\')">Contact</button>'; // Pass email only
            $donor_list .= '<hr class="donor-divider">';
            $donor_list .= '</div>';
        }
    } else {
        $donor_list .= '<p>No donors found for the selected criteria.</p>';
    }

    $donor_list .= '</div>';

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If accessed without form submission, redirect to the find donor page
    header("Location: findDonorlist.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor List</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Add styles for the donor list */
        .donor-list {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: left;
        }

        .donor-item {
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .donor-item strong {
            display: inline-block;
            margin-bottom: 5px;
        }

        .donor-divider {
            border: 1px solid #ddd;
            margin: 15px 0; /* Space above and below the line */
        }

        .contact-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .contact-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function openContactForm(email) {
            // Redirect to Gmail with a new email
            window.location.href = 'mailto:' + email + '?subject=Inquiry about blood donation&body=Hello,';
        }
    </script>
</head>
<body>
    <div class="donor-container">
        <h1>Find the Best Donor For You</h1>
        <?php echo $donor_list; // Output the donor list here ?>
        <a href="findDonorlist.html" class="btn">Back to Search</a>
    </div>
</body>
</html>
