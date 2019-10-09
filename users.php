<?php include('session.php'); ?>
<?php
if(isset($_POST['submit']))
{
    $names = $_POST['names'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);
    $query = "INSERT INTO staff (names, phone, password, role, status) VALUES ('$names', '$phone', '$password', '$role', 'Active');";
    $query = $conn->query($query);
    header("Location: users.php?success");
}
if(isset($_GET['block']))
{
    $id = $_GET['block'];
    $query = "UPDATE staff SET status = 'Inactive' WHERE id = '$id'";
    $query = $conn->query($query);
    header("Location: users.php?success");
}
if(isset($_GET['unblock']))
{
    $id = $_GET['unblock'];
    $query = "UPDATE staff SET status = 'Active' WHERE id = '$id'";
    $query = $conn->query($query);
    header("Location: users.php?success");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Users</title>
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
                                <h4 class="header-title m-t-0 m-b-20">Users</h4>
                            </div>
                        </div> <!-- end row -->
                        <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Completed</div>
                        <?php } ?>



                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary btn-rounded btn-lg m-b-30" data-toggle="modal" data-target="#add-contact">Add User</button>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <?php
                            $query = "SELECT * FROM staff ORDER BY names ASC";
                            $query = $conn->query($query);
                            while($row = $query->fetch_assoc())
                            {
                            ?>
                        	<div class="col-md-4">
                        		<div class="text-center card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="edit-profile.php?id=<?php echo $row['id']; ?>">Edit</a></li>
                                            <?php
                                            if($row['status'] == "Active"){
                                            ?>
                                            <li><a href="users.php?block=<?php echo $row['id']; ?>">Block</a></li>
                                            <?php
                                            }else{
                                            ?>
                                            <li><a href="users.php?unblock=<?php echo $row['id']; ?>">Unblock</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="member-card">
                                        <span class="user-badge bg-<?php echo (($row['role'] == "Administrator") ? "success":"info")?>"><?php echo $row['role'] ?></span>
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="assets/images/user.jpg" class="img-circle img-thumbnail" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5"><?php echo $row['names'] ?></h4>
                                            <?php if($row['status'] != "Active"){ ?>
                                            <span class="label bg-warning">User Account Blocked</span>
                                            <?php }else{ ?>
                                            <span class="label bg-success">User Account Active</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <?php
                            }
                            ?>

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <?php include("includes/footer.php"); ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->


        <!-- sample modal content -->
        <div id="add-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="add-contactLabel">Add User</h4>
                    </div>
                    <form role="form" method="POST" enctype="multipart/form-data">
                        <div class="modal-body" style="padding: 0px">
                            <div class="col-md-6 form-group">
                                <label>Names</label>
                                <input type="text" required class="form-control" placeholder="Names" name="names">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone</label>
                                <input type="text" required class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>User role</label>
                                <select name="role" class="form-control">
                                    <option value="" disabled selected>Select User role</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Security Agent">Security Agent</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Password</label>
                                <input type="password" required class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->





        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>

</html>
