<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback system";

    //creating connection to database
    $con = mysqli_connect($servername, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
    }
    //Output Form Entries from the Database
    $driverName=$_POST['driver_name'];
    $sql= "SELECT * FROM trip_details WHERE driver_name=$driver_name";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        
       while($row = mysqli_fetch_assoc($result)){
        $checkMan=$row["isManger"];
        echo "Trip_id: ".$row["trip_id"]." dirver Name: ".$row[	"driver_name"]." feedback: ".$row["feedback"];
       }
       

    }
    else
    {
        echo "NO feedbacks yet !!";
    }
    // closing connection
    mysqli_close($con);




?>
