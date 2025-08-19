<?php
include "conn.php";
session_start();
if(empty($_SESSION["admin"])) {
    header('location:login.php');
    exit();
} else {
?>
<?php

if (isset($_POST['submit'])) {
    $nh = mysqli_real_escape_string($connect, $_POST['sname']);
    $ns = mysqli_real_escape_string($connect, $_POST['ns']);

    // Check if file was uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif', 'svg');
        if(!in_array($file_extension, $allowed_types)) {
            $error_message = "Only image files (JPG, JPEG, PNG, GIF, SVG) are allowed!";
        } else {
            // Create unique filename to prevent conflicts
            $new_filename = uniqid() . '.' . $file_extension;
            $upload_path = "image/svg/";

            // Create directory if it doesn't exist
            if (!file_exists($upload_path)) {
                mkdir($upload_path, 0777, true);
            }

            $folder = $upload_path . $new_filename;

            // Move uploaded file
            if(move_uploaded_file($tempname, $folder)) {
                // Insert into database
                $sql = "INSERT INTO services(sname, sdec, simage) VALUES ('$nh', '$ns', '$folder')";
                if(mysqli_query($connect, $sql)) {
                    $success_message = "Service added successfully!";
                } else {
                    $error_message = "Database error: " . mysqli_error($connect);
                }
            } else {
                $error_message = "Failed to upload file!";
            }
        }
    } else {
        $error_message = "Please select an image file!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naye Soch Naya Kadam | Bhagalpur</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include "aside.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Services</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Services</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <?php if(isset($success_message)): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> Success!</h5>
          <?php echo $success_message; ?>
        </div>
        <?php endif; ?>

        <?php if(isset($error_message)): ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-ban"></i> Error!</h5>
          <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="sname">Service Name</label>
                    <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter service name" required>
                  </div>

                  <div class="form-group">
                    <label for="ns">Service Description</label>
                    <textarea name="ns" id="ns" class="form-control" rows="3" placeholder="Enter service description" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="image">Service Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image" accept="image/*" required>
                        <label class="custom-file-label" for="image">Choose image file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <small class="form-text text-muted">Allowed formats: JPG, JPEG, PNG, GIF, SVG (Max size: 5MB)</small>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Add Service
                  </button>
                  <button type="reset" class="btn btn-secondary ml-2">
                    <i class="fas fa-undo"></i> Reset
                  </button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Services List Section -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Available Services</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Service Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM services ORDER BY sid DESC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php echo $row['sid']; ?></td>
                  <td><?php echo htmlspecialchars($row['sname']); ?></td>
                  <td><?php echo htmlspecialchars(substr($row['sdec'], 0, 100)) . (strlen($row['sdec']) > 100 ? '...' : ''); ?></td>
                  <td>
                    <?php if(file_exists($row['simage'])): ?>
                      <img src="<?php echo $row['simage']; ?>" width="80" height="80" alt="Service Image" class="img-thumbnail">
                    <?php else: ?>
                      <span class="badge badge-warning">Image not found</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="editservice.php?id=<?php echo $row['sid']; ?>" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="deleteservice.php?id=<?php echo $row['sid']; ?>"
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure you want to delete this service?')">
                      <i class="fas fa-trash"></i> Delete
                    </a>
                  </td>
                </tr>
                <?php
                  }
                } else {
                ?>
                <tr>
                  <td colspan="5" class="text-center">No services found</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  // Initialize custom file input
  bsCustomFileInput.init();

  // Initialize DataTable
  $("#example1").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  });

  // File size validation
  $('input[type="file"]').change(function() {
    var fileSize = this.files[0].size / 1024 / 1024; // Size in MB
    if (fileSize > 5) {
      alert('File size must be less than 5MB!');
      $(this).val('');
      return false;
    }
  });

  // Auto-hide alerts after 5 seconds
  setTimeout(function() {
    $('.alert').fadeOut('slow');
  }, 5000);
});
</script>
</body>
</html>
<?php } ?>
