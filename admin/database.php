<?php

$user = "root";
$password = "";
$host = "localhost";
$dbname = "tcrdb";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



