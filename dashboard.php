<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>OACS Dashboard</title>
    <meta name="description" content="Asset Management system using QR" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
    <link href="https://hencework.com/theme/vendors4/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

	<!-- Toastr CSS -->
    <link href="https://hencework.com/theme/vendors4/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

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
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
               <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">projects</span>
										<div class="d-flex align-items-center justify-content-between position-relative">
											<div>
												<span class="d-block display-5 font-weight-400 text-dark">12+</span>
											</div>
											<div class="position-absolute r-0">
												<span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="86">
													<span class="percent head-font">86</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Budget</span>
										<div class="d-flex align-items-center justify-content-between position-relative">
											<div>
												<span class="d-block">
													<span class="display-5 font-weight-400 text-dark">$<span class="counter-anim">740,260</span></span>
												</span>
											</div>
											<div class="position-absolute r-0">
												<span id="pie_chart_2" class="d-flex easy-pie-chart" data-percent="75">
													<span class="percent head-font">75</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Revenue</span>
										<div class="d-flex align-items-end justify-content-between">
											<div>
												<span class="d-block">
													<span class="display-5 font-weight-400 text-dark">$28,725</span>
													<small>excl tax</small>
												</span>
											</div>
											<div>
												<span class="text-success font-12 font-weight-600">+5%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="card card-sm">
									<div class="card-body">
										<span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Genrated Invoices</span>
										<div class="d-flex align-items-end justify-content-between">
											<div>
												<span class="d-block">
													<span class="display-5 font-weight-400 text-dark">187</span>
												</span>
											</div>
											<div>
												<span class="text-danger font-12 font-weight-600">-12%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body pa-0">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-sm table-hover mb-0">
											<thead>
												<tr>
													<th>Logo</th>
													<th>Project</th>
													<th>Company</th>
													<th>Update</th>
													<th>Budget</th>
													<th>Tasks</th>
													<th class="w-20">Status</th>
													<th>Deadline</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class="img-fluid rounded" src="dist/img/logo1.jpg" alt="icon"></td>
													<td>Branding</td>
													<td>Pineapple Inc</td>
													<td>13 Nov 2018</td>
													<td><span class="badge badge-success">Completed</span></td>
													<td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>0</span></span></td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-25p">95%</label>
																<div class="progress progress-bar-xs">
																	<div class="progress-bar bg-success w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>10 Nov 2018</td>
												</tr>
												<tr>
													<td><img class="img-fluid rounded" src="dist/img/logo2.jpg" alt="icon"></td>
													<td>Website</td>
													<td>Gooole co.</td>
													<td>30 Nov 2018</td>
													<td><span class="badge badge-primary">In Process</span></td>
													<td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>3</span></span></td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-25p">70%</label>
																<div class="progress progress-bar-xs">
																	<div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>13 Dec 2018</td>
												</tr>
												<tr>
													<td><img class="img-fluid rounded" src="dist/img/logo3.jpg" alt="icon"></td>
													<td>Collaterals</td>
													<td>Big Energy</td>
													<td>12 Nov 2018</td>
													<td><span class="badge badge-danger">Behind</span></td>
													<td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>14</span></span></td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-25p">35%</label>
																<div class="progress progress-bar-xs">
																	<div class="progress-bar bg-danger w-35" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>21 Oct 2018</td>
												</tr>
												<tr>
													<td><img class="img-fluid rounded" src="dist/img/logo4.jpg" alt="icon"></td>
													<td>Branding, Print</td>
													<td>Novotel</td>
													<td>10 Nov 2018</td>
													<td><span class="badge badge-primary">In process</span></td>
													<td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>6</span></span></td>
													<td>
														<div class="progress-wrap lb-side-left mnw-125p">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-25p">85%</label>
																<div class="progress progress-bar-xs">
																	<div class="progress-bar bg-primary w-85" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>14 Nov 2018</td>
												</tr>
												<tr>
													<td><img class="img-fluid rounded" src="dist/img/logo5.jpg" alt="icon"></td>
													<td>Web Application</td>
													<td>Folkswagan</td>
													<td>12 Nov 2018</td>
													<td><span class="badge badge-danger">Behind</span></td>
													<td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>9</span></span></td>
													<td>
														<div class="progress-wrap lb-side-left">
															<div class="progress-lb-wrap">
																<label class="progress-label mnw-25p">30%</label>
																<div class="progress progress-bar-xs">
																	<div class="progress-bar bg-danger w-30" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>15 Oct 2018</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="https://hencework.com/theme/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

	<!-- Toastr JS -->
    <script src="https://hencework.com/theme/vendors4/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Counter Animation JavaScript -->
	<script src="https://hencework.com/theme/vendors4/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="https://hencework.com/theme/vendors4/jquery.counterup/jquery.counterup.min.js"></script>

	<!-- Morris Charts JavaScript -->
    <script src="https://hencework.com/theme/vendors4/raphael/raphael.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/morris.js/morris.min.js"></script>

	<!-- Easy pie chart JS -->
    <script src="https://hencework.com/theme/vendors4/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

	<!-- Flot Charts JavaScript -->
    <script src="https://hencework.com/theme/vendors4/flot/excanvas.min.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.pie.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.resize.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.time.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.stack.js"></script>
    <script src="https://hencework.com/theme/vendors4/flot/jquery.flot.crosshair.js"></script>
    <script src="https://hencework.com/theme/vendors4/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

	<!-- EChartJS JavaScript -->
    <script src="https://hencework.com/theme/vendors4/echarts/dist/echarts-en.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard2-data.js"></script>

</body>


</html>
