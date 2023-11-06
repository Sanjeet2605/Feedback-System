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
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM login WHERE user_id = '$user_id' AND password = '$password' ";
    //fire query
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $checkMan;
       while($row = mysqli_fetch_assoc($result)){
        $checkMan=$row["isManger"];
        echo $checkMan." after";
       }
       if(!$checkMan){
        echo "aa";
        header("Location:http://localhost/feedback%20Website%20portal/client.php");
        exit;
    exit;

    }else {
        header("Location:http://localhost/feedback%20Website%20portal/manager.php");
        exit;
    }

    }
    else
    {
        echo "0 results";
        $next="login";
        header("http://localhost/feedback%20Website%20portal/login.php");
        exit;
    }
    // closing connection
    mysqli_close($con);




?>
