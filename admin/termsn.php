<?php
include "conn.php";
 session_start();
 if(empty($_SESSION["admin"]))
{
	header('location:login.php');
}
else
{
?>
<?php

if (isset($_POST['submit'])) {
	$qn=$_POST['q'];
	$as=$_POST['a'];

	
   // $filename = $_FILES['image']['name'];
    //$tempname = $_FILES['image']['tmp_name']; 
    //$folder = "image/".$filename; 
	//move_uploaded_file($tempname,$folder);
	
    $sql = "INSERT INTO termsn(nq,na) values ('$qn','$as')";
    mysqli_query($connect, $sql) or die($sql);
    header('location: termsn.php');
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

    <!-- Right navbar links -->
  
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
            <h1>Naye Soch Naya Kadam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Qustion Answer Upload</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Qustion Answer Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
		<form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                 
				  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Qustion</label>
                        <input type="text" name="q" class="form-control" placeholder="Qustion">
                      </div>
                  </div> 
				  <div class="form-group">
                    <div class="form-group">
                        <label for="Main">Answer</label>
                        <input type="text" name="a" class="form-control" placeholder="Awnser">
                      </div>
                  </div> 
				 
				  
				
				 <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input"  required="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>-->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            <!-- /.card -->

          
                    <!-- <label for="customFile">Custom File</label> -->

                 
                  </div>
                  </div>
                
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

	
			<section>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Avillable Offer Are</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Qustion</th>
                    <th>Awnser</th>
                  
                  
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
										 $query = "SELECT * FROM termsn ";
										$result = mysqli_query($connect, $query);
										while ($row = mysqli_fetch_assoc($result)) {
    
											?>
                  <tr>
                    <td><?php echo $row['nq'];?></td>
                    <td><?php echo $row['na'];?></td>
                     <td><a href="deletetermn.php?id=<?php echo $row['nsid']; ?>"> <span class="btn btn-info">Delete</span></a></td>

                  
                  </tr>
      
                  </tbody>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php } ?>