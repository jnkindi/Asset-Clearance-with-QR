<?php
$appURL = 'http://localhost/asset-clearance/';
//
$server="localhost";
$user="root";
$pass="root@123";
$db="asset_clearance_db";
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

function generateQR($hash) {
  global $appURL;
  $entrantLink = $appURL."check-entrant?entrant=".$hash;
  return "https://chart.apis.google.com/chart?chs=150x150&cht=qr&chl=$entrantLink&choe=UTF-8";;
}
?>