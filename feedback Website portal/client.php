<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>
<h1>Welcome </h1>
<h2>Please provide a feedback</h2>
</br>
<form action="feedback_update.php" method="post" id="nameform">
    Trip Id: <input type="text" name="trip_id"></br>
    </br>
    Driver Name: <input type="text" name="driver_name"></br>
    </br>
    Feedback: <input type="text" name="feedback"></br>
    </br>
    <button type="submit" form="nameform" value="submit">Submit</button></br></br>

    <button type="reset" value="Reset">Reset</button></br></br>

</form>



<?php


?>
