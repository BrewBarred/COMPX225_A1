<?php
// db.php
// This file handles connecting to the MySQL database.
// Using require/include lets us avoid repeating connection code everywhere.

// Database credentials (adjust if different in your setup)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "kiwi_kloset"; // Must match the imported kiwi_kloset.sql

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
