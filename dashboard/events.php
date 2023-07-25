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
// count row
$count ="SELECT `total_events` FROM `events`";
$results = mysqli_query($conn,$count);
$count = mysqli_num_rows($results);
$t = $count - 1;
//connect total events
$total_events ="SELECT `total_events` FROM `events` limit $t,$count";
$result = mysqli_query($conn,$total_events);
$total_events = mysqli_fetch_object($result);

// connect Total_Events_in_this_Month
$Total_Events_in_this_Month ="SELECT `Total_Events_in_this_Month` FROM `events` limit $t,$count";
$resul = mysqli_query($conn,$Total_Events_in_this_Month);
$Total_Events_in_this_Month = mysqli_fetch_object($resul);

// connect Completed_Events
$Completed_Events ="SELECT `Completed_Events` FROM `events` limit $t,$count";
$resu = mysqli_query($conn,$Completed_Events);
$Completed_Events = mysqli_fetch_object($resu);

// connect Pending_Events
$Pending_Events ="SELECT `Pending_Events` FROM `events`limit $t,$count";
$res = mysqli_query($conn,$Pending_Events);
$Pending_Events = mysqli_fetch_object($res);
 
// connect Pending_Events
$Events_in_this_week ="SELECT `Events_in_this_week` FROM `events`limit $t,$count";
$ab = mysqli_query($conn,$Events_in_this_week);
$Events_in_this_week = mysqli_fetch_object($ab);


?>

