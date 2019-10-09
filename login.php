<?php
session_start();
$uname="";
$error=''; // Variable To Store Error Message
if(isset($_SESSION['logged_user_info']))
{
  header("Location: dashboard.php");
}
if (isset($_POST['submit'])) {
// Define $username and $password
$username=$_POST['username'];
$uname=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user name, password and database as a parameter
include("lib/config/config.php");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = md5(stripslashes($password));
// SQL query to fetch information of registerd users and finds user match.

$query = "SELECT id, status FROM staff WHERE password = '$password' AND phone = '$username' LIMIT 1";
$query = $conn->query($query);
$rows = $query->num_rows;
$arr = $query->fetch_array();
$user_id = $arr['id'];
$user_status = $arr['status'];
if ($rows == 1)
{
   if ($user_status != "Inactive")
   {
      $_SESSION['logged_user_info'] = $user_id; // Initializing Session
      header("Location: dashboard.php?_rdr"); // Redirecting To Other Page
   }
   else
   {
    $error='<div class="alert alert-warning alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Account Inactive. Contact Administrator for Support!</div>';
   }
}
else
{
    $error='<div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Invalid Username, Email or Password</div>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Login</title>
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
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" style="height: 90px"></span>
                                            <h4 class="text-info">Asset Clearance</h2>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="POST">

                                        <?php echo $error; ?>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="username">Phone Number</label>
                                                <input class="form-control" autofocus type="text" id="username" required="" placeholder="Phone Number" name="username" value="<?php echo $uname; ?>" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>
                                            </div>
                                        </div>
                                                <a href="forget-password.php" class="text-muted pull-right font-14">Forgot your password?</a>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

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
