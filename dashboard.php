<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Dashboard</title>
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
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <h4 class="text-info text-center">Asset Clearance</h2>
                                        </div>
										<div class="col-lg-12 col-sm-12">
											<div class="widget-inline-box text-center">
                                                <?php
                                                $query = "SELECT COUNT(DISTINCT(entrant_id)) AS entrants FROM asset_flow WHERE DATE(`datetime`) = CURDATE() AND status = 'In'";
                                                $query = $conn->query($query);
                                                $row = $query->fetch_array();
                                                $entrants = (($row['entrants'] == "")? 0:$row['entrants']);
                                                ?>
												<h3 class="m-t-10"><i class="text-primary mdi mdi-chevron-double-right"></i> <b data-plugin="counterup"><?php echo number_format($entrants) ?></b></h3>
												<p class="text-muted">Today Entrances</p>
											</div>
										</div>

										<div class="col-lg-12 col-sm-12">
											<div class="widget-inline-box text-center">
                                                <?php
                                                $query = "SELECT COUNT(DISTINCT(entrant_id)) AS entrants FROM asset_flow WHERE DATE(`datetime`) = CURDATE() AND status = 'Out'";
                                                $query = $conn->query($query);
                                                $row = $query->fetch_array();
                                                $entrants = (($row['entrants'] == "")? 0:$row['entrants']);
                                                ?>
												<h3 class="m-t-10"><i class="text-custom mdi mdi-chevron-double-left"></i> <b data-plugin="counterup"><?php echo number_format($entrants) ?></b></h3>
												<p class="text-muted">Today Exits</p>
											</div>
										</div>

                    <div class="col-lg-12 col-sm-12">
                                            <?php
                                                $query = "SELECT * FROM staff WHERE status = 'Active'";
                                                $query = $conn->query($query);
                                                $rows = $query->num_rows;
                                            ?>
                      <div class="widget-inline-box text-center b-0">
                        <h3 class="m-t-10"><i class="text-dark mdi mdi-account"></i> <b data-plugin="counterup"><?php echo number_format($rows) ?></b></h3>
                        <p class="text-muted">Total Staff</p>
                      </div>
                    </div>

										<div class="col-lg-12 col-sm-12">
                                            <?php
                                                $query = "SELECT COUNT(id) AS cases FROM asset_theft WHERE status = 'Pending'";
                                                $query = $conn->query($query);
                                                $row = $query->fetch_array();
                                                $cases = (($row['cases'] == "")? 0:$row['cases']);
                                            ?>
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-dark mdi mdi-filter-remove"></i> <b data-plugin="counterup"><?php echo number_format($cases) ?></b></h3>
												<p class="text-muted">Pending Theft case</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->
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

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>
    </body>

</html>
