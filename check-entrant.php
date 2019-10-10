<?php include('lib/config/config.php'); ?>
<?php
if(isset($_GET['hash']) && $_GET['hash'] != "") {
  $hash = $_GET['hash'];
  $query = "SELECT id FROM entrant WHERE hash = '$hash'";
  $query = $conn->query($query);
  if($query->num_rows != 0) {
    $row = $query->fetch_array();
    $entrant_id = $row['id'];
    header("Location: view-assets.php?id=".$entrant_id);
  } else {
    header("Location: login.php");
  }
} else {
  header("Location: login.php");
}
?>
