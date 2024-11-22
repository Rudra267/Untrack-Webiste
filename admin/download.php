<?php
require 'vendor/autoload.php';

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

// Get the service_id from the URL
$service_id = $_GET['id'];

// Validate the service_id
if (!is_numeric($service_id)) {
    die("Invalid service_id");
}

// SQL query to fetch the row data based on service_id
$sql = "SELECT * FROM enquiry WHERE service_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $service_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if any result was found
if ($result && $result->num_rows > 0) {
    // Fetch the enquiry data
    $enquiry = $result->fetch_assoc();
    
    // Verify that necessary keys exist in the returned data
    if (isset($enquiry['service_id'], $enquiry['name'], $enquiry['company_name'])) {
        // Prepare data for the CSV file
        $data = [
            ['Enquiry ID', 'Name', 'Company Name','Phone','Address','City','ZipCode','Nature of Service','Product','Ups','Invertor','Model Name','Rating','Battery','Battery Ratings','Quantity','Strings','A/C Availability','A/C Capacity','DG Availability','DG Capacity','Loadtype','Job status','Engineer remarks','Customer remarks','Engineer name','Engineer sign','Customer name','Customer sign'],
            [$enquiry['service_id'], $enquiry['name'], $enquiry['company_name'],$enquiry['phone'], $enquiry['address'], $enquiry['city'],$enquiry['zipcode'], $enquiry['nature_of_service'], $enquiry['product'],$enquiry['ups'], $enquiry['invertor'], $enquiry['model_name'],$enquiry['rating'], $enquiry['battery'], $enquiry['battery_ratings'],$enquiry['quantity'], $enquiry['strings'], $enquiry['ac_availability'],$enquiry['ac_capacity'], $enquiry['dg_availability'], $enquiry['dg_capacity'],$enquiry['load_type'], $enquiry['job_status'], $enquiry['engineer_remarks'],$enquiry['customer_remarks'], $enquiry['engineer_name'], $enquiry['engineer_sign'],$enquiry['customer_name'], $enquiry['customer_sign']],
        ];

        // Set the filename (e.g., Enquiry_ServiceID_123.csv)
        $fileName = 'Enquiry_ServiceID_' . $enquiry['service_id'] . '.csv';

        // Set headers to force download of the file
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Pragma: no-cache');
        header('Expires: 0');

        // Open the output stream
        $output = fopen('php://output', 'w');

        // Output the data
        foreach ($data as $row) {
            fputcsv($output, $row);
        }

        // Close the output stream
        fclose($output);
        exit();
    } else {
        echo "Required data fields missing in the database response.";
    }
} else {
    echo "No enquiry found for service_id $service_id";
}

// Close the connection
$conn->close();
?>
