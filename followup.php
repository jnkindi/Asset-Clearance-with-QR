<?php include('lib/config/config.php'); ?>
<?php
if(isset($_GET['phone'])) {
  $phone = $_GET['phone'];
} else {
  $phone = '';
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Lost Asset Followup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Asset Clearance" name="description" />
        <meta content="UoK" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h4 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" style="height: 90px"></span>
                                            <h4 class="text-info">Asset Clearance</h4>
                                        </a>
                                    </h2>
                                </div>
                                <div class="account-content">
                                    <div class="text-center m-b-20">
                                      <form method="GET">
                                        <div class="col-md-8">
                                          <input type="text" value="<?php echo $phone; ?>" name="phone" autocomplete="off" placeholder="Phone Number" required class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                          <button class="btn btn-info">FOLLOWUP</button>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-md-12">
                                    <?php
                                    if(isset($_GET['phone'])) {
                                      $phone = $_GET['phone'];
                                      $query = "SELECT * FROM entrant WHERE phone = '$phone' LIMIT 1";
                                      $query = $conn->query($query);
                                      if($query->num_rows == 0) {
                                      ?>
                                        <h5 class="text-dark">Entrant not found</h5>
                                      <?php
                                      } else {
                                    ?>
                                      <br>
                                      <table class="table">
                                        <tr>
                                          <th>Asset</th>
                                          <th>Followup</th>
                                          <th>Date</th>
                                        </tr>
                                        <?php
                                        $row = $query->fetch_array();
                                        $entrant_id = $row['id'];
                                        $query = "SELECT asset.name, asset_theft_followup.id, asset_theft_followup.description, asset_theft_followup.date FROM asset, asset_flow, asset_theft, asset_theft_followup WHERE asset_flow.asset_id = asset.id AND asset_flow.entrant_id = '$entrant_id' AND asset_theft.entrant_id = asset_flow.entrant_id AND asset_theft.asset_id = asset.id AND asset_theft_followup.theft_id = asset_theft.id";
                                        $query = $conn->query($query);
                                        $list = array();
                                        while($row = $query->fetch_assoc()) {
                                          if(in_array($row['id'], $list)) {
                                        ?>
                                        <tr>
                                          <td><?php echo $row['name']; ?></td>
                                          <td><?php echo $row['description']; ?></td>
                                          <td><?php echo $row['date']; ?></td>
                                        </tr>
                                        <?php
                                          }
                                          array_push($list, $row['id']);
                                        }
                                      ?>
                                      </table>
                                    <?php
                                    }
                                    }
                                    ?>
                                    </div>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Back to <a href="login.php" class="text-dark m-l-5">Sign In</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>

</html>
