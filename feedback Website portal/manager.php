<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>
<h1>Welcome Manger</h1>
<form action="all_feedback.php" method="post" id="nameform">
    <button type="submit" form="nameform" value="submit">All feedback</button></br></br>

</form>
<form action="driver_feedback.php" method="post" id="nameform">
    Driver Name: <input type="text" name="driver_name"></br>
    </br>
    <button type="submit" form="nameform" value="submit">All feedbacks</button></br></br>

</form>

<?php


?>
