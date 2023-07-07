<?php
// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "weeho";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from login form
        $uname = $_POST["uname"];
        $password = $_POST["password"];

        // Prepare and execute SQL statement
        $stmt = $conn->prepare("SELECT * FROM users WHERE uname = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a row is returned
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
          

            // Verify password
            if ($password === $row["password"]) {
                // Password is correct, login the user
                session_start();
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["uname"] = $row["uname"];

                // Redirect to the user's dashboard or any other page
                header("Location: ./dashboard.html");
                exit();
            } else {
                // Password is incorrect
                $error = "Invalid password.";
            }
        } else {
            // No user found with the given username
            $error = "User not found.";
        }
    }
}

// Close the database connection
$conn->close();
?>