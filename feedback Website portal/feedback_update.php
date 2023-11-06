<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback system";

// Create connection

// $servername = "localhost";
// $database = "u123456789_mydatabase";
// $username = "u123456789_myuser";
// $password = "PasSw0rd123@";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$trip_id=$_POST['trip_id'];
$driver_name=$_POST['driver_name'];
$feedback=$_POST['feedback'];

// $trip_id = mysqli_real_escape_string($mysqli, $_POST['trip_id']);
// $driver_name = mysqli_real_escape_string($mysqli, $_POST['driver_name']);
// $feedback = mysqli_real_escape_string($mysqli, $_POST['feedback']);
$sql = "INSERT INTO trip_details (trip_id, driver_name, feedback) VALUES ($trip_id ,$driver_name, $feedback)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $trip_id=$_POST['trip_id'];
// $driver_name=$_POST['driver_name'];
// $feedback=$_POST['feedback'];
// $sql = "INSERT INTO trip_details (trip_id, driver_name, feedback) VALUES ($trip_id ,$driver_name, $feedback)";

// // $sql = "UPDATE table_name SET column1 = 'new_value1', column2 = 'new_value2' WHERE condition";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

?>




<?php


?>
