<?php
session_start();
$uname = "";
$error = ''; // Variable To Store Error Message
if (isset($_SESSION['logged_user_info'])) {
    header("Location: dashboard.php");
}
if (isset($_POST['submit'])) {
    // Define $username and $password
    $username = $_POST['phone'];
    $uname = $_POST['phone'];
    $password = $_POST['password'];
    // Establishing Connection with Server by passing server_name, user name, password and database as a parameter
    include("config/config.php");
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = md5(stripslashes($password));
    // SQL query to fetch information of registerd users and finds user match.

    $query = "SELECT id, status FROM staff WHERE phone = '$username' AND password = '$password' LIMIT 1";
    $query = $conn->query($query);
    if ($query->num_rows == 1) {
        $arr = $query->fetch_array();
        if($arr['status'] !== 'Active') {
          $error = '<div class="alert alert-warning alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Account deactivated,<br>Contact Administrator for support</div>';
        } else {
          $_SESSION['logged_user_info'] = $arr['id']; // Initializing Session
          header("Location: dashboard.php?_rdr"); // Redirecting To Other Page
        }
    } else {
        $error = '<div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Invalid Phone Number or Password</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>OACS Login</title>
  <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Toggles CSS -->
  <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
  <link href="https://hencework.com/theme/vendors4/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet"
    type="text/css">

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
  <div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 pa-0">
            <div class="auth-form-wrap pt-xl-0 pt-70">
              <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                <a class="auth-brand text-center d-block mb-20" href="">
                  <img class="brand-img" src="dist/img/logo-light.png" alt="brand" />
                </a>
                <form class="form-horizontal" method="POST">
                  <p class="text-center mb-30">Sign in to your account.</p>
                  <?php echo $error; ?>
                  <div class="form-group">
                    <input class="form-control" name="phone" placeholder="Phone" type="phone" value="<?php echo $uname; ?>" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="password" placeholder="Password" type="password" required>
                  </div>
                  <div class="custom-control custom-checkbox mb-25">
                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                    <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                  </div>
                  <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Main Content -->

  </div>
  <!-- /HK Wrapper -->

  <!-- JavaScript -->

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

  <!-- Init JavaScript -->
  <script src="dist/js/init.js"></script>
</body>
</html>
