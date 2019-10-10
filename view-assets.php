<?php include('session.php'); ?>
<?php
if(isset($_GET['id'])) {
  $entrant_id = $_GET['id'];
} else {
  header("Location: entrants.php");
  return;
}
//
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $serial_number = $_POST['serial_number'];
    $description = $_POST['description'];
    $query = "INSERT INTO asset(name, serial_number, description) VALUES ('$name', '$serial_number', '$description');";
    if($conn->query($query)){
      $asset_id = $conn->insert_id;
      $query = "INSERT INTO asset_flow(entrant_id, asset_id, status) VALUES ('$entrant_id', '$asset_id', 'In');";
      $conn->query($query);
      $query = "UPDATE entrant SET in_out = 'In' WHERE id = '$entrant_id'";
      $conn->query($query);
      header("Location: view-assets.php?id=".$entrant_id."&success");
    }else{
      header("Location: view-assets.php?id=".$entrant_id."&error");
    }
}
if(isset($_POST['edit']))
{
  $name = $_POST['name'];
  $serial_number = $_POST['serial_number'];
  $description = $_POST['description'];
  $id = $_POST['id'];
  $query = "UPDATE asset SET name = '$name', serial_number = '$serial_number', description = '$description' WHERE id = '$id'";
  if($conn->query($query)){
    header("Location: view-assets.php?id=".$entrant_id."&success");
  }else{
    header("Location: view-assets.php?id=".$entrant_id."&error");
  }
}
if(isset($_GET['out']))
{
    $id = $_GET['out'];
    $query = "UPDATE asset_flow SET status = 'Out' WHERE asset_id = '$id'";
    if($conn->query($query)){
      //
      $query = "SELECT asset.id, asset.name, asset.serial_number, asset.description, asset_flow.id as flow_id, asset_flow.entrant_id, asset_flow.datetime as date, asset_flow.status FROM asset_flow, asset WHERE asset_flow.entrant_id = '$entrant_id' AND asset_flow.asset_id = asset.id AND asset_flow.status = 'In' ORDER BY asset_flow.id DESC";
      $query = $conn->query($query);
      if($query->num_rows == 0) {
        $query = "UPDATE entrant SET in_out = 'Out' WHERE id = '$entrant_id'";
        $conn->query($query);
      }
      //
      header("Location: view-assets.php?id=".$entrant_id."&success");
    }else{
      header("Location: view-assets.php?id=".$entrant_id."&error");
    }
}
if(isset($_GET['in']))
{
    $id = $_GET['in'];
    $query = "INSERT INTO asset_flow(entrant_id, asset_id, status) VALUES ('$entrant_id', '$id', 'In');";
    if($conn->query($query)){
      $query = "UPDATE entrant SET in_out = 'In' WHERE id = '$entrant_id'";
      $conn->query($query);
      header("Location: view-assets.php?id=".$entrant_id."&success");
    }else{
      header("Location: view-assets.php?id=".$entrant_id."&error");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Asset Clearance - Assets</title>
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

                  <?php
                  //
                  $query = "SELECT * FROM entrant WHERE id = '$entrant_id'";
                  $query = $conn->query($query);
                  $row = $query->fetch_array();
                  $entrant_name = $row['name'];
                  //
                  ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                              <h4 class="m-b-20 header-title"><b><?php echo $entrant_name; ?>'s assets</b></h4>
                              <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Done</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Something went wrong!</strong> Try again.</div>
                              <?php } ?>
                                <div class="row">
                                  <div class="col-sm-12 text-right m-b-20">
                                    <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#new">Record Asset</a>
                                  </div>
                                    <div class="col-md-12 m-b-20">
                                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>S/N</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $query = "SELECT asset.id, asset.name, asset.serial_number, asset.description, asset_flow.id as flow_id, asset_flow.entrant_id, asset_flow.datetime as date, asset_flow.status FROM asset_flow, asset WHERE asset_flow.entrant_id = '$entrant_id' AND asset_flow.asset_id = asset.id ORDER BY asset_flow.id DESC";
                                        $query = $conn->query($query);
                                        while($row = $query->fetch_assoc())
                                        {
                                        ?>
                                        <tr>
                                            <td>
                                              <?php echo $row['date']; ?> <br>
                                              <span style="cursor: pointer" data-toggle="modal" data-target="#edit-<?php echo $row['flow_id'] ?>" class="badge">Edit</span>
                                              <?php
                                              if($row['status'] == "In") {
                                              ?>
                                              <a onclick="return confirm('Are you sure you want to record asset Out?')" href="view-assets.php?id=<?php echo $entrant_id ?>&out=<?php echo $row['id'] ?>" style="cursor: pointer" class="badge badge-danger">Record Asset Out</a>
                                              <a href="record-theft.php?entrant=<?php echo $entrant_id ?>&asset=<?php echo $row['id'] ?>" style="cursor: pointer" class="badge badge-dark pull-right">Record Asset Theft</a>
                                              <?php
                                              } else {
                                              ?>
                                              <a onclick="return confirm('Are you sure you want to record asset In?')" href="view-assets.php?id=<?php echo $entrant_id ?>&in=<?php echo $row['id'] ?>" style="cursor: pointer" class="badge badge-info">Record Asset In</a>
                                              <?php
                                              }
                                              ?>
                                            </td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['serial_number']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                        </tr>
                                        <div id="edit-<?php echo $row['flow_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      <h4 class="modal-title" id="add-contactLabel">Edit Asset</h4>
                                                  </div>
                                                  <form role="form" method="POST">
                                                      <div class="modal-body" style="padding: 0px">
                                                          <div class="col-md-12 form-group">
                                                              <label>Name</label>
                                                              <input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
                                                              <input type="text" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Name" name="name" required=""/>
                                                          </div>
                                                          <div class="col-md-12 form-group">
                                                              <label>Serial Number</label>
                                                              <input type="text" value="<?php echo $row['serial_number']; ?>" class="form-control" placeholder="Serial Number" name="serial_number" required=""/>
                                                          </div>
                                                          <div class="col-md-12 form-group">
                                                              <label>Description</label>
                                                              <textarea class="form-control" placeholder="Description" name="description" required=""><?php echo $row['description']; ?></textarea>
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


        <div id="new" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-contactLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="add-contactLabel">Record Asset</h4>
                  </div>
                  <form role="form" method="POST">
                    <div class="modal-body" style="padding: 0px">
                        <div class="col-md-12 form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required=""/>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Serial Number</label>
                            <input type="text" class="form-control" placeholder="Serial Number" name="serial_number" required=""/>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Description" name="description" required=""></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary" name="save">Save</button>
                      </div>
                  </form>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->



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
