<?php include('session.php'); ?>
<?php
if(isset($_POST['edit']))
{
    $name = $_POST['name'];
    $type = $_POST['type'];
    $id = $_POST['id'];
    $query = "UPDATE entrant SET name = '$name', type = '$type' WHERE id = '$id'";
    if($conn->query($query)){
      header("Location: entrants.php?success");
    }else{
        header("Location: entrants.php?error");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Entrants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Asset Clearance" name="description" />
        <meta content="UoK" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!--Select2 CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

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
                              <h4 class="m-b-20 header-title"><b>Entrants</b></h4>
                              <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Done</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Something went wrong!</strong> Try again.</div>
                              <?php } ?>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-b-20">
                                      <a class="btn btn-primary btn-sm pull-right" href="register-entrant.php">New Entrant</a>
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Type</th>
                                            <th>In/Out</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i = 1;
                                        $query = "SELECT * FROM entrant ORDER BY id DESC";
                                        $query = $conn->query($query);
                                        while($row = $query->fetch_assoc())
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                              <?php echo $row['name']; ?> <br>
                                              <span style="cursor: pointer" data-toggle="modal" data-target="#edit-<?php echo $row['id'] ?>" class="badge">Edit</span>
                                              <a href="register-entrant.php?hash=<?php echo $row['hash'] ?>" style="cursor: pointer" class="badge badge-dark">Generate QR </a>
                                              <a href="view-assets.php?id=<?php echo $row['id'] ?>" style="cursor: pointer" class="badge badge-primary pull-right">View Assets </a>
                                            </td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['in_out']; ?></td>
                                        </tr>
                                        <div id="edit-<?php echo $row['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      <h4 class="modal-title" id="add-contactLabel">Edit Entrant "<?php echo $row['name']; ?>"</h4>
                                                  </div>
                                                  <form role="form" method="POST" enctype="multipart/form-data">
                                                      <div class="modal-body" style="padding: 0px">
                                                          <div class="col-md-6 form-group">
                                                              <label>Name</label>
                                                              <input type="text" value="<?php echo $row['name']; ?>" name="name" autocomplete="off" required class="form-control">
                                                              <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                                          </div>
                                                          <div class="col-md-6 form-group">
                                                              <label>Type</label>
                                                              <select name="type" class="form-control">
                                                                  <option <?php echo $row['type'] == "Student" ? "selected":"" ?> value="Student">Student</option>
                                                                  <option <?php echo $row['type'] == "Staff" ? "selected":"" ?> value="Staff">Staff</option>
                                                                  <option <?php echo $row['type'] == "Visitor" ? "selected":"" ?> value="Visitor">Visitor</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                          <button type="submit" class="btn btn-primary" name="edit">Save</button>
                                                      </div>
                                                  </form>
                                              </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                      </div><!-- /.modal -->
                                        <?php
                                        $i++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>


        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>


        <script>
        $("#staff").select2();
        </script>
    </body>

</html>
