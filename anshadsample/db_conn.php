<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "db_anshad";
    
    $conn = new mysqli("$server_name","$username","$password","$database_name");
    if($conn->connect_error){
        echo"Connection error";
    }
    else{
        echo"Success";
    }
?>