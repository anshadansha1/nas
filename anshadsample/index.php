<?php
include('db_conn.php');
$query = $conn->query("create table if not exists tbl_register(id int(10) primary key auto_increment,username varchar(40),address varchar(40),gender varchar(10),email varchar(50),password varchar(30))");
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="login_style.css">
    </head>
    <body>
        <h1>REGISTRATION</h1>.
        
        <h2>
            <?php echo 'Rajagiri';
            $a = 12;
            echo " ".$a*$a;
            ?>
        </h2>
        <form action="serve.php" method="post">
        <table>
        <div class="mb-3">
            <tr>
            <td><label for="username">Username : </label></td>
            <td><input type="text" name="uname" placeholder="Enter username"></td>
            </tr>
        </div>
            <tr>
            <td><label for="ads">Address : </label></td>
            <td><input type="text" name="address" placeholder="Enter Address"></td>
            </tr>
            <tr>
            <td><label for="gnd">Gender : </label></td>
            <td><input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br></td>
            </tr>
            <tr>
            <td><label for="mail">Email : </label></td>
            <td><input type="email" name="email" placeholder="Enter Email"></td>
            </tr>
            <tr>
            <td><label for="pass">Password : </label></td>
            <td><input type="password" name="passw" placeholder="Enter password"></td>
            </tr>
            <tr>
            <td><input type="submit" value="Register"></td>
            </tr>   
        </table>
        

        
        </form>
    </body>
</html>