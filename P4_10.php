<!--Write a PHP program to implement MySQL databases with CRUD operations.-->
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'users' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert data
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql_insert = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "New record created successfully.<br>";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}

// Read data
if (isset($_POST['display'])) {
    $sql_read = "SELECT id, firstname, lastname, email FROM users";
    $result = $conn->query($sql_read);

    if ($result->num_rows > 0) {
        echo "<h2>Users:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

// Update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql_update = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";

    if ($conn->query($sql_update) === TRUE) {
        echo "Record updated successfully.<br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// Delete data
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql_delete = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully.<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
</head>

<body>
    <h2>Add New User</h2>
    <form method="post" action="">
        First Name: <input type="text" name="firstname"><br>
        Last Name: <input type="text" name="lastname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" name="submit" value="Add User">
    </form>

    <h2>Display Users</h2>
    <form method="post" action="">
        <input type="submit" name="display" value="Display Users">
    </form>

    <h2>Update User</h2>
    <form method="post" action="">
        ID: <input type="number" name="id"><br>
        First Name: <input type="text" name="firstname"><br>
        Last Name: <input type="text" name="lastname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" name="update" value="Update User">
    </form>

    <h2>Delete User</h2>
    <form method="post" action="">
        ID: <input type="number" name="id"><br>
        <input type="submit" name="delete" value="Delete User">
    </form>
</body>

</html>
