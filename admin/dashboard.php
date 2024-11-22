<?php

// Replace with your own database connection details
$servername = "localhost";
$username = "iark_user";
$password = "9xpH3B9D.pM2";
$dbname = "iark_enquiery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all enquiries
$sql = "SELECT service_id, name, company_name FROM enquiry";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Enquiries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header img {
            width: 150px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        td {
            text-align: left;
        }
        .download-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Header with Logo -->
    <div class="header">
        <img src="https://iark.in/san/ontrack-latest/images/about/ontrack-logo.png" alt="Logo">
    </div>

    <!-- Table for Enquiries -->
    <table>
        <tr>
            <th>Enquiry ID</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Action</th>
        </tr>
        <?php
        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['service_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['company_name'] . "</td>";
                echo "<td><button class='download-button' onclick=\"downloadFile(" . $row['service_id'] . ")\">Download</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No enquiries found</td></tr>";
        }
        ?>
    </table>

    <script>
        // JavaScript function to handle download
        function downloadFile(enquiryId) {
            // Redirect or trigger download (implement the backend logic as per requirements)
            window.location.href = 'download.php?id=' + enquiryId;
        }
    </script>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
