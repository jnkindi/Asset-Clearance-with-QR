<?php
include("session.php");
session_destroy(); // Destroying All Sessions
header("Location: login.php");
?>