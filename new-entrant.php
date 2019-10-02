<?php include('session.php'); ?>
<?php
if(isset($_POST['save'])) {
  $names = $_POST['names'];
  $phone = $_POST['phone'];
  $type = $_POST['type'];
  $query = "INSERT INTO entrant VALUES(NULL, '$names', '$phone', '$type')";
  $conn->query($query);
  $entrant_id = $conn->insert_id;
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>ASCS New Entrant</title>
    <meta name="description" content="Asset Management system using QR" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- ION CSS -->
    <link href="https://hencework.com/theme/vendors4/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors4/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" type="text/css">

    <!-- select2 CSS -->
    <link href="https://hencework.com/theme/vendors4/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Pickr CSS -->
    <link href="https://hencework.com/theme/vendors4/pickr-widget/dist/pickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="https://hencework.com/theme/vendors4/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
  <?php include('leftbar.php'); ?>
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Entrant</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>New Entrant</h4>
                </div>
                <?php
                if(isset($entrant_id)) {
                ?>
                <div class="row text-center">
                  <div class="col-md-12">
                    <img src="<?php echo generateQR($entrant_id); ?>" height="150px" width="150px">
                  </div>
                  <div class="col-md-12">
                    <label><?php echo $names; ?></label>
                  </div>
                </div>
                <?php } ?>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                      <form method="POST" class="col-md-12">
                                          <div class="col-md-12">
                                            <input type="text" name="names" class="form-control mt-15" required autocomplete="off" placeholder="Names">
                                          </div>
                                          <div class="col-md-12">
                                            <input type="text" name="phone" class="form-control mt-15" required autocomplete="off" placeholder="Phone">
                                          </div>
                                          <div class="col-md-12">
                                            <select name="type" class="form-control mt-15">
                                              <option value="Select Type" disabled>Select Type</option>
                                              <option value="Student" selected>Student</option>
                                              <option value="Staff">Staff</option>
                                              <option value="Visitor">Visitor</option>
                                            </select>
                                          </div>
                                          <div class="col-md-12">
                                            <button name="save" type="submit" class="btn btn-success mt-15">Save</button>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <?php include('footer.php'); ?>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
   <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="https://hencework.com/theme/vendors4/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://hencework.com/theme/vendors4/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Ion JavaScript -->
    <script src="https://hencework.com/theme/vendors4/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="dist/js/rangeslider-data.js"></script>

    <!-- Toggles JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="https://hencework.com/theme/vendors4/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="https://hencework.com/theme/vendors4/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Input spinner JavaScript -->
    <script src="https://hencework.com/theme/vendors4/bootstrap-input-spinner/src/bootstrap-input-spinner.js"></script>
    <script src="dist/js/inputspinner-data.js"></script>

    <!-- Pickr JavaScript -->
    <script src="https://hencework.com/theme/vendors4/pickr-widget/dist/pickr.min.js"></script>
    <script src="dist/js/pickr-data.js"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="https://hencework.com/theme/vendors4/moment/min/moment.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
</body>

</html>
