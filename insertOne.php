<?php

// import database information
include 'env.php';

// variable
$tableName = 'users';

$in_username = $_GET['username'];
$in_password = $_GET['password'];
$in_email = $_GET['email'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "INSERT INTO {$tableName} (username,password,email)
        VALUES 
        ('{$in_username}','{$in_password}','{$in_email}');";

$result = $conn->query($sql);

if ($result) {
    echo "New record ({$in_username}) created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
