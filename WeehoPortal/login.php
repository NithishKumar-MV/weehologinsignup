<!-- <?php
// include("db_connect.php");

// $email = $_POST['email'];
// $password = $_POST['password'];

// $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
// $result = $conn->query($sql);

// if ($result->num_rows == 1) {
//     $row = $result->fetch_assoc();
//     if (password_verify($password, $row['password'])) {
//         echo "Login successful";
//     } else {
//         echo "Invalid password";
//     }
// } else {
//     echo "User not found";
// }

// $conn->close();
?> -->
<?php
//session_start(); // Start a session to manage user authentication
 include("db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "hii..";
    $sql = "SELECT * FROM `users` WHERE `email` ='$email' AND `password`='$password'";
    echo "yes ";
    $result = $conn->query($sql);
    echo "no";
    if ($result->num_rows == 1) {        
       // echo"login sucessful";
        // User is authenticated
       // $_SESSION["email"] = $email;
       header("Location: bookanevent.html");// Redirect to the dashboard page
    } else {
        // Invalid login
        $error_message = "Invalid email or password";
        echo $error_message;
    }
}
?>