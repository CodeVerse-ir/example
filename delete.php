<?php

// import database information
include 'env.php';

// variable
$tableName = 'users';
$id = $_GET['id'];

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// execute query
$sql = "DELETE FROM {$tableName} WHERE id = {$id}";

$result = $conn->query($sql);

if ($result) {
    echo "Record ({$id}) deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// disconnect from database
$conn->close();
