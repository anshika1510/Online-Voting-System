<?php

    $servername="localhost";
    $username = "root";

    $connect = mysqli_connect("localhost", "root", "", "voting") or die("connection failed!");
    if($connect){
        echo "Connected!";
    }
    else{
        echo "Not connected!";
    }

?>