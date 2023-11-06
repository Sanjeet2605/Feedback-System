<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// $sql = "INSERT INTO login (user_id, password, isManger) VALUES (12345, sanjeet, 1)";
// $sql = "INSERT INTO login (user_id, password, isManger) VALUES (12346, sanjeet, 0)";
?>
<h1>Login by entering your details</h1>

<form action="check_details.php" method="post" id="nameform">
    User Id: <input type="text" name="user_id"></br>
    </br>
    Password: <input type="text" name="password"></br>
    </br>
    <button type="submit" form="nameform" value="submit">Submit</button></br></br>

    <button type="reset" value="Reset">Reset</button></br></br>
</form>