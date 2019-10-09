<?php
include('session.php');
if(!isset($_GET['id']) || $_GET['id'] == "")
{
    header("Location: users.php");
}
else
{
    $id = $_GET['id'];
}
?>
<?php
if(isset($_POST['update']))
{
    $names = $_POST['names'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $query = "UPDATE staff SET names = '$names', phone = '$phone', role = '$role' WHERE id = '$id'";
    $query = $conn->query($query);
    header("Location: edit-profile.php?id=$id&success");
}
if(isset($_POST['change_password']))
{
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    if($new_password == $confirm_password)
    {
        $new_password = md5($new_password);
        $query = "UPDATE staff SET password = '$new_password' WHERE id = '$id'";
        $query = $conn->query($query);
        header("Location: edit-profile.php?id=$id&success");
    }
    else
    {
        header("Location: edit-profile.php?id=$id&error");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - User Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Asset Clearance" name="description" />
        <meta content="Coderthemes" name="author" />
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

        <div id="page-wrapper">

            <?php include('includes/header.php'); ?>

            <!-- Page content start -->
            <div class="page-contentbar">
            <?php include('includes/left-bar.php'); ?>

            <?php
            $query = "SELECT * FROM staff WHERE id = '$id' ORDER BY names ASC";
            $query = $conn->query($query);
            $row = $query->fetch_array();
            ?>
                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/user.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5"><?php echo $row['names'] ?></h4>
                                        </div>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Completed</div>
                        <?php } if(isset($_GET['error'])){ ?>
                        <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Invalid!</strong> Confirmation Password</div>
                        <?php } ?>

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#edit_profile" data-toggle="tab" aria-expanded="true">
                                        Edit Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#change_password" data-toggle="tab" aria-expanded="false">
                                        Change Password
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="edit_profile">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?php echo $row['names'] ?>'s Information</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label for="userName">Names</label>
                                                    <input type="text" value="<?php echo $row['names'] ?>" id="userName" class="form-control" name="names">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="userName">Phone</label>
                                                    <input type="text" value="<?php echo $row['phone'] ?>" id="userName" class="form-control" name="phone">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>User Role</label>
                                                    <select name="role" class="form-control">
                                                        <option value="" disabled>Select User Role</option>
                                                        <option <?php echo (($row['role'] == "Security Agent")? "selected":"")?> value="Security Agent">Security Agent</option>
                                                        <option <?php echo (($row['role'] == "Administrator")? "selected":"")?> value="Administrator">Administrator</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="update">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                                <div class="tab-pane" id="change_password">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">New Password</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="POST">
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" id="Password" class="form-control" name="new_password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" id="RePassword" class="form-control" name="confirm_password" required>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit" name="change_password">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
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
