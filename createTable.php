<?php

// import database information
include 'env.php';

// variable
$tableName = 'users';

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = " CREATE TABLE {$tableName}(
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255),
            password VARCHAR(255),
            email VARCHAR(255)
            );";

$result = $conn->query($sql);

if ($result) {
    echo "Table {$tableName} created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// disconnect from database
$conn->close();

?>