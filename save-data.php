<?php

// Database configuration (change to your cPanel MySQL settings)
$servername = "localhost";
$username = "iark_user";
$password = "9xpH3B9D.pM2";
$dbname = "iark_enquiery";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to save the data in the database
function saveToDatabase($conn, $data) {
    $sql = "INSERT INTO enquiry (service_request_date, name, company_name, phone, address, city, zipcode, nature_of_service, product, ups, invertor, model_name, rating, battery, battery_ratings, quantity, strings, ac_availability, ac_capacity, dg_availability, dg_capacity, load_type, job_status, engineer_remarks, customer_remarks, engineer_name, engineer_sign, customer_name, customer_sign)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param(
        'sssssssssssssssssssssssssssss',
        $data['service_request_date'], $data['name'], $data['company_name'], 
        $data['phone'], $data['address'], $data['city'], $data['zipcode'], 
        $data['nature_of_service'], $data['product'], 
        $data['ups'], $data['invertor'], $data['model_name'], $data['rating'], 
        $data['battery'], $data['battery_ratings'], $data['quantity'], $data['strings'], 
        $data['ac_availability'], $data['ac_capacity'], $data['dg_availability'], 
        $data['dg_capacity'], $data['load_type'], $data['job_status'], 
        $data['engineer_remarks'], $data['customer_remarks'], $data['engineer_name'], 
        $data['engineer_sign'], $data['customer_name'], $data['customer_sign']
    );
    
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }
    $stmt->close();
}

// Collect POST data (this should be from a form)
$data = [
    'service_request_date' => $_POST['service_request_date'],
    'name' => $_POST['name'],
    'company_name' => $_POST['company_name'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode'],
    'nature_of_service' => $_POST['nature_of_service'], 
    'product' => $_POST['product'],
    'ups' => $_POST['ups'],
    'invertor' => $_POST['invertor'],
    'model_name' => $_POST['model_name'],
    'rating' => $_POST['rating'],
    'battery' => $_POST['battery'],
    'battery_ratings' => $_POST['battery_ratings'],
    'quantity' => $_POST['quantity'],
    'strings' => $_POST['strings'],
    'ac_availability' => $_POST['ac_availability'],
    'ac_capacity' => $_POST['ac_capacity'],
    'dg_availability' => $_POST['dg_availability'],
    'dg_capacity' => $_POST['dg_capacity'],
    'load_type' => $_POST['load_type'],
    'job_status' => $_POST['job_status'],
    'engineer_remarks' => $_POST['engineer_remarks'],
    'customer_remarks' => $_POST['customer_remarks'],
    'engineer_name' => $_POST['engineer_name'],
    'engineer_sign' => $_POST['engineer_sign'],
    'customer_name' => $_POST['customer_name'],
    'customer_sign' => $_POST['customer_sign']
];

// Save the request data into the database
saveToDatabase($conn, $data);

// Close the database connection
$conn->close();

// Return a success message and redirect
echo "<script>
    alert('Enquiry submitted successfully!');
    window.location.href = 'index.php';
</script>";

?>
