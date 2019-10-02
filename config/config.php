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

function generateQR($entrantId) {
  $appURL = "http://localhost/asset-clearance/";
  $entrantLink = $appURL."check-entrant?entrant=".$entrantId;
  return "https://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=$entrantLink&choe=UTF-8";
}
