<?php
// Database setup script for InfinityFree

$servername = "sql308.infinityfree.com";  // InfinityFree MySQL server
$username   = "if0_40039566";             // InfinityFree DB username
$password   = "opensource123AA";     // Your InfinityFree control panel password
$dbname     = "if0_40039566_bookings";    // Your InfinityFree database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

// Connection successful
// echo "Connected successfully"; // uncomment for testing
?>
