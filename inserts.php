<?php

// import database information
include 'env.php';

$tableName = 'user';

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "INSERT INTO {$tableName} (u_username,u_password)
        VALUES 
        ('admin','passAdmin'),
        ('mohammad','1234'),
        ('reza','9876');
        ";

$result = $conn->query($sql);

if ($result) {
    echo "New records created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// disconnect from database
$conn->close();

?>