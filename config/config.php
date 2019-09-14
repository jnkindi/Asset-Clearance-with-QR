<?php
$server = "localhost";
$user = "root";
$pass = "root@123";
$db = "asset_clearance_db";
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
