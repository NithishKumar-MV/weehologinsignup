<?php
// Assuming your database connection is in db_connect.php
include("db_connect.php");

// Get the posted data
$data = json_decode(file_get_contents("php://input"));

// Initialize the response array
$response = array('success' => false);

// Perform authentication against the database
if ($data && !empty($data->emailOrPhone) && !empty($data->password)) {
    $emailOrPhone = $conn->real_escape_string($data->emailOrPhone);
    $password = $conn->real_escape_string($data->password);

    $sql = "SELECT * FROM `users` WHERE `email` ='$emailOrPhone' AND `password`='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Authentication successful
        $response['success'] = true;
    }
}

// Close the database connection
$conn->close();

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
