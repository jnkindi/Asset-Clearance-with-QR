<?php include('session.php'); ?>
<?php
if(isset($_GET['entrant']) && isset($_GET['asset'])) {
  $entrant_id = $_GET['entrant'];
  $asset_id = $_GET['asset'];
  //
  $query = "SELECT name FROM entrant WHERE id = '$entrant_id'";
  $query = $conn->query($query);
  $row = $query->fetch_array();
  $entrant_name = $row['name'];
  //
  $query = "SELECT name FROM asset WHERE id = '$asset_id'";
  $query = $conn->query($query);
  $row = $query->fetch_array();
  $asset_name = $row['name'];
  //
} else {
  header("Location: entrants.php");
  return;
}
//
if(isset($_POST['submit']))
{
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    $query = "INSERT INTO asset_theft(entrant_id, asset_id, description, date, status) VALUES ('$entrant_id', '$asset_id', '$description', '$date', 'Pending')";
    if($conn->query($query)){
        header("Location: record-theft.php?success&entrant=$entrant_id&asset=$asset_id");
    }else {
      header("Location: record-theft.php?error&entrant=$entrant_id&asset=$asset_id");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Register Asset Theft</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Asset Clearance" name="description" />
        <meta content="UoK" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <?php include('includes/header.php'); ?>

            <!-- Page content start -->
            <div class="page-contentbar">
              <?php include('includes/left-bar.php'); ?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <?php
                            if(isset($_GET['hash'])) {
                              $hash = $_GET['hash'];
                            ?>
                            <div class="col-sm-12 text-center">
                              <img src="<?php echo generateQR($hash); ?>" alt="Entrant QR">
                            </div>
                            <?php } ?>
                            <div class="col-sm-12">
                              <h4 class="m-b-20 header-title"><b>Register Asset Theft</b></h4>
                              <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Registered New Asset Theft</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Something went wrong, Try again !</div>
                              <?php } ?>
                                <div class="row">
                                    <div class="col-md-12 m-b-20">
                                        <form role="form" method="POST">
                                            <div class="col-md-4 form-group">
                                                <label>Asset Name</label>
                                                <input type="text" value="<?php echo $asset_name; ?>" readonly class="form-control">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Entrant</label>
                                                <input type="text" value="<?php echo $entrant_name; ?>" readonly class="form-control">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>DATE</label>
                                                <input type="date" value="<?php echo Date('Y-m-d'); ?>" autocomplete="off" required class="form-control" name="date" placeholder="Date">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Description</label>
                                                <textarea required class="form-control" name="description" placeholder="Description"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                              <br>
                                              <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- end row -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->

                    <?php include("includes/footer.php"); ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
    </body>

</html>
