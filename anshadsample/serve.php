<?php
include('db_conn.php'); //To include the code of database connection to this php file.
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username = $_POST["uname"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];  // get the value from a form element
        $password = $_POST["passw"];

        $ins = $conn->query("insert into tbl_register(username,address,gender,email,password) values('$username','$address','$gender','$email','$password')");

        echo "Email : ". $email;   // display  the value
        echo "Password : ". $password; 
        }
?>
<!---->