<?php
    //connect db
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "gdjesdb";

    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }catch(mysqli_sql_exception){
        echo "Server Error";
    }

    if($conn){
        echo "You are connected!";
    }
    //retrieve data from user input
    //save data to database
?>